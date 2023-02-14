<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Casts\Json;


class ProjectReservation extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'student_reservetion' => Json::class,
    ];

    protected $appends = ['student_reservetion_list'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    // public function users(){
    //     return $this->belongsToMany(
    //         ProjectReservationRelate::class,
    //         'project_reservation_relates',
    //         'user_id',
    //         'project_reservation_id',
    //     );
    // }

    public function users(){
        return $this->belongsToMany(User::class,
        'project_reservation_relates',
        );
    }

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function member(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getStudentReservetionListAttribute(){
        $users = User::query()->find($this->student_reservetion);
        $created_by = $this->member->name;


        $list = [$created_by];
        foreach($users as $item){
            $list[] = $item->name;

        }
        return $list;

    }


    

 
}