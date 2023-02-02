<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Casts\Json;


class ProjectList extends Model
{
    use HasFactory;

    protected $casts = [
        'student_reservetion' => Json::class,
    ];
}
