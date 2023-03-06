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
        $data = new Project();
        return $this->variable($data , $params);
    }

    public function variable(Project $data , $params){
       $params = (object)$params;

       !isset($params->name) ?: $data->name = $params->name;
       !isset($params->email) ?: $data->email = $params->email;
       !isset($params->email) ?: $data->email = $params->email;
       !isset($params->email) ?: $data->email = $params->email;

        // $data->created_by = Auth()->user()->id;

       $data->save();
       return $data;
    }



}