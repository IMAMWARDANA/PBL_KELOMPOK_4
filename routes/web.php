<?php
use App\User;
use App\Reservasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserHistoryController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserPesanController;
use App\Http\Controllers\UserMenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HidanganController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\AdminPesananController;
use App\Http\Controllers\UserReservasiController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HistoryController;
use App\Pesanan;
use App\menu;
use App\PesananDetail;

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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth', 'HakAkses:admin']], function(){
    //download PDF
Route::get('/dlh',[UserController::class,'dlh'])->name('dlh');
Route::get('/dlm',[UserController::class,'dlm'])->name('dlm');
Route::get('/dlb',[UserController::class,'dlb'])->name('dlb');
Route::get('/dlt',[UserController::class,'dlt'])->name('dlt');

Route::get('/menu',[MenuController::class,'index'])->name('menu');
Route::get('/countm',[UserController::class,'countPerMinggu']);
Route::get('/counth',[UserController::class,'countPerHari']);
Route::get('/countb',[UserController::class,'countPerBulan']);
Route::get('/countt',[UserController::class,'countPerTahun']);
Route::get('pesan/{id}',[PesanController::class,'index']);
Route::post('pesan/{id}',[PesanController::class,'pesan']);
Route::get('check-out',[PesanController::class,'check_out']);
Route::delete('check-out/{id}',[PesanController::class,'delete']);
Route::get('konfirmasi-check-out',[PesanController::class,'konfirmasi']);
Route::get('profile',[ProfileController::class,'index']);
Route::post('profile',[ProfileController::class,'update']);
Route::get('history',[HistoryController::class,'index']);
Route::get('history/{id}',[HistoryController::class,'detail']);
Route::get('/dashboard',[UserController::class,'index'])->name('dashboard');
Route::get('/deleteuser/{id}',[UserController::class,'deleteuser'])->name('deleteuser');

//Hak Milik Reservasi!!!
Route::get('/reservasi',[ReservasiController::class,'index'])->name('reservasi');
Route::get('/tambahreservasi',[ReservasiController::class,'tambahreservasi'])->name('tambahreservasi');
Route::post('/insertreservasi',[ReservasiController::class,'insertreservasi'])->name('insertreservasi');
Route::get('/updatereservasi/{id}',[ReservasiController::class,'updatereservasi'])->name('updatereservasi');
Route::post('/updatedatareservasi/{id}',[ReservasiController::class,'updatedatareservasi'])->name('updatedatareservasi');
Route::get('/deletereservasi/{id}',[ReservasiController::class,'deletereservasi'])->name('deletereservasi');
Route::get('/bayarreservasi/{id}',[ReservasiController::class,'bayarreservasi'])->name('bayarreservasi');

//Hak Milik Hidangan!!!
Route::get('/hidangan',[HidanganController::class,'index'])->name('hidangan');
Route::get('/tambahhidangan',[HidanganController::class,'tambahhidangan'])->name('tambahhidangan');
Route::post('/inserthidangan',[HidanganController::class,'inserthidangan'])->name('inserthidangan');
Route::get('/updatehidangan/{id}',[HidanganController::class,'updatehidangan'])->name('updatehidangan');
Route::post('/updatedata/{id}',[HidanganController::class,'updatedata'])->name('updatedata');
Route::get('/delete/{id}',[HidanganController::class,'delete'])->name('delete');

Route::get('/pesanan',[AdminPesananController::class,'index'])->name('pesanan');
Route::get('/deletepesanan/{id}',[AdminPesananController::class,'deletepesanan'])->name('deletepesanan');
Route::get('/updatepesanan/{id}',[AdminPesananController::class,'updatepesanan'])->name('updatepesanan');
Route::post('/updatedatapesan/{id}',[AdminPesananController::class,'updatedatapesan'])->name('updatedatapesan');
});


Route::group(['middleware' => ['auth', 'HakAkses:user']], function(){
    Route::get('/usermenu',[UserMenuController::class,'index'])->name('usermenu');
    Route::get('userpesan/{id}', [UserPesanController::class,'index']);
    Route::post('userpesan/{id}', [UserPesanController::class,'userpesan']);
    Route::get('usercheck-out', [UserPesanController::class,'usercheck_out']);
    Route::delete('usercheck-out/{id}', [UserPesanController::class,'userdelete']);

    Route::get('userkonfirmasi-check-out', [UserPesanController::class,'userkonfirmasi']);

    Route::get('userprofile', [UserProfileController::class,'index']);
    Route::post('userprofile', [UserProfileController::class,'userupdate']);

    Route::get('userhistory', [UserHistoryController::class,'index']);
    Route::get('userhistory/{id}', [UserHistoryController::class,'userdetail']);

    //Hak Milik Reservasi!!!
    Route::get('/userreservasi',[UserReservasiController::class,'index'])->name('userreservasi');
    Route::get('/usertambahreservasi',[UserReservasiController::class,'usertambahreservasi'])->name('usertambahreservasi');
    Route::post('/userinsertreservasi',[UserReservasiController::class,'userinsertreservasi'])->name('userinsertreservasi');
    Route::get('/userdeletereservasi/{id}',[UserReservasiController::class,'userdeletereservasi'])->name('userdeletereservasi');
    Route::get('/userbayarreservasi/{id}',[UserReservasiController::class,'userbayarreservasi'])->name('userbayarreservasi');
});
