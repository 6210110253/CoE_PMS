<?php

namespace App\Repositories;
use App\Models\MeetingResevation;


class MeetingResevationRepository
{
    public function store($params){
        $data = new MeetingResevation();
        return $this->variable($data , $params);

    }

    public function variable(MeetingResevation $data , $params){

       $params = (object)$params;

       !isset($params->meeting_id ) ?: $data->meeting_id  = $params->meeting_id;
       !isset($params->user_id ) ?: $data->user_id  = $params->user_id;
       !isset($params->status ) ?: $data->status  = $params->status;
       !isset($params->comment ) ?: $data->comment  = $params->comment;
       !isset($params->teacher_id ) ?: $data->teacher_id  = $params->teacher_id;
       
       $data->save();
       return $data;
    }

    public function getById($id){

        return MeetingResevation::query()->find($id);
     }


    public function updateStatusMeeting($id, $status)
    {
        $meeting_reser = $this->getById($id);
        $meeting_reser->status = $status;
        $meeting_reser->save();

        return $meeting_reser;


    }

}
