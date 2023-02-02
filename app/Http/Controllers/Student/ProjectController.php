<?php

namespace App\Http\Controllers\Student;

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

    public function create()
    {
        $students = $this->user_repo->getStudent(); 
        return view('pages.student.project_propose',compact('students'));
    }

    public function submission()
    {
        return view('pages.student.submission');
    }

    public function store(Request $request){
        $this->project_repo->store($request);
        return redirect()->back();
    }

    public function edit(Project $project){
        $students = $this->user_repo->getStudent(); 
        return view('pages.student.project_propose',compact('students','project'));
    }

    public function update(Project $project,Request $request){
        $this->project_repo->variable($project,$request);
        return redirect()->back();
    }
}
