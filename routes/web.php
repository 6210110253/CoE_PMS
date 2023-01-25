<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    ProfileController,
    MailSettingController,

};

use App\Http\Controllers\PageController;


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

Route::get('/project-select', [PageController::class, 'project_select'])
    ->name('project.select');
Route::get('/project-list', [PageController::class, 'project_list'])
    ->name('project.list');
Route::get('/project-detail', [PageController::class, 'project_detail'])
    ->name('project.detail');
Route::get('/project-propose', [PageController::class, 'project_propose'])
    ->name('project.propose');
Route::get('/project-teacher', [PageController::class, 'project_teacher'])
    ->name('project.teacher');
Route::get('/project-create', [PageController::class, 'project_create'])
    ->name('project.create');
Route::get('/project-propose-to-teacher', [PageController::class, 'project_propose_to_teacher'])
    ->name('project.propose.to.teacher');
Route::get('/project-detail-teacher', [PageController::class, 'project_detail_teacher'])
    ->name('project.detail.teacher');
Route::get('/project-status', [PageController::class, 'project_status'])
    ->name('project.status');

Route::get('/project-request', [PageController::class, 'project_request'])
    ->name('project.request');

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