<?php

namespace App\Repositories;
use App\Models\Meeting;

class MeetingRepository
{
    public function store($params){
        $data = new Meeting();
        return $this->variable($data , $params);

    }

    public function variable(Meeting $data , $params){

       $params = (object)$params;

       !isset($params->end_date ) ?: $data->end_date  = $params->end_date;
       !isset($params->start_date ) ?: $data->start_date  = $params->start_date;
       !isset($params->title ) ?: $data->title  = $params->title ;
       !isset($params->detail ) ?: $data->detail = $params->detail;
       !isset($params->created_by ) ?: $data->created_by  = $params->created_by;
       !isset($params->approve_by ) ?: $data->approve_by  = $params->approve_by;
       !isset($params->created_by ) ?: $data->created_by  = $params->created_by;
       !isset($params->status ) ?: $data->status  = $params->status;

       $data->save();
       return $data;
    }

    public function getStudentMeeting($student_id)
    {
       $meeting = Meeting::query()
                    ->where('created_by', $student_id)
                    ->get();
        
        return $meeting;
    }

    public function getMeetingTeacher($teacher_id)
    {
       $meeting = Meeting::query()
                    ->where('approve_by', $teacher_id)
                    ->get();
        
        return $meeting;
    }
}