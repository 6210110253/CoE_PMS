<?php

namespace App\Repositories;
use App\Models\Announcement;

class AnnouncementsRepository
{
    public function store($params){
        $data = new Announcement();
        return $this->variable($data , $params);

    }

    //แก้ไข
    public function variable(Announcement $data , $params){
       $params = (object)$params;

       !isset($params->title) ?: $data->title = $params->title;
       !isset($params->start ) ?: $data->start = $params->start;
       !isset($params->finish) ?: $data->finish = $params->finish;
       
       $data->save();
       return $data;
    }
}
