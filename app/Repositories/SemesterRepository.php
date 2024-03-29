<?php

namespace App\Repositories;

use App\Models\Semester;

class SemesterRepository
{
    //สร้างครั้งแรก
    public function store($params){
        $data = new Semester();
        return $this->variable($data , $params);

    }

    //แก้ไข
    public function variable(Semester $data , $params){
       $params = (object)$params;

       !isset($params->name) ?: $data->name = $params->name;
       !isset($params->year) ?: $data->year = $params->year;
        $data->is_active = $params->is_active ?? $data->is_active; //กรณีที่เก็บค่าแค่ 0,1 จะไม่ต้องใส่ !isset

       $data->save();
       return $data;
       
    }
    public function delete(Semester $data){
        return $data->delete();
    }

    public function getAll(){

        return Semester::query()->where('is_active', 1)->get();
    }

    public function getSemester(){

        return Semester::all();
    }

    public function findByID($id){
        return Semester::query()
                ->find($id);

    }
}