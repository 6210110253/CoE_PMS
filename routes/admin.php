<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SemesterController;
use App\Http\Controllers\Admin\JobProcessedsController;
use App\Http\Controllers\Admin\AnnouncementController;


Route::controller(ProjectController::class)->name('admin.')->prefix('admin/')->group(function () {

    Route::get('/project-status','project_status')
    ->name('project.status');

    Route::get('/submission', 'submission')
        ->name('submission');

        Route::get('/submission/detail', 'submission_detail')
        ->name('submission.detail');

    Route::get('/old_project', 'old_project')
        ->name('old.project');

});

Route::controller(AnnouncementController::class)->name('admin.')->prefix('admin/')
    ->group(function () {

    Route::get('/announcement/show', 'show')
        ->name('announcement.show');
    
    Route::get('/announcement', 'index')
    ->name('announcement');

    Route::post('/announcement/store', 'store')
    ->name('announcement.store');

});

Route::controller(SemesterController::class)->name('admin.')->prefix('admin/')
    ->group(function () {

    Route::get('/management', 'management')
        ->name('management');

    Route::post('/semester/store', 'store')
    ->name('semester.store');

    Route::post('/update-active', 'updateActive')
        ->name('update.active');




});

Route::controller(JobProcessedsController::class)->name('admin.')->prefix('admin/')
    ->group(function () {

    Route::get('/form/create/submission', 'create')
        ->name('form.create.submission');
    Route::post('/submission/store', 'store')
    ->name('submission.store');
    Route::get('/submission/edit/{jobprocess}','edit')
        ->name('submission.edit');
    Route::post('/submission/{jobprocess}/update','update')
        ->name('submission.update');



});