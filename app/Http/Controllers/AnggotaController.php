<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    function viewDataanggota(){
        $data = Anggota::all();
        return view('admin.anggotadata',compact('data'));
    }

    function viewupdatepass($email){
        $data = DB::table('anggotas')->where('email', $email)->first();
        return view('admin.anggotaeditpass', ['data'=>$data]);
    }
    function updatepassword(Request $request, $email){
        $data=DB::table('anggotas')
        ->where('email', $email)
        ->update([
            'password'=>bcrypt($request->password)
        ]);
        return redirect()->route('viewDataanggota')->with('success','Password Berhasil diubah');
    }

    function viewRegister(){
        return view('tamu.daftar');
    }

    function registerAnggota(Request $request){
        $data=new Anggota(); 
        $data->email = $request -> email;
        $data->nama = $request->nama;
        $data->image = $request->image;
        $data->no_wa = $request->no_wa;
        $data->alamat = $request->alamat;
        $data->password = bcrypt($request->password);

        if($request->hasFile('image')){
            $request->file('image')->move('fotoanggota/', $request->file('image')->getClientOriginalName());
            $data->image=$request->file('image')->getClientOriginalName();
            $data->save();
        } else{
            $data->save();
        }
        return redirect()->route('showlogin')->with('success','daftar berhasil!');
        //
    }

    function deleteAnggota($email){
        DB::table('anggotas')->where('email', $email)->delete();
            return redirect()->route('viewDataanggota')->with('success','Data Berhasil Dihapus');
    }
}
