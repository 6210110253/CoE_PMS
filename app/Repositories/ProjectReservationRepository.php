<?php

namespace App\Repositories;

use App\Models\User;
use Carbon\Carbon;
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
        !isset($param->comment) ?: $data->comment  = $param->comment;
        !isset($param->type) ?: $data->type  = $param->type;
        !isset($param->teacher_id) ?: $data->teacher_id  = $param->teacher_id;

        $data->save();

        return $data;


    }

    public function getProjectBooking($user_id){

        return ProjectReservation::query()
            ->with([
                'project.teacher',
                'user'
            ])
            ->whereIn('status', ["wait", "reject"]) //whereสำหรับหลายค่า ,and
            ->where(function($q) use ($user_id){
                $q->orWhere('user_id',$user_id ) // or
                  ->orWhereJsonContains('student_reservetion', ["$user_id"]); //ใช้สำหรับค่า json
            })

            ->get();
    }

    public function getProjectReservations($id){

        return ProjectReservation::query()
            ->with([
                'project'
            ])
            ->whereIn('status', ["wait", "reject"])
            ->where('teacher_id',$id)
            ->orderByRaw("status = 'wait' DESC")
            ->orderByRaw("status = 'reject' DESC")
            // ->where(function($q){
            //     $q->where(
            //         'updated_at', '>=',
            //         Carbon::now()->addDays(-7)
            //     )->where('status', 'reject');
            // })

            ->get();
    }

    public function getTeacher(){

        return User::query()->role('teacher')->get();

     }

     public function updateStatus($id, $status, $comment='',$semester_id){

        $project_reser = $this->getById($id);
        $project_reser->status = $status;
        empty($comment) ?: $project_reser->comment = $comment;
        $project_reser->save();

        return $project_reser;

     }

     public function getById($id){

        return ProjectReservation::query()->find($id);
     }

     public function getProjectReservationsNotById($id){


        $users = [];

        $my_project = $this->getById($id);

        $users[] = strval($my_project->user_id);

        if(!empty($my_project->student_reservetion)){
            if(count($my_project->student_reservetion) > 0){
                foreach($my_project->student_reservetion as $user){
                    $users[] = strval($user);

                }
            }
        }



        ProjectReservation::query()
            ->whereIn('status', ["wait"]) //whereสำหรับหลายค่า ,and
            ->orWhere(function($q) use ($my_project, $users){
                $q->orWhere('user_id',$my_project->user_id ) // or
                  ->orWhereJsonContains('student_reservetion', $users); //ใช้สำหรับค่า json
            })
            ->where('id', '!=' , $id)
            ->update([
                'status' => 'remove',
                'comment' => 'คุณได้รับโปรเจกต์อื่นแล้ว'
            ]);

        return $users;
    }

    public function getProjectBookingStatus($user_id,$project_id){

        return ProjectReservation::query()
            ->with([
                'project.teacher',
                'user'
            ])
            ->whereIn('status', ["wait", "reject"]) //whereสำหรับหลายค่า ,and
            ->where(function($q) use ($user_id){
                $q->orWhere('user_id',$user_id ) // or
                  ->orWhereJsonContains('student_reservetion', ["$user_id"]); //ใช้สำหรับค่า json
            })
            ->where('project_id',$project_id)
            ->first();
    }


}