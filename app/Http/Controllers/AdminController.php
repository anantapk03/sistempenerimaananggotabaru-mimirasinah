<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function getDashboard (){
        return view('admin.dashboardAdm');
    }

    

}