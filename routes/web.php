<?php

use App\Http\Controllers\MatkulController;
use App\Models\Matkul;
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
    return view('dashboard.pages.materi',[
        "title" => "HMTE Data Center | Materi",
    ]);
})->middleware('auth');

Route::get('/ebook', function () {
    return view('dashboard.pages.ebook',[
        "title" => "HMTE Data Center | Ebook"
    ]);
})->middleware('auth');

Route::get('/kurikulum/checkSlug', [MatkulController::class, 'checkSlug']);
/*SEE https://laravel.com/docs/9.x/controllers#resource-controllers*/
Route::resource('/kurikulum', MatkulController::class)
    ->middleware('auth');

Route::get('/dosen', function (){
    return view('dashboard.dosen.index', [
        'title' => "Dosen",
        'dosens' => \App\Models\Dosen::all(),
    ]);
})->middleware('auth');;

Route::get('/dosen/{id:name}', function (\App\Models\Dosen $id){
   return view('dashboard.dosen.detail',[
       'title' => "Dosen | $id->name",
       'nip' => $id->NIP,
       'bidang' => $id->bidang,
       'matkul' => $id->matkul,
   ]);
})->middleware('auth');