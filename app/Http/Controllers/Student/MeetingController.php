<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Repositories\UserRepository;

use App\Models\Meeting;
use App\Repositories\MeetingRepository;

use App\Repositories\SemesterRepository;

use App\Models\MeetingResevation;
use App\Repositories\MeetingResevationRepository;


class MeetingController extends Controller
{
    protected $user_repo, $meeting_repo, $semester_repo, $meeting_resevation_repo ;

    public function __construct(
        UserRepository $userRepository,
        MeetingRepository $meetingRepository,
        SemesterRepository $semesterRepository,
        MeetingResevationRepository $meetingResevationRepository
      
    ){
        $this->user_repo = $userRepository;
        $this->meeting_repo = $meetingRepository;
        $this->semester_repo = $semesterRepository;
        $this->meeting_resevation_repo = $meetingResevationRepository;
       
    }
    public function index(){
        $meeting_aps = $this->meeting_resevation_repo->getMeetimgStatusApproveByStudent(Auth::id());
        return view('pages.student.meeting.index',compact('meeting_aps'));
    }

    public function create(){
        $teachers = $this->user_repo->getTeacher();
        $semesters = $this->semester_repo->getAll();
        return view('pages.student.meeting.meeting',compact('teachers','semesters'));
    }

    public function store(Request $request){

        $meeting = $this->meeting_repo->store($request);

        $user_id = Auth()->id();

        $param = [
            'meeting_id' => $meeting->id,
            'user_id' => $user_id,
            'status' => 'wait',
            'teacher_id' => $request->approve_by
           ];
    
           $obj = $this->meeting_resevation_repo->store($param);

        return redirect()->back();
    }

    public function edit(Meeting $meeting){
        $teachers = $this->user_repo->getTeacher();
        $semesters = $this->semester_repo->getAll();
        return view('pages.student.meeting.meeting',compact('teachers','semesters','meeting'));
    }

    public function update(Meeting $meeting,Request $request){

        $meeting = $this->meeting_repo->variable($meeting,$request);
        return redirect()->back();
    }

    public function meeting_list(){
        $meetings = $this->meeting_resevation_repo->getStudentMeeting(Auth::id());
        return view('pages.student.meeting.meeting_list', compact('meetings'));
    }

}
