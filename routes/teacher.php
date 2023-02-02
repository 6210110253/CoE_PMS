<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\ProjectController;

Route::controller(ProjectController::class)->name('teacher.')->group(function () {

    Route::get('/project-teacher',  'project_teacher')
        ->name('project.teacher');   
    Route::get('/project-create', 'project_create')
        ->name('project.create');
    Route::get('/project-propose-to-teacher', 'project_propose_to_teacher')
        ->name('project.propose.to.teacher');
    Route::get('/project-detail-teacher', 'project_detail_teacher')
        ->name('project.detail.teacher');
    Route::get('/project-request', 'project_request')
        ->name('project.request');

});