<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\TamuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


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


Route::get('/', [TamuController::class, 'index']);
Route::get('/jadwalacarasanggar', [TamuController::class, 'showjadwalacara'])->name('jadwalacara');
Route::get('/article', [TamuController::class, 'showarticle'])->name('showarticle');
Route::get('/login', [LoginController::class, 'index'])->name('showlogin');
Route::get('/readarticle',[TamuController::class, 'readarticle'])->name('readarticle');
Route::get('/latihansanggar', [TamuController::class, 'showgalerilatihan'])->name('galerilatihan');
Route::get('/acarabesar', [TamuController::class, 'showgaleriacarabesar'])->name('galeriacarabesar');
Route::get('/assetsanggar', [TamuController::class, 'showassetsanggar'])->name('assetsanggar');
Route::post('/dashboardAdm', [LoginController::class, 'login'])->name('loginaksi');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/admin/adminDashboard', function(){
    return view('admin.dashboardAdm');
});

Route::get('/admin/datapetugassanggar',[AdminController::class, 'getviewdataPetugassanggar'])->name('datapetugassanggar');
Route::get('/admin/tambahpetugassanggar',[AdminController::class, 'formaddPetugas'])->name('formaddPetugas');
Route::post('/admin/insertdata',[AdminController::class, 'insertdata'])->name('insertdata');
Route::get('/admin/tampildata/{email}',[AdminController::class, 'menampilkan_data'])->name('tampildata');
Route::post('/admin/updatedata/{email}',[AdminController::class, 'edit_data'])->name('updatedata');
Route::get('/admin/delete/{email}',[AdminController::class, 'delete_data'])->name('deletedata');


Route::get('/admin/dataanggota',[AnggotaController::class, 'viewDataanggota'])->name('viewDataanggota');
// Route::get('/', [TamuController::class, 'index']);
// Route::get('/login',[LoginController::class,'index']);

// Route::get('/jadwalacarasanggar', function () {
//     return view('tamu.jadwalacarasanggar');
// });
// Route::get('/daftar', function () {
//     return view('tamu.daftar');
// });

// Route::get('/article', function () {
//     return view('tamu.article');
// });

// Route::get('admin/dashboard', [AdminController::class, 'index']);
// Route::middleware(['guest'])->group(function(){
//     Route::get('/login',[LoginController::class,'index']);
//     Route::post('/dashboard', [LoginController::class, 'login'])->name('loginaksi');
// });

//Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
