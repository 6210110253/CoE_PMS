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
       $data->save();
       return $data;
    }
}
