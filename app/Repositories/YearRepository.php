<?php

namespace App\Repositories;

class YearRepository
{
    public function store($params){
        $data = new Project();
        return $this->variable($data , $params);

    }

    //แก้ไข
    public function variable(Project $data , $params){
       $params = (object)$params;

       !isset($params->name) ?: $data->name = $params->name;
       !isset($params->year) ?: $data->year = $params->year;
       !isset($params->scope) ?: $data->scope = $params->scope;
       

       !isset($params->approve_by ) ?: $data->approve_by  = $params->approve_by;

       !isset($params->status) ?: $data->status = $params->status;

       !isset($params->file_er_diagram) ?: $data->file_er_diagram = $params->file_er_diagram;
       !isset($params->file_design) ?: $data->file_design = $params->file_design;
       !isset($params->usecase) ?: $data->usecase = $params->usecase;
       !isset($params->file_other) ?: $data->file_other = $params->file_other;

       !isset($params->created_by) ?: $data->created_by = $params->created_by;
        // $data->created_by = Auth()->user()->id;

       $data->save();
       return $data;
    }
}
