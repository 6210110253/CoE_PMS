<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">
                <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white"></span>
                            <a href="{{ route('teacher.project.teacher') }}">
                                    <button class="flex items-center bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.707,15.707l-5-5C5.512,10.512,5,10.265,5,9.914s0.512-0.598,0.707-0.793l5-5c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L8.414,8H15c0.553,0,1,0.447,1,1s-0.447,1-1,1H8.414l3.707,3.707C11.098,14.684,11.195,14.854,11.195,15.025C11.195,15.195,11.098,15.367,10.707,15.707z" />
                                        </svg>
                                        <span>Back</span>
                                    </button>
                            </a>
                </div>

                <br>

                <div class="w-full p-4  bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">

                    <form id="project_teacher"

                        action=" {{ Request::route()->getName() == 'teacher.project.create' ?  route('teacher.project.store') : route('teacher.project.update', $project) }}"
                        method="post"
                        enctype="multipart/form-data" >
                        @csrf
                        <input type="hidden" name="created_by" value="{{ Auth()->user()->id }}">
                        <input type="hidden" name="approve_by" value="{{ Auth()->user()->id }}">
                        <div class="mb-6">
                            <label for="semester" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year <span class="text-red-500">*</span></label>
                            <select name="semester_id" id="semester">
                                <option value="">--select semester--</option>
                                @foreach ($semesters as $semester)
                                <option value="{{$semester->id }}" {{ !empty($project->semester_id) ? $project->semester_id == $semester->id ? 'selected' : ''  : '' }}> {{$semester->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    <div class="mb-6">
                        <label  for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Topic <span class="text-red-500">*</span></label>
                        <input type="text" id="title" name="title" value="{{$project->title ?? ''}}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Topic" required>
                    </div>
                    <div class="mb-6">

                        <label for="detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description <span class="text-red-500">*</span></label>
                        <textarea id="detail" name="detail" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment...">{{$project->detail ?? ''}}</textarea>

                    </div>
                    <div class="mb-6">

                        <label for="scope" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Scope <span class="text-red-500">*</span></label>
                        <textarea id="scope" name="scope" rows="4" class="block p-2.5 w-full
                            text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300
                            focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600
                            dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Leave a comment...">{{$project->scope ?? ''}}</textarea>

                    </div>
                    <div class="mb-6">

                        <label for="objective" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Objective <span class="text-red-500">*</span></label>
                        <textarea id="objective" name="objective" rows="4" class="block p-2.5 w-full text-sm
                            text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500
                            focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Leave a comment...">{{$project->objective ?? ''}}</textarea>

                    </div>

                    <div class="mb-6">

                        <label for="results" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Results <span class="text-red-500">*</span></label>
                        <textarea id="results" name="results" rows="4" class="block p-2.5 w-full
                            text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300
                            focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600
                            dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                            dark:focus:border-blue-500" placeholder="Leave a comment...">{{$project->results ?? ''}}</textarea>

                    </div>

                    <div class="mb-6">

                        <label for="condition" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Condition</label>
                        <textarea name="condition" id="condition" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50
                            rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500
                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                            dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Leave a comment...">{{$project->condition ?? ''}}</textarea>

                    </div>

                    <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">ER Diagram</label>
                    <input name="file_er_diagram" class="block  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">

                    @if(!empty($project->file_er_diagram))
                    <br>
                    <a target="_blank" href="{{ Storage::url($project->file_er_diagram) }}">
                      <img src="{{ asset('images\icon_file.png') }}" width="50">
                    </a>
                    @endif
                    </div>

                    <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Design File</label>
                    <input name="file_design" class="block  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">

                    @if(!empty($project->file_design))
                    <br>
                    <a target="_blank" href="{{ Storage::url($project->file_design) }}">
                      <img src="{{ asset('images\icon_file.png') }}" width="50">
                    </a>
                    @endif
                    </div>

                    <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Use Case</label>
                    <input name="usecase" class="block  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">

                    @if(!empty($project->usecase))
                    <br>
                    <a target="_blank" href="{{ Storage::url($project->usecase) }}">
                      <img src="{{ asset('images\icon_file.png') }}" width="50">
                    </a>
                    @endif

                    </div>

                    <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Other</label>
                    <input name="file_other[]" class="block  text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file" multiple="">

                        @if(!empty($project->file_other))
                        <br>
                        <div class="flex flex-row gap-2">
                        @foreach ($project->file_other as $file_other )
                            <a target="_blank" href="{{ Storage::url($file_other) }}">
                            <img src="{{ asset('images\icon_file.png') }}" width="50">
                            </a>
                        @endforeach
                        </div>
                        @endif

                    </div>

                    <div class="mb-6">
                        <label for="member_count" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number Member <span class="text-red-500">*</span></label>
                        <input type="text" value="{{$project->member_count ?? ''}}" id="member_count" name="member_count" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Member" required>
                    </div>

                    <div class="mb-6">
                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status <span class="text-red-500">*</span></label>
                        <select name="status" id="status">
                            <option value="">--select status--</option>
                            <option value="draft" {{  @$project->status == 'draft' ? 'selected' : '' }}> draft</option>
                            <option value="publish" {{  @$project->status == 'publish' ? 'selected' : '' }}> publish</option>

                        </select>
                    </div>




                    <div class="text-center mt-16 mb-16">
                    <button class="flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M17.707,3.293C17.316,2.902,16.684,2.902,16.293,3.293L7,12.586V8c0-0.553-0.447-1-1-1s-1,0.447-1,1v6c0,0.553,0.447,1,1,1h10c0.553,0,1-0.447,1-1s-0.447-1-1-1H8.414l9.293-9.293c0.391-0.391,0.391-1.023,0-1.414S18.098,2.902,17.707,3.293z" />
                        </svg>
                        Submit
                    </button>
                    </div>
                    </form>

                </div>

            </div>
        </main>
    </div>
</div>
<script>
    $("#project_teacher").validate({
        rules: {
            title: {
                required: true,
                maxlength: 250,
                minlength: 3
            },
            detail: {
                required: true
            },
            scope: {
                required: true
            },
            objective: {
                required: true
            },
            results: {
                required: true
            },
            student_reservetion: {
                required: true
            }


        }

});
</script>
</x-app-layout>
