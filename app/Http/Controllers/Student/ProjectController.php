<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Announcement;
use App\Repositories\ProjectRepository;
use App\Repositories\UserRepository;
use App\Traits\uploadImage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Repositories\ProjectReservationRepository;
use App\Repositories\SemesterRepository;
use App\Repositories\ProjectListRepository;
use App\Repositories\JobProcessesRepository;


class ProjectController extends Controller
{
    use uploadImage;

    protected $project_repo;
    protected $user_repo, $project_reservation_repo, $semester_repo;

    public function __construct(
        ProjectRepository $projectRepository,
        UserRepository $userRepository,
        ProjectReservationRepository $projectReservationRepository,
        SemesterRepository $semesterRepository,
        ProjectListRepository $projectListRepository,
        JobProcessesRepository $jobProcessesRepository

    ){
        $this->project_repo = $projectRepository;
        $this->user_repo = $userRepository;
        $this->project_reservation_repo = $projectReservationRepository;
        $this->semester_repo = $semesterRepository;
        $this->project_list_repo=$projectListRepository;
        $this->job_processes_repo = $jobProcessesRepository;
    }

    public function project_select()
    {
        $teachers = User::role('teacher')->get();
        //dd($users);
        return view('pages.student.project_select', compact('teachers'));

    }

    public function create()
    {
        $students = $this->user_repo->getStudent();
        $teachers = $this->user_repo->getTeacher();
        $semesters = $this->semester_repo->getAll();
        return view('pages.student.project_propose',compact('students','teachers','semesters'));
    }

    public function submission()
    {
        // $project_lists = $this->project_list_repo->getProjectListAll(Auth::id());
        // dd($project_lists);
        $job_pros = $this->job_processes_repo->getJobProcess();
        return view('pages.student.submission', compact('job_pros'));
    }

    public function store(Request $request){

        $request =  $this->myUploadFile($request);

        $project = $this->project_repo->store($request);


       $user_id = Auth()->id();

       $param = [
        'project_id' => $project->id,
        'user_id' => $user_id,
        'student_reservetion' => $request->student_reservetion,
        'status' => 'wait',
        'teacher_id' => $request->approve_by
       ];

       $obj = $this->project_reservation_repo->store($param);

        return redirect()->back();
    }

    public function edit(Project $project){
        $students = $this->user_repo->getStudent();
        $teachers = $this->user_repo->getTeacher();
        $semesters = $this->semester_repo->getAll();
        return view('pages.student.project_propose',compact('students','project','teachers','semesters'));
    }

    public function update(Project $project,Request $request){


        $request =  $this->myUploadFile($request);

        $project = $this->project_repo->variable($project,$request);
        // $project->reservation()->update([
        //     'semester_id' => $request->semester_id
        //     // 'comment' => 'edit '.$project->title
        // ]);
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


// //ในหน้าแอดมิน
//     public function project_status()
//     {
//         $project = Project::query()
//         ->with([
//             'project_reservations.users',
//         ])
//         ->get();
//         //dd($project);

//         return view('pages.admin.project_status');
//     }

    public function project_request(){
        return view('pages.teacher.project_request');
    }

    public function meeting(){
        return view('pages.student.meeting');
    }

    public function project_view(){

        //ฝั่งใช้งาน
        $project_bookings = $this->project_reservation_repo->getProjectBooking(Auth::id());
        // dd($project_bookings);

        return view('pages.student.project_view', compact('project_bookings'));
    }

    public function student_home(){
        $announcements =  Announcement::all();

        return view('pages.student.student_home', compact('announcements'));
    }

    public function submit_meeting(){
        return view('pages.student.submit_meeting');
    }

    public function submit_report(){
        return view('pages.student.submit_report');
    }

    public function meeting_list(){
        return view('pages.student.meeting_list');
    }

    public function reservation(Request $request){

       $project_id =  $request->project_id;

       $user_id = Auth()->id();

       $param = [
        'project_id' => $project_id,
        'user_id' => $user_id,
        'student_reservetion' => $request->student_reservetion,
        'status' => 'wait',
        'type' => 'reservation',
        'teacher_id' => $this->project_repo->getProjectById($project_id)->approve_by
       ];

       $obj = $this->project_reservation_repo->store($param);

       return \response()->json([
            'status' => true,
            'data' => $obj,
            'massege' => 'sucess'
        ]);
    }


}
