<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Meeting extends Model
{
    use HasFactory;

    public function student(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

}
