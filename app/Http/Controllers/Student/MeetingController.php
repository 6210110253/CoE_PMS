<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Repositories\UserRepository;

use App\Models\Meeting;
use App\Repositories\MeetingRepository;

use App\Repositories\SemesterRepository;

class MeetingController extends Controller
{
    protected $user_repo, $meeting_repo, $semester_repo;

    public function __construct(
        UserRepository $userRepository,
        MeetingRepository $meetingRepository,
        SemesterRepository $semesterRepository
    ){
        $this->user_repo = $userRepository;
        $this->meeting_repo = $meetingRepository;
        $this->semester_repo = $semesterRepository;
    }

    public function create(){
        $teachers = $this->user_repo->getTeacher();
        $semesters = $this->semester_repo->getAll();
        return view('pages.student.meeting',compact('teachers','semesters'));
    }

    // public function create(){
    //     return view('pages.student.meeting');
    // }

    public function store(Request $request){

        $meeting = $this->meeting_repo->store($request);

        return redirect()->back();
    }

    public function edit(Meeting $meeting){
        $teachers = $this->user_repo->getTeacher();
        $semesters = $this->semester_repo->getAll();
        return view('pages.student.meeting',compact('teachers','semesters','meeting'));
    }

    public function update(Meeting $meeting,Request $request){

        $meeting = $this->meeting_repo->variable($meeting,$request);
        return redirect()->back();
    }

    public function meeting_list(){
        return view('pages.student.meeting_list');
    }

}