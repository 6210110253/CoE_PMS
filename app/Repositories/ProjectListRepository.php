<?php

namespace App\Repositories;

use App\Models\ProjectList;


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
       !isset($params->status) ?: $data->status = $params->status;

       $data->save();
       return $data;
    }

    public function getProjectListAll($params){
  
  }
}
