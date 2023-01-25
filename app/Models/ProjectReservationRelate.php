<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Models\ProjectReservation;
use App\Models\User;

class ProjectReservationRelate extends Pivot
{
    use HasFactory;

    protected $table = 'project_reservation_relates';


    public function project_reservation(){
        return $this->belongsTo(ProjectReservation::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}