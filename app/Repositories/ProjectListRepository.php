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
       !isset($params->semester_id) ?: $data->semester_id = $params->semester_id;
       !isset($params->status) ?: $data->status = $params->status;

       $data->save();
       return $data;
    }

   //  public function getById($student_id){

   //    return ProjectList::query()->find($student_id);
   // }

   public function getProjectListTeacher($id){
      return ProjectList::query($id)
           ->where('approve_by', $id)
           ->get();
      }

    // public function showProject($user_id){

    // return ProjectList::query()
    //      ->whereJsonContains('student_reservation', ["$user_id"])
    //      ->first();
    // }



}
