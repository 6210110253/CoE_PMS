<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{
    public function project_select()
    {

        $teachers = User::role('teacher')->get();
        //dd($users);
        return view('pages.student.project_select', compact('teachers'));

    }

    public function project_list()
    {
        return view('pages.student.project_list');
    }

    public function project_detail()
    {
        return view('pages.student.project_detail');
    }

    public function project_propose()
    {
        return view('pages.student.project_propose');
    }


}