<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Repositories\ProjectRepository;
use App\Repositories\UserRepository;


class ProjectController extends Controller
{
    protected $project_repo;
    protected $user_repo;

    public function __construct(
        ProjectRepository $projectRepository, 
        UserRepository $userRepository)
    {
        $this->project_repo = $projectRepository;
        $this->user_repo = $userRepository;
    }

    public function project_teacher()
    {
        return view('pages.teacher.project_teacher');
    }

    public function create(){
        $teachers = $this->user_repo->getTeacher(); 
        return view('pages.teacher.project_create',compact('teachers'));
    }

    public function store(Request $request){
        $this->project_repo->store($request);
        return redirect()->back();
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
