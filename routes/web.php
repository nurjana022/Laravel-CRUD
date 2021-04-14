<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
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
    return view('index2');
});

//Route::get('/pasien_terdaftar', function () {
    //return view('pasien_terdaftar');
//});

Route::get('/pasien_terdaftar', [PasienController::class, 'index']);
//Route::post('/pasien/create', [PasienController::class, 'create']);
Route::get('/home', [PasienController::class, 'home']);
Route::post('/home', [PasienController::class, 'create']);