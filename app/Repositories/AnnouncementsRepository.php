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
       !isset($params->status) ?: $data->status = $params->status;
       !isset($params->semester_id ) ?: $data->semester_id  = $params->semester_id ;
       !isset($params->detail) ?: $data->detail = $params->detail;
       
       $data->save();
       return $data;
    }

    public function getAnnouncementAll(){
        return Announcement::All();
    }

    
}
