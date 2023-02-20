<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SemesterController;

Route::controller(ProjectController::class)->name('admin.')->prefix('admin/')->group(function () {

    Route::get('/project-status','project_status')
    ->name('project.status');

    Route::get('/submission', 'submission')
        ->name('submission');

        Route::get('/submission/detail', 'submission_detail')
        ->name('submission.detail');


    Route::get('/form-create-submission', 'form_create_submission')
        ->name('form.create.submission');

    Route::get('/form-create-submission', 'form_create_submission')
        ->name('form.create.submission');

    Route::get('/old_project', 'old_project')
        ->name('old.project');

});

Route::controller(AnnouncementController::class)->name('admin.')->prefix('admin/')
    ->group(function () {

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





});
