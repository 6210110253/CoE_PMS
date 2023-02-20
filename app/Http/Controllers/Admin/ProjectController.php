<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;


class ProjectController extends Controller
{
    public function project_status()
    {
        $project = Project::query()
        ->with([
            'project_reservations.users',
        ])
        ->get();
        //dd($project);

        return view('pages.admin.project_status');
    }

    public function submission(){
        return view('pages.admin.submission');
    }

    public function submission_detail(){
        return view('pages.admin.submission_detail');
    }

    public function old_project(){
        return view('pages.admin.old_project');
    }


}
