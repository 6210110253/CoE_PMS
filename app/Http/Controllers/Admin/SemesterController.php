<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\SemesterRepository;

class SemesterController extends Controller
{
    protected $semester_repo;

    public function __construct(
        SemesterRepository $semesterRepository,
        
    ){
        $this->semester_repo = $semesterRepository;
    }

    public function management(){
        return view('pages.admin.management');
    }

    public function store(Request $request)
    {
        $semester = $this->semester_repo->store($request);
        return redirect()->back();
    }
}
