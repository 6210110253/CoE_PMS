<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\JobProcessesRepository;
use App\Repositories\SemesterRepository;

use App\Enums\ProcessesEnum;

use App\Models\JobProcess;
use Carbon\Carbon;

class JobProcessedsController extends Controller
{
    public function __construct(
        JobProcessesRepository $jobProcessesRepository,
        SemesterRepository $semesterRepository,
        
    ){
        $this->job_processes_repo = $jobProcessesRepository;
        $this->semester_repo = $semesterRepository;
    }


    public function index(){
       $job_pros = $this->job_processes_repo->getJobProcess();
        return  view('pages.admin.management',compact($job_pros));
    }

    public function create()
    {
        $semesters = $this->semester_repo->getAll();
        $processes = ProcessesEnum::ALL;
        return view('pages.admin.submission.form_create_submission',compact('semesters','processes'));
    }

    public function store(Request $request)
    {
       $request->start_date= Carbon::parse($request->start_date)->format('Y-m-d');
       $request->end_date= Carbon::parse($request->end_date)->format('Y-m-d');
       
        $submission = $this->job_processes_repo->store($request);
        return redirect()->back();
    }

    public function edit(JobProcess $jobprocess){
        $semesters = $this->semester_repo->getAll();
        $processes = ProcessesEnum::ALL;
        return view('pages.admin.submission.form_create_submission',compact('jobprocess','semesters','processes'));
    }

    public function update(JobProcess $jobprocess,Request $request){

        $submission = $this->job_processes_repo->variable($jobprocess,$request);
        
        return redirect()->back();
    }

    public function delete(Request $request){
      
        $this->job_processes_repo->delete($request->id);

        return \response()->json([
            'status' => true,
            'data' => [],
            'massege' => 'sucess'
        ]);
        
    }

}
