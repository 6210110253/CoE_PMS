<?php

namespace App\Repositories;

use App\Models\ProjectList;
use App\Enums\ProcessesEnum;

class ProjectListRepository
{
     public function store($params){
        $data = new ProjectList();
        return $this->variable($data , $params);

    }

    public function variable(ProjectList $data , $params){

       $params = (object)$params;

       !isset($params->project_reservation_id) ?: $data->project_reservation_id = $params->project_reservation_id;
       !isset($params->approve_by) ?: $data->approve_by = $params->approve_by;
       !isset($params->student_reservetion) ?: $data->student_reservetion = $params->student_reservetion;
       !isset($params->semester_id) ?: $data->semester_id = $params->semester_id;
       !isset($params->status) ?: $data->status = $params->status;

       $data->save();
       return $data;
    }


    public function getProjectInChart($id){

        return ProjectList::query()
            ->where('approve_by',$id)
            ->get();
    }

    public function getProjectFinished(){

        return ProjectList::query()
            ->where('status','Finished')
            ->paginate();
    }

    public function getProjectByStudent()
    {
        return ProjectList::query()
            //->whereJsonContains('student_reservetion', $arr_students)
            ->with([
                'reservaton.project',
                'semester',
                'teacher'
            ])
            ->whereNot('status',ProcessesEnum::CANCEL)
            ->get();
    }

    public function getProjectListById($id){

        return ProjectList::query()->find($id);
     }


    public function updateStatusFinish($project_list_id , $status)
    {
        $project_fin = $this->getProjectListById($project_list_id);
        $project_fin->status = $status;
        $project_fin->save();

        return $project_fin;
    }

}