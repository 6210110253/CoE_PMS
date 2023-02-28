<?php

namespace App\Repositories;

use App\Models\User;

class StudentRepository
{
    function getStudents()
    {
       return User::query()
            ->role('student')
            ->get();
    }
}