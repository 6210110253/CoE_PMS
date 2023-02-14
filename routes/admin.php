<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\AnnouncementController ;

Route::controller(ProjectController::class)->name('admin.')->prefix('admin/')->group(function () {

    Route::get('/project-status','project_status')
    ->name('project.status');

    Route::get('/submission', 'submission')
        ->name('submission');

    Route::get('/management', 'management')
        ->name('management');




});

Route::controller(AnnouncementController::class)->name('admin.')->prefix('admin/')
    ->group(function () {

    Route::get('/announcement', 'index')
    ->name('announcement');

    Route::post('/announcement/store', 'store')
    ->name('announcement.store');




});
