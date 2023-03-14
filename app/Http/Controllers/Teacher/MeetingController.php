<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Repositories\UserRepository;

use App\Models\Meeting;
use App\Repositories\MeetingRepository;

class MeetingController extends Controller
{
    protected $user_repo, $meeting_repo;

    public function __construct(
        UserRepository $userRepository,
        MeetingRepository $meetingRepository
    ){
        $this->user_repo = $userRepository;
        $this->meeting_repo = $meetingRepository;
    }

    public function index(){
        return view('pages.teacher.meeting.index');
    }

    public function meeting(){
        $meetings = $this->meeting_repo->getMeetingTeacher(Auth::id());
        return view('pages.teacher.meeting.meeting', compact('meetings'));
    }

    public function meeting_detail(){
        return view('pages.teacher.meeting.meeting_detail');
    }

}
