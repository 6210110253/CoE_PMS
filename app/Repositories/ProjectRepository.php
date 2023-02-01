<?php

namespace App\Repositories;

use App\Models\Project;

class ProjectRepository
{
    //สร้างครั้งแรก
    public function store($params){
        $data = new Project();
        return $this->variable($data , $params);

    }

    //แก้ไข
    public function variable(Project $data , $params){
       $params = (object)$params;

       !isset($params->title) ?: $data->title = $params->title;  
       !isset($params->detail) ?: $data->detail = $params->detail;  
       !isset($params->scope) ?: $data->scope = $params->scope;
       !isset($params->objective) ?: $data->objective = $params->objective;
       !isset($params->results) ?: $data->results = $params->results;
       !isset($params->member_count	) ?: $data->member_count = $params->member_count;
       !isset($params->condition) ?: $data->condition = $params->condition;
       !isset($params->file_er_diagram) ?: $data->file_er_diagram = $params->file_er_diagram;
       !isset($params->usecase) ?: $data->usecase = $params->usecase;
       !isset($params->file_other) ?: $data->file_other = $params->file_other;
       !isset($params->approve_by ) ?: $data->approve_by  = $params->approve_by;
       !isset($params->file_design) ?: $data->file_design = $params->file_design;
       !isset($params->status) ?: $data->status = $params->status;
       
         $data->created_by = Auth()->user()->id;

        
       

       $data->save();
       return $data;
    }

    public function delete(Project $data){
        return $data->delete();
    }
}
