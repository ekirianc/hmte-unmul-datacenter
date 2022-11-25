<?php

use App\Http\Controllers\MatkulController;
use App\Models\Day;
use App\Models\Matkul;
use App\Models\Semester;
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

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate']);
Route::post('/logout', [\App\Http\Controllers\LoginController::class, 'logout']);

Route::get('/', [\App\Http\Controllers\JadwalController::class, 'show'])->middleware('auth');

Route::get('/jadwal', [\App\Http\Controllers\JadwalController::class, 'show'])->middleware('auth');

Route::get('/materi', function () {

    return view('materi',[
        "title" => "HMTE Data Center | Materi",
    ]);
})->middleware('auth');

Route::get('/ebook', function () {
    return view('ebook',[
        "title" => "HMTE Data Center | Ebook"
    ]);
})->middleware('auth');

Route::get('/kurikulum', [MatkulController::class, 'show_all'])->middleware('auth');

// Matkul Detail
//Route::get('/matkul/{id:slug}', [MatkulController::class, 'show_detail'])->middleware('auth');
//{id} mengambil id matkul,  lalu :slug akan mengambil slug dari id
//data diolah di controler pada methot show

Route::get('/dosen/{id:name}', function (\App\Models\Dosen $id){
   return view('dosen_detail',[
       'title' => "Dosen | $id->name",
       'nip' => $id->NIP,
       'bidang' => $id->bidang,
       'matkul' => $id->matkul,
   ]);
})->middleware('auth');