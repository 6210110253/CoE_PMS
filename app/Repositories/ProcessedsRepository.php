<?php

namespace App\Repositories;
use App\Models\Processed;

class ProcessedsRepository
{

    public function find($id)
    {
        return Processed::query()->findOrfail($id);
    }

    public function store($params){
        $data = new Processed();
        return $this->variable($data , $params);

    }

    public function variable(Processed $data , $params){

       $params = (object)$params;

       !isset($params->job_process_id ) ?: $data->job_process_id  = $params->job_process_id;
       !isset($params->detail ) ?: $data->detail  = $params->detail;
       !isset($params->file_progress ) ?: $data->file_progress  = $params->file_progress;
       !isset($params->file_report ) ?: $data->file_report  = $params->file_report;
       !isset($params->file_poster) ?: $data->file_poster = $params->file_poster;
       !isset($params->file_other) ?: $data->file_other = $params->file_other;
       !isset($params->file_video) ?: $data->file_video = $params->file_video;
       !isset($params->git_url) ?: $data->git_url = $params->git_url;
       !isset($params->type) ?: $data->type = $params->type;
       !isset($params->created_by ) ?: $data->created_by  = $params->created_by ;
       !isset($params->approve_by ) ?: $data->approve_by  = $params->approve_by ;
       !isset($params->project_id ) ?: $data->project_id  = $params->project_id ;
       !isset($params->project_list_id ) ?: $data->project_list_id  = $params->project_list_id ;
       !isset($params->date_meeting) ?: $data->date_meeting = $params->date_meeting;

       $data->save();
       return $data;
    }

    public function getJobProcessById($job_process_id,$project_id){
        return Processed::query()
            ->where('job_process_id',$job_process_id)
            ->where('project_id',$project_id)
            ->first();
    }
}

