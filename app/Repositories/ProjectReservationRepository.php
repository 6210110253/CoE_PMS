<?php

namespace App\Repositories;
use App\Models\User;

use App\Models\ProjectReservation;

class ProjectReservationRepository
{
    public function store($param)
    {
       $data =  new ProjectReservation();

       return  $this->valuable($data,$param);
    }

    public function valuable(ProjectReservation $data,$param)
    {
        $param = (object)$param;

        !isset($param->project_id) ?: $data->project_id  = $param->project_id;
        !isset($param->user_id) ?: $data->user_id   = $param->user_id;
        !isset($param->student_reservetion) ?: $data->student_reservetion  = $param->student_reservetion;
        !isset($param->status) ?: $data->status  = $param->status;
        !isset($param->semester_id) ?: $data->semester_id  = $param->semester_id;
        !isset($param->comment) ?: $data->comment  = $param->comment;
        !isset($param->type) ?: $data->type  = $param->type;

        $data->save();

        return $data;


    }

    public function getProjectBooking($user_id){

        return ProjectReservation::query()
            ->with([
                'project.teacher',
                'user'
            ])
            ->whereIn('status', ["wait", "reject"]) //whereสำหรับหลายค่า ,and
            ->where(function($q) use ($user_id){
                $q->orWhere('user_id',$user_id ) // or
                  ->orWhereJsonContains('student_reservetion', ["$user_id"]); //ใช้สำหรับค่า json
            })

            ->get();
    }

    public function getProjectTest($id){

        return ProjectReservation::query()
            ->with([
                'project'
            ])
            ->whereIn('status', ["wait", "reject"])
            ->where('teacher_id',$id)
            ->get();
    }

    public function getTeacher(){

        return User::query()->role('teacher')->get();

     }



}
