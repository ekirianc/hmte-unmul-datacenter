<?php

use App\Http\Controllers\DosenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('dosen/create', [DosenController::class, 'store']);

// dosen detail
Route::get('/dosen/{nip}', [DosenController::class, 'show']);

// dosen search
Route::get('/dosen', [DosenController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
