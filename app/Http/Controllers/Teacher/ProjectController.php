<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\ProjectReservation;
use App\Models\Announcement;
use App\Repositories\ProjectRepository;
use App\Repositories\UserRepository;
use App\Traits\uploadImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Repositories\ProjectReservationRepository;
use App\Repositories\ProjectListRepository;
use App\Repositories\SemesterRepository;


class ProjectController extends Controller
{
    use uploadImage;

    protected $project_repo;
    protected $user_repo, $semester_repo;


    public function __construct(
        ProjectRepository $projectRepository,
        UserRepository $userRepository,
        ProjectReservationRepository $projectReservationRepository,
        ProjectListRepository $projectListRepository,
        SemesterRepository $semesterRepository
        )
    {
        $this->project_repo = $projectRepository;
        $this->user_repo = $userRepository;
        $this->project_reservation_repo = $projectReservationRepository;
        $this->project_list_repo = $projectListRepository;
        $this->semester_repo = $semesterRepository;

    }

    public function project_teacher()
    {
        $projects = $this->project_repo->getProjectByTeacherCreate(Auth::id());
        //$teachers = User::role('teacher')->get();
        $project_reservations = $this->project_reservation_repo->getProjectReservations(Auth::id());
        $project_in_chart = $this->project_list_repo->getProjectInChart(Auth::id());
        // dd($project_in_chart);

        return view('pages.teacher.project_teacher', compact('project_reservations', 'projects','project_in_chart'));
    }

    public function create(){

        $teachers = $this->project_reservation_repo->getTeacher();
        $semesters = $this->semester_repo->getAll();
        return view('pages.teacher.project_create',compact('teachers', 'semesters'));
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

    public function project_detail_teacher(ProjectReservation $project_reservation){

        return view('pages.teacher.project_detail_teacher', compact('project_reservation'));

    }

    public function project_detail_teacher_create(Project $project){
        return view('pages.teacher.project_detail_teacher_create', compact('project'));
    }

    public function edit(Project $project){
        $semesters = $this->semester_repo->getAll();
        return view('pages.teacher.project_create',compact('project', 'semesters'));
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

    public function submission_detail(){
        return view('pages.teacher.submission_detail');
    }

    public function old_project(){
        return view('pages.teacher.old_project');
    }

    public function project_list($id)
    {
        $projects = $this->project_repo->getProjectByTeacherCreate($id);
        return view('pages.student.project.project_list', compact('projects'));
    }

    public function project_detail(Project $project)
    {

        $students = $this->user_repo->getStudent();

        return view('pages.student.project.project_detail',compact('project','students'));
    }

    public function dashboard(){
        $announcements =  Announcement::all();

        return view('pages.teacher.dashboard', compact('announcements'));
    }

    public function updateStatus(Request $request){

        $id = $request->project_reservation_id;
        $status = $request->status;
        $comment = $request->comment;
        $semester_id = $request->semester_id;


        $obj = $this->project_reservation_repo->updateStatus($id, $status, $comment,$semester_id);

        if($status == 'approve'){

            $users = $this->project_reservation_repo->getProjectReservationsNotById($id);

            $this->project_list_repo->store([
                'project_reservation_id' => $id,
                'approve_by' => $request->teacher_id,
                'student_reservetion' => $users,
                'status' => 'Pre-Project',
                'semester_id' => $semester_id

            ]);
        }

        return \response()->json([
            'status' => true,
            'data' => $obj,
            'massege' => 'sucess'
        ]);

    }





}
