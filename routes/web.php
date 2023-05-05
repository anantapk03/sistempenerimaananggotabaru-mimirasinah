<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('tamu/welcome');
});

Route::get('/login', function () {
    return view('tamu/login');
});

Route::get('/jadwalacarasanggar', function () {
    return view('tamu/jadwalacarasanggar');
});

Route::get('/daftar', function () {
    return view('tamu/daftar');
});