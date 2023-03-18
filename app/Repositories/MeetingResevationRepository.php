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


    public function updateStatusMeeting($id, $status, $comment)
    {
        $meeting_reser = $this->getById($id);
        $meeting_reser->status = $status;
        empty($comment) ?: $meeting_reser->comment = $comment;
        $meeting_reser->save();

        return $meeting_reser;
    }
    
    public function getMeetingTeacher($teacher_id)
    {
       $meeting = MeetingResevation::query()
                    ->where('teacher_id', $teacher_id)
                    ->where('status', 'wait')
                    ->get();
        
        return $meeting;
    }

    public function getMeetimgStatusApprove($teacher_id)
    {
        {
            $meeting_aps = MeetingResevation::query()
                         ->where('teacher_id', $teacher_id)
                         ->where('status', 'approve')
                         ->get();
             
             return $meeting_aps;
         }
    }

    public function getMeetimgStatusApproveByStudent($student_id)
    {
        {
            $meeting_aps = MeetingResevation::query()
                         ->where('user_id', $student_id)
                         ->where('status', 'approve')
                         ->get();
             
             return $meeting_aps;
         }
    }
    
}
