<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function getStudent($student_unset=[]){

       return User::query()->role('student')
       ->whereNotIn('id', $student_unset)
       ->get();

    }

    public function getTeacher(){

        return User::query()->role('teacher')->get();

     }
}