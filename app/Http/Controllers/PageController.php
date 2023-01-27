<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;

class PageController extends Controller
{
    public function project_select()
    {
        $teachers = User::role('teacher')->get();
        //dd($users);
        return view('pages.student.project_select', compact('teachers'));

    }

    public function project_list()
    {
        return view('pages.student.project_list');
    }

    public function project_detail()
    {
        return view('pages.student.project_detail');
    }

    public function project_propose()
    {
        return view('pages.student.project_propose');
    }

    public function submission()
    {
        return view('pages.student.submission');
    }

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
    public function project_status()
    {
        $project = Project::query()
        ->with([
            'project_reservations.users',
        ])
        ->get();
    //    dd($project);

        return view('pages.admin.project_status');
    }

    public function project_request(){
        return view('pages.teacher.project_request');
    }


}