<?php

use App\Http\Controllers\Api\LoginApiController;
use Illuminate\Http\Request;
use App\Http\Controllers\TransaksiApiController;
use App\Http\Controllers\TransaksiDetailApiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\MenuApiController;
use App\Http\Controllers\ReservasiApiController;

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
//api Transaksi
Route::get('/transaksi',[TransaksiApiController::class,'index'])->name('transaksi');
Route::get('/transaksi/{id}',[TransaksiApiController::class,'show']);
Route::post('/transaksi',[TransaksiApiController::class,'inserttransaksi'])->name('transaksi');
Route::put('/transaksi/{id}',[TransaksiApiController::class,'update'])->name('transaksi');
Route::delete('/transaksi/{id}',[TransaksiApiController::class,'delete'])->name('transaksi');

//api Transaksidetail
Route::get('/transaksidetail',[TransaksiDetailApiController::class,'index'])->name('transaksidetail');
Route::get('/transaksidetail/{id}',[TransaksiDetailApiController::class,'show']);
Route::post('/transaksidetail',[TransaksiDetailApiController::class,'insertdetil'])->name('transaksidetail');
Route::put('/transaksidetail/{id}',[TransaksiDetailApiController::class,'update'])->name('transaksidetail');
Route::delete('/transaksidetail/{id}',[TransaksiDetailApiController::class,'delete'])->name('transaksidetail');

//api hidangan
Route::get('/hidangan',[MenuApiController::class,'index'])->name('hidangan');
Route::get('/hidangan/{id}',[MenuApiController::class,'show']);
Route::post('/hidangan',[MenuApiController::class,'inserthidangan'])->name('hidangan');
Route::put('/hidangan/{id}',[MenuApiController::class,'update'])->name('hidangan');
Route::delete('/hidangan/{id}',[MenuApiController::class,'delete'])->name('hidangan');

//api menu
Route::get('/menu',[MenuApiController::class,'index'])->name('menu');
Route::get('/menu/{id}',[MenuApiController::class,'show']);

//api user
Route::get('/user',[UserApiController::class,'index'])->name('user');
Route::get('/user/{id}',[UserApiController::class,'show']);
Route::delete('/user/{id}',[UserApiController::class,'delete'])->name('user');
Route::post('/user',[UserApiController::class,'insertuser'])->name('user');
Route::put('/user/{id}',[UserApiController::class,'update'])->name('user');

//api hidangan
Route::get('/reservasi',[ReservasiApiController::class,'index'])->name('reservasi');
Route::get('/reservasi/{id}',[ReservasiApiController::class,'show']);
Route::post('/reservasi',[ReservasiApiController::class,'insertreservasi'])->name('reservasi');
Route::put('/reservasi/{id}',[ReservasiApiController::class,'update'])->name('reservasi');
Route::delete('/reservasi/{id}',[ReservasiApiController::class,'delete'])->name('reservasi');

Auth::routes();
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::post('/login','Api\LoginApiController@login');