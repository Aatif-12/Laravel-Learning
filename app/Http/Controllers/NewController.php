<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    //
    function addNew(Request $request){
        echo "New added successfully!";
        // return $request->input();
    }
}
