<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\ProjectController;


Route::controller(ProjectController::class)->name('student.')->group(function () {

    Route::get('/project-select', 'project_select')
        ->name('project.select');
    Route::get('/project-list', 'project_list')
        ->name('project.list');
    Route::get('/project-detail', 'project_detail')
        ->name('project.detail');
    Route::get('/project-propose', 'create')
        ->name('project.propose');
    Route::get('/submission', 'submission')
        ->name('submission');
        Route::get('/meeting','meeting')
        ->name('meeting');
    Route::post('/project/store','store')
        ->name('project.store');
    Route::get('/project/edit/{project}','edit')
        ->name('project.edit');
    Route::post('/project/{project}/update','update')
        ->name('project.update');

    


});