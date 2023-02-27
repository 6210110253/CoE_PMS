<?php
// namespace App\Services;

use Carbon\Carbon;


function hasProjectList($user_id)
{
    return App\Models\ProjectList::query()
        ->whereJsonContains('student_reservetion', ["$user_id"])
        ->first();

}

function unsetStudent(){
     $project_lists = App\Models\ProjectList::query()
        ->whereNot('status','Cancel')
        ->get();
    $arr_student = [];
    foreach($project_lists as $project_list){
        foreach($project_list->student_reservetion as $student){
            $arr_student[] = $student;
        }
    }
    return $arr_student;
}

function dateThai($strDate){
    Carbon::setlocale('th_TH');
    $date = Carbon::rawParse($strDate);
    $strDay = $date->isoFormat('D');
    $strMonth = $date->isoFormat('M');
    $strYear = $date->isoFormat('YYYY');
    $strDate = $date->isoFormat('dddd D MMMM YYYY');

    $strDayMonth =$date->isoFormat('D MMMM');
    $strYearThai =$date->addYears(543)->isoFormat('YYYY');

    // return "$strDayMonth พ.ศ. $strYearThai";
    //return "$strDate";
    return "$strDay/$strMonth/$strYear";

}


