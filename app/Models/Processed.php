<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Casts\Json;

class Processed extends Model
{
    use HasFactory;

    protected $casts = [
        'file_other' => Json::class,
    ];

    public function jobProcess(){
        return $this->belongsTo(JobProcess::class);
    }

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function teacher(){
        return $this->belongsTo(User::class, 'approve_by', 'id');
    }

    public function projectList(){
        return $this->belongsTo(ProjectList::class);
    }

    public function student(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
    
}
