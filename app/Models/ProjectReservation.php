<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class ProjectReservation extends Model
{
    use HasFactory, SoftDeletes;


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
}