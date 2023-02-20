<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\JobProcessesRepository;
use App\Repositories\SemesterRepository;

class JobProcessedsController extends Controller
{
    public function __construct(
        JobProcessesRepository $jobProcessesRepository,
        SemesterRepository $semesterRepository,
        
    ){
        $this->job_processes_repo = $jobProcessesRepository;
        $this->semester_repo = $semesterRepository;
    }


    public function create()
    {
        $semesters = $this->semester_repo->getAll();
        return view('pages.admin.form_create_submission',compact('semesters'));
    }

    public function store(Request $request)
    {
        $announcement = $this->job_processes_repo->store($request);
        return redirect()->back();
    }

    public function edit(JobProcess $jobprocess){
        $semesters = $this->semester_repo->getAll();
        return view('pages.admin.form_create_submission',compact('semesters'));
    }

    public function update(Project $project,Request $request){
        $project = $this->semester_repo->variable($project,$request);
  
        return redirect()->back();
    }
}