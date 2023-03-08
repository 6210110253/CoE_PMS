<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Processed;

use App\Repositories\StudentRepository;
use App\Repositories\ProjectListRepository;
use App\Repositories\ProcessedsRepository;
use App\Repositories\SemesterRepository;
use App\Enums\ProcessesEnum;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    protected $student_repo,$project_list_repo,$processed_repo,$semester_repo;

    public function __construct(
       StudentRepository $studentRepository,
       ProjectListRepository $projectListRepository,
       ProcessedsRepository $processedsRepository,
       SemesterRepository $semesterRepository
    ){
        $this->student_repo = $studentRepository;
        $this->project_list_repo = $projectListRepository;
        $this->processed_repo = $processedsRepository;
        $this->semester_repo = $semesterRepository;
    }


    public function project_status()
    {
        $arr_students = [];
        $students = $this->student_repo->getStudents();

        $students_demo = $students->pluck('id')->all();

        foreach($students_demo as $student){
            $arr_students[] =  strval($student);
        }
        $project_lists = $this->project_list_repo->getProjectByStudent();

        $group_student = $students->groupBy('id');

        $results = [];
        foreach( $project_lists as $project_list){
            foreach($project_list->student_reservetion as $reservetion){
                if(in_array($reservetion, $arr_students)){

                    $results[$reservetion] = [
                        'project_id' => $project_list->reservaton->project_id,
                        'project_title' => $project_list->reservaton->project->title,
                        'student_id' => $reservetion,
                        'student_name' => $group_student[$reservetion][0]->name,
                        'teacher_id' => $project_list->approve_by,
                        'teacher_name' => $project_list->teacher->name,
                        'status' => true,
                        'semester_id' => $project_list->semester_id,
                        'semester_name' => $project_list->semester->name
                    ];
                }
            }
        }
        foreach($students as $student){
            if(!isset($results[$student->id])){
                $results[$student->id] = [
                        'project_id' => null,
                        'project_title' => null,
                        'student_id' => $student->id,
                        'student_name' => $group_student[$student->id][0]->name,
                        'teacher_id' => null,
                        'teacher_name' => null,
                        'status' => false,
                        'semester_id' => null,
                        'semester_name' => null
                ];
            }
        }


        return view('pages.admin.project.project_status',compact('results'));
    }

    public function submission(Request $request)
    {

        $filter['semester_id'] = $request->semester ?? null;
        $semesters = $this->semester_repo->getSemester();
        $processes = $this->processed_repo->getPreProject($filter);

       $order = ProcessesEnum::ALL;
         $job_pro_groups = $processes->sortBy(function($item) use ($order) {
             return array_search($item->jobProcess->process, $order);
            })
            ->groupBy('jobProcess.process');
        
        $group_list = [];
        foreach(ProcessesEnum::ALL as $group)
        {
            if(!isset($job_pro_groups[$group])){
             $job_pro_groups[$group] = [];
            }
        }
        $job_pro_groups = $job_pro_groups->sortBy(function($item,$key) use ($order) {
             return array_search($key, $order);
        });
     
        return view('pages.admin.submission.submission',compact('semesters','job_pro_groups'));
    }

    public function submission_detail(){
        return view('pages.admin.submission.submission_detail');
    }

    public function old_project(){

       $projects = $this->project_list_repo->getProjectFinished();

        return view('pages.admin.project.old_project',compact('projects'));
    }


}