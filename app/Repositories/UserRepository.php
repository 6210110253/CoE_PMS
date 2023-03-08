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

    public function store($params){
        $data = new User();
        return $this->variable($data , $params);
    }

    public function variable(User $data , $params){
       $params = (object)$params;

       !isset($params->name) ?: $data->name = $params->name;
       !isset($params->email) ?: $data->email = $params->email;
       !isset($params->type) ?: $data->type = $params->type;
       !isset($params->profile) ?: $data->profile = $params->profile;
       !isset($params->email_verified_at) ?: $data->email_verified_at = $params->email_verified_at;
       !isset($params->password) ?: $data->password = $params->password;
       !isset($params->remember_token) ?: $data->remember_token = $params->remember_token;

       $data->save();

       return $data;
    }

    public function findByEmail($email)
    {
       return User::query()
            ->where('email',$email)
            ->first();
    }


}