<?php

function getSemesterActive()
{
    $data = App\Models\Semester::query()->where('is_active',1)->first();
    return ($data) ? $data->id : 0 ;
}

function hasProjectList($user_id)
{
    return App\Models\ProjectList::query()
        ->whereJsonContains('student_reservetion', ["$user_id"])
        ->first();
    
}