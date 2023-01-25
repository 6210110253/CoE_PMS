<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProjectReservationRelate extends Pivot
{
    use HasFactory;

    public function project_reservation(){
        return $this->belongsTo(ProjectReservation::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}