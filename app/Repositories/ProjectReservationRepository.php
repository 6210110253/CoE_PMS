<?php

namespace App\Repositories;

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

        $data->save();

        return $data;


    }
}