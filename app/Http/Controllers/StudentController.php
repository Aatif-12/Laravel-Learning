<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    function getStudent(){
        // $student = \App\Models\Student::all();
        // return view('Students',['data'=>$student]);

        $responce = Student::all();
        // $responce = Student::get();
        // $responce = Student::where('id','2')->get();
        // $responce = Student::find(1);

        // $responce = Student::insert([
        //     'name'=>'Rahul', 'email' => 'rahul@autodukan.com', 'batch'=> '2024' ]);

        //     if($responce){
        //         return ["result"=>"Data has been inserted"];
        //     }else{
        //         return ["result"=>"Data has not been inserted"];
        //     }


        return view('students',['data'=>$responce]);


        // $result = DB::table('students')->get();
        // return view('students',['students'=>$result]);
    }

}
