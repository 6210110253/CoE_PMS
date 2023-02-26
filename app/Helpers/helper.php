<?php
// namespace App\Services;

// use Carbon\Carbon;


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


// class ThaiDateHelperService
// {

//     public static function simpleDateFormat($arg)
//     {
//         $thai_months = [
//             1 => 'ม.ค.',
//             2 => 'ก.พ.',
//             3 => 'มี.ค.',
//             4 => 'เม.ย.',
//             5 => 'พ.ค.',
//             6 => 'มิ.ย.',
//             7 => 'ก.ค.',
//             8 => 'ส.ค.',
//             9 => 'ก.ย.',
//             10 => 'ต.ค.',
//             11 => 'พ.ย.',
//             12 => 'ธ.ค.',
//         ];
//         $date = Carbon::parse($arg);
//         $month = $thai_months[$date->month];
//         $year = $date->year + 543;
//         return $date->format("j $month $year H:i:s");
//     }
// }


// function getSemesterActive()
// {
//     $data = App\Models\Semester::query()->where('is')->first();
//     return ($data) ? $data->id : 0 ;
// }