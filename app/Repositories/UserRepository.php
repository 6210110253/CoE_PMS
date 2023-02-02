<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function getStudent(){

       return User::query()->role('student')->get();

    }
}
