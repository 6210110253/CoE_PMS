<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\ProjectController;
use App\Http\Controllers\Student\AnnouncementController;
use App\Http\Controllers\Student\MeetingController;


Route::controller(ProjectController::class)->name('student.')->prefix('student/')
    ->group(function () {

    Route::get('/project-select', 'project_select')
        ->name('project.select');
    Route::get('/project-propose', 'create')
        ->name('project.propose');
    Route::post('/project/store','store')
        ->name('project.store');
    Route::get('/project/edit/{project}','edit')
        ->name('project.edit');
    Route::post('/project/{project}/update','update')
        ->name('project.update');
    Route::get('/project-view', 'project_view')
        ->name('project.view');

    Route::get('/submission', 'submission')
        ->name('submission');
    Route::get('/submit-meeting/{JobProcess}', 'formProcess')
        ->name('submit.meeting');
    Route::post('/submit-meeting/store', 'submit_meeting_store')
        ->name('submit.meeting.store');
    Route::get('/submit-report', 'submit_report')
        ->name('submit.report');


    Route::get('/student-home', 'student_home')
        ->name('student.home');

    //TODO::reservation
    Route::post('student/reservation','reservation')
        ->name('reservation');

});

Route::controller(MeetingController::class)->name('student.')->prefix('student/')
    ->group(function () {

    Route::get('/meeting','create')
        ->name('meeting');
    Route::post('/meeting/store','store')
        ->name('meeting.store');
    Route::get('/meeting/edit/{meeting}','edit')
        ->name('meeting.edit');
    Route::post('/meeting/{meeting}/update','update')
         ->name('meeting.update');
    Route::get('/meeting-list','meeting_list')
        ->name('meeting.list');


});