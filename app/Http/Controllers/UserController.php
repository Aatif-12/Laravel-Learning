<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
