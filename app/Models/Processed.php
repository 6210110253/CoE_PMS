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
}
