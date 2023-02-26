<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\SemesterRepository;
use App\Repositories\JobProcessesRepository;

class SemesterController extends Controller
{
    protected $semester_repo,$job_processes_repo;

    public function __construct(
        SemesterRepository $semesterRepository,
        JobProcessesRepository $jobProcessesRepository

    ){
        $this->semester_repo = $semesterRepository;
        $this->job_processes_repo = $jobProcessesRepository;
    }

    public function management(){
        $semesters = $this->semester_repo->getSemester();
        $job_pros = $this->job_processes_repo->getMyJobProcessAll();
        return view('pages.admin.management', compact('semesters','job_pros'));
    }

    public function store(Request $request)
    {
        $semester = $this->semester_repo->store($request);
        return redirect()->back();
    }

    public function updateActive(Request $request){

       $semester = $this->semester_repo->findByID($request->id);
       $semester = $this->semester_repo->variable($semester, [
        'is_active'=> $request->is_active
       ]);

       return \response()->json([
            'status' => true,
            'data' => $semester,
            'massege' => 'sucess'
        ]);
    }
}