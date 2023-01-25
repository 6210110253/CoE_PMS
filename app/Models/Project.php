<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProjectReservation;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    public function project_reservations(){
        return $this->hasMany(ProjectReservation::class);
    }

    public function project_reservation(){
        return $this->hasOne(ProjectReservation::class);
    }
}