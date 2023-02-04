<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    public function project_teacher()
    {
        return view('pages.teacher.project_teacher');
    }

    public function project_create(){
        return view('pages.teacher.project_create');
    }

    public function project_propose_to_teacher(){
        return view('pages.teacher.project_propose_to_teacher');
    }

    public function project_detail_teacher(){
        return view('pages.teacher.project_detail_teacher');

    }

    public function project_request(){
        return view('pages.teacher.project_request');
    }

    public function meeting(){
        return view('pages.student.meeting');
    }

}
