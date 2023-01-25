<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\{
    ProfileController,
    MailSettingController,

};


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test-mail',function(){

    $message = "Testing mail";

    \Mail::raw('Hi, welcome!', function ($message) {
      $message->to('ajayydavex@gmail.com')
        ->subject('Testing mail');
    });

    dd('sent');

});


Route::get('/dashboard', function () {
    return view('front.dashboard');
})->middleware(['front'])->name('dashboard');


require __DIR__.'/front_auth.php';

// Admin routes
Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('admin.dashboard');

require __DIR__.'/auth.php';

Route::get('/project_select', [App\Http\Controllers\PageController::class, 'project_select']);
Route::get('/project_list', [App\Http\Controllers\PageController::class, 'project_list']);
Route::get('/project_detail', [App\Http\Controllers\PageController::class, 'project_detail']);
Route::get('/project_propose', [App\Http\Controllers\PageController::class, 'project_propose']);
Route::get('/project_teacher', [App\Http\Controllers\PageController::class, 'project_teacher']);
Route::get('/project_create', [App\Http\Controllers\PageController::class, 'project_create']);
Route::get('/project_propose_to_teacher', [App\Http\Controllers\PageController::class, 'project_propose_to_teacher']);
Route::get('/project_detail_teacher', [App\Http\Controllers\PageController::class, 'project_detail_teacher']);



Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')
    ->group(function(){
        Route::resource('roles','RoleController');
        Route::resource('permissions','PermissionController');
        Route::resource('users','UserController');
        Route::resource('posts','PostController');

        Route::get('/profile',[ProfileController::class,'index'])->name('profile');
        Route::put('/profile-update',[ProfileController::class,'update'])->name('profile.update');
        Route::get('/mail',[MailSettingController::class,'index'])->name('mail.index');
        Route::put('/mail-update/{mailsetting}',[MailSettingController::class,'update'])->name('mail.update');
});