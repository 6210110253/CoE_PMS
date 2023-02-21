<?php

namespace App\Repositories;
use App\Models\JobProcess;

class JobProcessesRepository
{
    public function store($params){
        $data = new JobProcess();
        return $this->variable($data , $params);

    }

    public function variable(JobProcess $data , $params){

       $params = (object)$params;

       !isset($params->process) ?: $data->process = $params->process;
       !isset($params->semester_id ) ?: $data->semester_id  = $params->semester_id ;
       !isset($params->topic ) ?: $data->topic  = $params->topic ;
       !isset($params->type) ?: $data->type = $params->type;
       !isset($params->start_date) ?: $data->start_date = $params->start_date;
       !isset($params->end_date) ?: $data->end_date = $params->end_date;
       !isset($params->status) ?: $data->status = $params->status;
       !isset($params->semester_id) ?: $data->semester_id = $params->semester_id;
       !isset($params->status) ?: $data->status = $params->status;
       !isset($params->semester_id) ?: $data->semester_id = $params->semester_id;
       !isset($params->status) ?: $data->status = $params->status;

       $data->save();
       return $data;
    }

    public function getJobProcess(){
        return JobProcess::all();
    }

    public function getMyJobProcess($student_id){
        return JobProcess::all();
    }
}
