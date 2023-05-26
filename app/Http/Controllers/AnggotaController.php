<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    function viewDataanggota(){
        $data = Anggota::all();
        return view('admin.anggotadata',compact('data'));

    }
}
