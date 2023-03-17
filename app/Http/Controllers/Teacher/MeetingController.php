<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Repositories\UserRepository;

use App\Models\Meeting;
use App\Repositories\MeetingRepository;

use App\Models\MeetingResevation;
use App\Repositories\MeetingResevationRepository;

class MeetingController extends Controller
{
    protected $user_repo, $meeting_repo, $meeting_resevation_repo;

    public function __construct(
        UserRepository $userRepository,
        MeetingRepository $meetingRepository,
        MeetingResevationRepository $meetingResevationRepository
    ){
        $this->user_repo = $userRepository;
        $this->meeting_repo = $meetingRepository;
        $this->meeting_resevation_repo = $meetingResevationRepository;
    }

    public function index(){
        return view('pages.teacher.meeting.index');
    }

    public function meeting(){
        $meeting_resevations= $this->meeting_resevation_repo->getMeetingTeacher(Auth::id());
        return view('pages.teacher.meeting.meeting', compact('meeting_resevations'));
    }

    public function meeting_detail(){
        return view('pages.teacher.meeting.meeting_detail');
    }

    public function updateStatusMeeting(Request $request){
       
        $id = $request->id;
        $status = $request->status;


            $obj = $this->meeting_resevation_repo->updateStatusMeeting($id, $status);


        return \response()->json([
            'status' => true,
            'data' => [],
            'massege' => 'sucess'
        ]);
    }

}
