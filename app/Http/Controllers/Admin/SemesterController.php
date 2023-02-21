<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\SemesterRepository;
use App\Repositories\JobProcessesRepository;

class SemesterController extends Controller
{
    protected $semester_repo;

    public function __construct(
        SemesterRepository $semesterRepository,
        JobProcessesRepository $jobProcessesRepository

    ){
        $this->semester_repo = $semesterRepository;
        $this->job_processes_repo = $jobProcessesRepository;
    }

    public function management(){
        $semesters = $this->semester_repo->getSemester();
        $job_pros = $this->job_processes_repo->getJobProcess();
        return view('pages.admin.management', compact('semesters','job_pros'));
    }

    public function store(Request $request)
    {
        $semester = $this->semester_repo->store($request);
        return redirect()->back();
    }
}