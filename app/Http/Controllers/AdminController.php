<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\PetugasSanggar;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        //PetugasSanggar::create($request->all());
        $data=new PetugasSanggar(); 
        $data->email = $request -> email;
        $data->nama = $request->nama;
        $data->image = $request->image;
        $data->no_wa = $request->no_wa;
        $data->alamat = $request->alamat;
        $data->password = bcrypt($request->password);

        if($request->hasFile('image')){
            $request->file('image')->move('fotopetugassanggar/', $request->file('image')->getClientOriginalName());
            $data->image=$request->file('image')->getClientOriginalName();
            $data->save();
        } else{
            $data->save();
        }
        //
        return redirect()->route('datapetugassanggar')->with('success','Data Berhasil Ditambahkan');
    }

    function menampilkan_data($email){
        
        $data = DB::table('petugas_sanggars')->where('email', $email)->first();
        return view('admin.edit_petugassanggar', ['data'=>$data]);
    }

    function edit_data(Request $request,$email){
        $data=DB::table('petugas_sanggars')
                    ->where('email', $email)
                    ->update([
                        'nama'=>$request->nama,
                        'alamat'=>$request->alamat,
                        'no_wa'=>$request->no_wa,
                        'email'=>$request->email,
                        'password'=>bcrypt($request->password)
                    ]);

        return redirect()->route('datapetugassanggar')->with('success','Data Berhasil Diupdate');
    }

    function delete_data($email){
            DB::table('petugas_sanggars')->where('email', $email)->delete();
            return redirect()->route('datapetugassanggar')->with('success','Data Berhasil Dihapus');
        }

        function menampilkan_dataadmin(){
            $data = Admin::all();
            return view('admin.dataadmin',compact('data'));
        }

}
