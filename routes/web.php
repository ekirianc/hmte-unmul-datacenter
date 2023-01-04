<?php

use App\Http\Controllers\MatkulController;
use App\Http\Controllers\TestController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
Route::get('/login', function (){
    return Inertia::render('Auth/Login');
});

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/jadwal', function () {
    return Inertia::render('Jadwal/Index');
});

Route::get('/perpus', function () {
    return Inertia::render('Perpus/Materi');
});

Route::get('/himpunan', function () {
    return Inertia::render('Himpunan/Aktivitas');
});

Route::get('/lainnya', function () {
    return Inertia::render('Lainnya/Index');
});


/* =============== Testing =================  */

// test tailwind
Route::get('/tailwind', function (){
    return Inertia::render('Dev/Tailwind');
});

// test particle js
Route::get('/particle', function (){
    return Inertia::render('Dev/Particle');
});

// test bottom navbar
Route::get('/btmnav', function (){
    return Inertia::render('Dev/BtmNav');
});

// test tabs
Route::get('/tabs', function (){
    return Inertia::render('Dev/Tabs/Index');
});

// test crud
Route::resource('/dev', TestController::class);


