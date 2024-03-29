<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\ProjectController;
use App\Http\Controllers\Teacher\AnnouncementController;
use App\Http\Controllers\Teacher\MeetingController;




Route::controller(ProjectController::class)->name('teacher.')->prefix('teacher/')
    ->group(function () {

    Route::get('/project-teacher',  'project_teacher')
        ->name('project.teacher');
    Route::get('/project-create', 'create')
        ->name('project.create');
    Route::get('/project-propose-to-teacher', 'project_propose_to_teacher')
        ->name('project.propose.to.teacher');
    Route::get('/project-detail-teacher/{project_reservation}', 'project_detail_teacher')
        ->name('project.detail.teacher');
    Route::get('/project-detail-teacher-create/{project}', 'project_detail_teacher_create')
        ->name('project.detail.teacher.create');
    Route::get('/project-request', 'project_request')
        ->name('project.request');
    Route::post('/project/store','store')
        ->name('project.store');
    Route::get('/project/edit/{project}','edit')
        ->name('project.edit');
    Route::post('/project/{project}/update','update')
        ->name('project.update');
    Route::get('/project-list/{id}', 'project_list')
        ->name('project.list');
    Route::get('/project-detail/{project}', 'project_detail')
        ->name('project.detail');

    Route::get('/dashboard','dashboard' )
        ->name('dashboard');

    Route::get('/submission', 'submission')
        ->name('submission');
    Route::get('/submission/detail', 'submission_detail')
        ->name('submission.detail');

    Route::post('/project/reservation/update_status', 'updateStatus')
        ->name('project.reservation.update_status');

    Route::get('/old_project', 'old_project')
        ->name('old.project');

        Route::post('/project/reservation/cancel', 'cancel')
        ->name('project.reservation.cancel');



});

Route::controller(MeetingController::class)->name('teacher.')->prefix('teacher/')
    ->group(function () {

    Route::get('/meeting','index')
        ->name('meeting');
    
    Route::get('/meeting-list','meeting')
        ->name('meeting.list');

    Route::get('/meeting-detail','meeting_detail')
        ->name('meeting.datail');

    Route::post('/meeting/update', 'updateStatusMeeting')
        ->name('meeting.status');

});