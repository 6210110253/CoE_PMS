<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\ProjectController;
use App\Http\Controllers\Student\AnnouncementController;


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
    Route::get('/meeting','meeting')
        ->name('meeting');
    Route::get('/meeting-list','meeting_list')
        ->name('meeting.list');

    Route::get('/submit-meeting', 'submit_meeting')
        ->name('submit.meeting');
    Route::get('/submit-report', 'submit_report')
        ->name('submit.report');



    Route::get('/student-home', 'student_home')
        ->name('student.home');


    //TODO::reservation
    Route::post('student/reservation','reservation')
        ->name('reservation');






});