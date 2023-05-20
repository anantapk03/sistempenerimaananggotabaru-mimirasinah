<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index (){
        return view ('tamu.login');
    }
     public function login (Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'email wajib diisi',
            'password.required'=>'password wajib diisi'
        ]);

        $credentials = $request->validate ([
            'email' => ['required', 'email:dns'],
            'password' => ['required']

        ]);


        if(Auth::attempt($credentials)){
            return view ('admin.dashboardAdm');
        } else {
            return redirect('login')->withErrors('Username atau password yang anda masukan tidak vallid')->withInput();
        }
     }

     function logout () {
        Auth::logout();
        return redirect ('login');
     }
}
