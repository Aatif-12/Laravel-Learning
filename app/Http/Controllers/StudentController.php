<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function getStudent(){
        $student = \App\Models\Student::all();
        return view('Students',['data'=>$student]);
    }
}
