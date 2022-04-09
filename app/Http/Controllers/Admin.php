<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    function Show (){
        return view('admin.admin');      
    }

  
}
