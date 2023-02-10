<?php

function getSemesterActive()
{
    $data = App\Models\Semester::query()->where('is_active',1)->first();
    return ($data) ? $data->id : 0 ;
}