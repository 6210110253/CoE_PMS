<?php

namespace App\Repositories;
use App\Models\JobProcess;
use App\Enums\ProcessesEnum;
use Carbon\Carbon;

class JobProcessesRepository
{

    public function find($id)
    {
        return JobProcess::query()->findOrfail($id);
    }

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


       $data->save();
       return $data;
    }

    public function getJobProcess(){
        return JobProcess::query()
            ->whereNot('process', ProcessesEnum::CANCEL)
            ->where('status','publish')
            ->orderBy('updated_at','DESC')
            ->get()
            ->groupBy('process');

    }

    public function getMyJobProcessAll(){
        return JobProcess::query()->get();
    }
   
}
