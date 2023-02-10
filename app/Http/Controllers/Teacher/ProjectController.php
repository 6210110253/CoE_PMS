<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Repositories\ProjectRepository;
use App\Repositories\UserRepository;
use App\Traits\uploadImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    use uploadImage;

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
        $projects = $this->project_repo->getProjectByTeacherId(Auth::id());

        return view('pages.teacher.project_teacher', compact('projects'));
    }

    public function create(){

        $teachers = $this->user_repo->getTeacher();
        return view('pages.teacher.project_create',compact('teachers'));
    }

    public function store(Request $request){

        $request =  $this->myUploadFile($request);

        $this->project_repo->store($request);
        return redirect()->back();
    }

    private function myUploadFile($request)
    {

        if(!empty($request->file_er_diagram)){
            $request->name_file = Str::random(20);
            $request->file = $request->file_er_diagram;
            $request->upload_path = 'projects';
            $request->file_er_diagram = $this->upload($request);
        }

        if(!empty($request->file_design)){
            $request->name_file = Str::random(20);
            $request->file = $request->file_design;
            $request->upload_path = 'projects';
            $request->file_design = $this->upload($request);
        }

        if(!empty($request->usecase)){
            $request->name_file = Str::random(20);
            $request->file = $request->usecase;
            $request->upload_path = 'projects';
            $request->usecase = $this->upload($request);
        }

        if(!empty($request->file_other)){
            $file_other_arr = [];
            foreach($request->file_other as $other){
                $request->name_file = Str::random(20);
                $request->file = $other;
                $request->upload_path = 'projects';
                $file_other_arr[] = $this->upload($request);
            }
            $request->file_other = $file_other_arr;

        }



        return $request;
    }


    public function project_propose_to_teacher(){
        return view('pages.teacher.project_propose_to_teacher');
    }

    public function project_detail_teacher(Project $project){
        return view('pages.teacher.project_detail_teacher',compact('project'));

    }

    public function edit(Project $project){
        return view('pages.teacher.project_create',compact('project'));
    }

    public function update(Project $project,Request $request){

        $request =  $this->myUploadFile($request);

        $this->project_repo->variable($project,$request);
        return redirect()->back();
    }

    public function meeting(){
        return view('pages.teacher.meeting');
    }

    public function meeting_detail(){
        return view('pages.teacher.meeting_detail');
    }

    public function submission(){
        return view('pages.teacher.submission');
    }

    public function project_list($id)
    {
        $projects = $this->project_repo->getProjectByTeacherCreate($id);
        return view('pages.student.project_list', compact('projects'));
    }

    public function project_detail(Project $project)
    {

        return view('pages.student.project_detail',compact('project'));
    }
}