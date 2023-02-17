<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\AnnouncementsRepository;

class AnnouncementController extends Controller
{
    public function __construct(
        AnnouncementsRepository $announcementsRepository
    ){
        $this->announcement_repo = $announcementsRepository;
    }

    public function index(){
        return  view('pages.admin.announcement');
    }

    public function store(Request $request){

        $announcement = $this->announcement_repo->store($request);

        return redirect()->back();

    }
}