<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;

Route::controller(ProjectController::class)->name('admin.')->group(function () {

    Route::get('/project-status', [ProjectController::class, 'project_status'])
    ->name('project.status');

    Route::get('/submission', 'submission')
        ->name('submission');

    Route::get('/management', 'management')
        ->name('management');


});
