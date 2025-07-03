<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BahanController;
use App\Http\Controllers\BerandaController;

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

Route::get('/', function () {return view('welcome');});

Route::get('/', [BerandaController::class, 'index']);
Route::get('/layanan', [BerandaController::class, 'layanan']);
Route::get('/tentang', [BerandaController::class, 'tentang']);
Route::get('/produk', [BerandaController::class, 'produk']);
Route::get('/contractor', [BerandaController::class, 'contractor']);
