<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function addUser(Request $req)
    {

        // echo "User UserName is $req->username";
        // echo "<br>";
        // echo "User Email is $req->email";
        // echo "<br>";
        // echo "User Country is $req->country";

        // return $req->input();
        // echo "User added successfully!";

        $req->validate([
            'username' => 'required' ,
            'email' => 'required | email',
            'country' => 'required'
        ]);

    }
    function users(){
        $users = DB::select('select * from users');
        return view('users', ['users'=>$users]);
    }
}
