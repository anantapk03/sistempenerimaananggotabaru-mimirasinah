<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamuController extends Controller
{
    function index (){
        return view('tamu.welcome');
    }

    function showarticle () {
        return view ('tamu.article');
    }

    function readarticle () {
        return view ('tamu.showarticle');
    }

    function showjadwalacara () {
        return view('tamu.jadwalacarasanggar');
    }
    function showgalerilatihan  () {
        return view ('tamu.galerilatihan');
    }
    function showgaleriacarabesar  () {
        return view ('tamu.galeriacarabesar');
    }
    function showassetsanggar  () {
        return view ('tamu.galeriasset');
    }
    
    

}
