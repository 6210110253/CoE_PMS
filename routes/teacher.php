<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\ProjectController;

Route::controller(ProjectController::class)->name('teacher.')->prefix('teacher/')
    ->group(function () {

    Route::get('/project-teacher',  'project_teacher')
        ->name('project.teacher');   
    Route::get('/project-create', 'create')
        ->name('project.create');
    Route::get('/project-propose-to-teacher', 'project_propose_to_teacher')
        ->name('project.propose.to.teacher');
    Route::get('/project-detail-teacher/{project}', 'project_detail_teacher')
        ->name('project.detail.teacher');
    Route::get('/project-request', 'project_request')
        ->name('project.request');
    Route::post('/project/store','store')
        ->name('project.store');
    Route::get('/project/edit/{project}','edit')
        ->name('project.edit');
    Route::post('/project/{project}/update','update')
        ->name('project.update');

    Route::get('/dashboard', function () {
            return view('pages.teacher.dashboard');
        })->name('dashboard');

    Route::get('/meeting','meeting')
        ->name('meeting');
    Route::get('/meeting-detail','meeting_detail')
        ->name('meeting.datail');

});