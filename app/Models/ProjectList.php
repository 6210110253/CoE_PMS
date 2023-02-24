<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Casts\Json;


class ProjectList extends Model
{
    use HasFactory;

    protected $casts = [
        'student_reservetion' => Json::class,
    ];

    public function getStudentReservetionListAttribute(){
        $users = User::query()->find($this->student_reservetion);

        $list = [];
        foreach($users as $item){
            $list[] = $item->name;

        }
        return $list;

    }
    // $projectList->reservaton->project->member;
    public function reservaton(){
        return $this->belongsTo(ProjectReservation::class,'project_reservation_id');
    }


}