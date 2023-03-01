<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Processed;

use App\Repositories\StudentRepository;
use App\Repositories\ProjectListRepository;
use App\Repositories\ProcessedsRepository;

class ProjectController extends Controller
{
    protected $student_repo,$project_list_repo,$processed_repo;

    public function __construct(
       StudentRepository $studentRepository,
       ProjectListRepository $projectListRepository,
       ProcessedsRepository $processedsRepository
    ){
        $this->student_repo = $studentRepository;
        $this->project_list_repo = $projectListRepository;
        $this->processed_repo = $processedsRepository;
    }


    public function project_status()
    {
        $arr_students = [];
        $students = $this->student_repo->getStudents();

        $students_demo = $students->pluck('id')->all();
        dd($students_demo );
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

    public function submission(){

    
    $pre_project = $this->processed_repo->getPreProject();

    


    return view('pages.admin.submission.submission',compact('pre_project'));
    }

    public function submission_detail(){
        return view('pages.admin.submission.submission_detail');
    }

    public function old_project(){
        return view('pages.admin.project.old_project');
    }


}