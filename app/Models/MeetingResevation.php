<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Meeting;

class MeetingResevation extends Model
{
    use HasFactory;

    public function meeting(){
        return $this->belongsTo(Meeting::class);
    }

    public function student(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function teacher(){
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
