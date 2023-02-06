<?php
namespace App\Traits;

use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;


trait uploadImage{

     /** @var string */
     private $filesystem;

     /** @var string */
     private $directory = '';

    function saveImage($image, $path = 'images')
    {
        $imageName = time().'_'.$image->getClientOriginalName();

        $image->move(public_path($path), $imageName);

        // $image->storeAs($path,$imageName,'public');
        return $imageName;
    }

    public function uploadImage(
        $image,
        $path = 'upload',
        $name_file = '',
        $width = 600,
        $height = 400,
        $resizePercent = 1.0,
        $quality = 80
    )
    {
        $extension = $image->getClientOriginalExtension();
        $this->filesystem = env('FILESYSTEM_DRIVER', 'public');
        try {
            if (empty($name_file)) {
                $new_file_name = $image->getClientOriginalName();
                $new_file_name = str_replace("." . $extension, "", $new_file_name);
                $name_file = $this->clean_string($new_file_name) . '-' . time() . Str::random(5);
            }
            $name = Str::of($name_file)->lower();
            $file = $image->storeAs($path, "{$name}.{$extension}", $this->filesystem);
            $file = preg_replace('#/+#', '/', $file);

            $content = Storage::disk($this->filesystem)->get($file);
            $imageContent = Image::make($content);

            if ($resizePercent < 1.0) {
                $imageContent = $imageContent->resize(
                    ($width * $resizePercent),
                    ($height * $resizePercent),
                    function ($constraint) {
                        //$constraint->aspectRatio();
                    }
                );
            }

            $imageFile = $path . '/' . $name . '.' . $extension;

            Storage::disk($this->filesystem)->put($imageFile, $imageContent->encode($extension, $quality)->encoded);

        } catch (\Exception $e) {
            $message = $e->getMessage();
            throw new \Exception($message);
        }

        return $path = preg_replace('/^public\//', '', $file);
    }

    public function upload($request)
    {
        $this->filesystem = env('FILESYSTEM_DRIVER', 'public');

        $extension = $request->file->getClientOriginalExtension();

        if (empty($request->name_file)) {
            $name = $request->file->getClientOriginalName();
            $name = Str::replaceLast('.' . $extension, '', $name);
            $name = $this->clean_string($name) . '-' . time() . Str::random(5);
        } else {
            $name = $request->name_file;
        }
        $details = (object)$request->get('details') ?? '{}';
        $absolute_path = Storage::disk($this->filesystem)->path($request->upload_path);

        try {
            //$realPath = Storage::disk($this->filesystem)->getDriver()->getAdapter()->getPathPrefix();

            $allowedMimeTypes = config('fileupload.media.allowed_mimetypes', '*');
            if ($allowedMimeTypes != '*' && (is_array($allowedMimeTypes) && !in_array($request->file->getMimeType(), $allowedMimeTypes))) {
                throw new Exception('mimetype_not_allowed');
            }

            if (!$request->has('filename') || $request->get('filename') == 'null') {
                while (Storage::disk($this->filesystem)->exists(Str::finish($request->upload_path, '/') . $name . '.' . $extension, $this->filesystem)) {
                    $name = get_file_name($name);
                }
            } else {
                $name = str_replace('{uid}', Auth::user()->getKey(), $request->get('filename'));
                if (Str::contains($name, '{date:')) {
                    $name = preg_replace_callback('/\{date:([^\/\}]*)\}/', function ($date) {
                        return \Carbon\Carbon::now()->format($date[1]);
                    }, $name);
                }
                if (Str::contains($name, '{random:')) {
                    $name = preg_replace_callback('/\{random:([0-9]+)\}/', function ($random) {
                        return Str::random($random[1]);
                    }, $name);
                }
            }

            $file = $request->file->storeAs($request->upload_path, $name . '.' . $extension, $this->filesystem);
            $file = preg_replace('#/+#', '/', $file);

            $imageMimeTypes = [
                'image/jpg',
                'image/jpeg',
                'image/png',
                'image/gif',
                'image/bmp',
                //'image/svg+xml',
            ];
            if (in_array($request->file->getMimeType(), $imageMimeTypes)) {
                $content = Storage::disk($this->filesystem)->get($file);
                $image = Image::make($content);

                $realPath = $request->upload_path;
                if ($request->file->getClientOriginalExtension() == 'gif') {
                    copy($request->file->getRealPath(), $realPath . $file);
                } else {

                    $image = $image->orientate();

                    // Generate thumbnails
                    if (property_exists($details, 'thumbnails') && is_array($details->thumbnails)) {
                        foreach ($details->thumbnails as $thumbnail_data) {
                            $type = $thumbnail_data->type ?? 'fit';
                            $thumbnail = Image::make(clone $image);
                            if ($type == 'fit') {
                                $thumbnail = $thumbnail->fit(
                                    $thumbnail_data->width,
                                    ($thumbnail_data->height ?? null),
                                    function ($constraint) {
                                        $constraint->aspectRatio();
                                    },
                                    ($thumbnail_data->position ?? 'center')
                                );
                            } elseif ($type == 'crop') {
                                $thumbnail = $thumbnail->crop(
                                    $thumbnail_data->width,
                                    $thumbnail_data->height,
                                    ($thumbnail_data->x ?? null),
                                    ($thumbnail_data->y ?? null)
                                );
                            } elseif ($type == 'resize') {
                                $thumbnail = $thumbnail->resize(
                                    $thumbnail_data->width,
                                    ($thumbnail_data->height ?? null),
                                    function ($constraint) use ($thumbnail_data) {
                                        $constraint->aspectRatio();
                                        if (!($thumbnail_data->upsize ?? true)) {
                                            $constraint->upsize();
                                        }
                                    }
                                );
                            }
                            if (
                                property_exists($details, 'watermark') &&
                                property_exists($details->watermark, 'source') &&
                                property_exists($thumbnail_data, 'watermark') &&
                                $thumbnail_data->watermark
                            ) {
                                $thumbnail = $this->addWatermarkToImage($thumbnail, $details->watermark);
                            }
                            $thumbnail_file = $request->upload_path . $name . '-' . ($thumbnail_data->name ?? 'thumbnail') . '.' . $extension;
                            Storage::disk($this->filesystem)->put($thumbnail_file, $thumbnail->encode($extension, ($details->quality ?? 90))->encoded);
                        }
                    }
                    // Add watermark to image
                    if (property_exists($details, 'watermark') && property_exists($details->watermark, 'source')) {
                        $image = $this->addWatermarkToImage($image, $details->watermark);
                    }
                    Storage::disk($this->filesystem)->put($file, $image->encode($extension, ($details->quality ?? 90))->encoded);
                }
            }

            $success = true;
            $message = 'uploaded file success';
            $path = preg_replace('/^public\//', '', $file);

        } catch (Exception $e) {
            $success = false;
            $message = $e->getMessage();
            Log::error($message);
            $path = '';
        }

        return $path;
    }

    public function clean_string($string, string $divider = '-')
    {
        $text = preg_replace('~[^\pL\d]+~u', $divider, $string);
        $text = trim($text, $divider);
        $text = preg_replace('~-+~', $divider, $text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }

}