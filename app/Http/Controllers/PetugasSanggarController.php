<?php

namespace App\Http\Controllers;

use App\Models\PetugasSanggar;
use Illuminate\Http\Request;

class PetugasSanggarController extends Controller
{
    function index(){
        $data = PetugasSanggar::all();
        dd($data);
        return view('admin.datapetugassanggar');
    }
}
