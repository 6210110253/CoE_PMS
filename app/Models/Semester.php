<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use App\Models\JobProcesses;

class Semester extends Model
{
    use HasFactory;

    public function project(){
        return $this->hasMany(Project::class);
    }
    
    public function job_processes(){
        return $this->hasMany(JobProcesses::class);
    }
}
