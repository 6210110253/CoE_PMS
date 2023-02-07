<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Repositories\ProjectRepository;
use App\Repositories\UserRepository;
use App\Traits\uploadImage;
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
        $teachers = $this->user_repo->getTeacher();
        return view('pages.student.project_propose',compact('students','teachers'));
    }

    public function submission()
    {
        return view('pages.student.submission');
    }

    public function store(Request $request){

        $request =  $this->myUploadFile($request);

        $this->project_repo->store($request);
        return redirect()->back();
    }

    public function edit(Project $project){
        $students = $this->user_repo->getStudent();
        $teachers = $this->user_repo->getTeacher();
        return view('pages.student.project_propose',compact('students','project','teachers'));
    }

    public function update(Project $project,Request $request){

        $request =  $this->myUploadFile($request);

        $this->project_repo->variable($project,$request);
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

    public function project_request(){
        return view('pages.teacher.project_request');
    }

    public function meeting(){
        return view('pages.student.meeting');
    }

    public function view(){
        return view('pages.student.project_view');
    }

}