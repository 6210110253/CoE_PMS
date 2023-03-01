<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use App\Models\JobProcesses;
use Illuminate\Database\Eloquent\SoftDeletes;

class Semester extends Model
{
    use HasFactory, SoftDeletes;

    public function project(){
        return $this->hasMany(Project::class);
    }

    public function job_processes(){
        return $this->hasMany(JobProcesses::class);
    }

    public function announcements(){
        return $this->hasMany(Announcement::class);
    }
}