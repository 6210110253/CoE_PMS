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

}
