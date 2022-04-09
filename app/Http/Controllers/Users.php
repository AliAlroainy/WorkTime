<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    function Show (){
        return view('admin.layouts.users.listUsers');      
    }

    function Insert (){
        return view('admin.layouts.users.addUsers');      
    }

    function Update (){
        return view('admin.layouts.users.updateUsers');      
    }

    function delete (){
        return view('admin.layouts.users.deleteUsers');      
    }
    
}
