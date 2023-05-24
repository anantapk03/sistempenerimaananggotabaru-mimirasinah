<?php

namespace App\Http\Controllers;

use App\Models\PetugasSanggar;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function getDashboard (){
        return view('admin.dashboardAdm');
    }

    function getviewdataPetugassanggar() {
        $data = PetugasSanggar::all();
        return view('admin.dataPetugassanggar',compact('data'));
    }

    function formaddPetugas(){
        return view('admin.tambahpetugas');
    }

    function insertdata(Request $request){
        PetugasSanggar::create($request->all());
        return redirect()->route('datapetugassanggar')->with('success','Data Berhasil Ditambahkan');
    }

    function menampilkan_data($id){
        $data = PetugasSanggar::find($id);
        dd($data);
    }
 
}
