<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Announcement;

use App\Repositories\AnnouncementsRepository;
use App\Repositories\SemesterRepository;

class AnnouncementController extends Controller
{
    protected $announcement_repo, $semester_repo ;

    public function __construct(
        AnnouncementsRepository $announcementsRepository,
        SemesterRepository $semesterRepository
    ){
        $this->announcement_repo = $announcementsRepository;
        $this->semester_repo = $semesterRepository;
    }

    public function index(){
        $semesters = $this->semester_repo->getAll();
        return  view('pages.admin.announcement.announcement', compact('semesters'));
    }

    public function store(Request $request){

        $announcement = $this->announcement_repo->store($request);

        return redirect()->back();

    }

    public function edit(Announcement $announcement){
        $semesters = $this->semester_repo->getAll();
        return view('pages.admin.announcement.announcement',compact('semesters', 'announcement'));
    }

    public function update(Announcement $announcement,Request $request){

        $announcement = $this->announcement_repo->variable($announcement,$request);

        return redirect()->back();
    }


    public function show(){
        $announcements = $this->announcement_repo->getAnnouncementAll();
        return view('pages.admin.announcement.show', compact('announcements'));
    }

    public function selectRole(){
        return view('pages.select_role');
    }
}