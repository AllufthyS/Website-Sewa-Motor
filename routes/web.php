<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\DetailJenisMotorController;
use App\Http\Controllers\PenyewaanController;
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
    return view('home');
});

Route::get('login', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('menupelanggan', function () {
    return view('Pelanggan/customer');
});

Route::get('logout', function () {
    return view('login');
});

Route::get('motor', function () {
    return view('Jenis_Motor/motor');
});

Route::get('jenismotor', [DetailJenisMotorController::class,'lihatjenismotor']);

Route::post('pelanggan', [UserController::class,'tambahdata']);
Route::get('customer', [UserController::class,'lihatdata']);
Route::get('hapus/{id_customer}', [UserController::class, 'hapusdata']);
Route::get('edit/{id_customer}', [UserController::class, 'editdata']);
Route::post('prosesupdate', [UserController::class, 'prosesupdate']);

Route::post('tambahmotor', [MotorController::class,'tambahdatamotor']);
Route::get('read_motor', [MotorController::class,'lihatdatamotor']);
Route::get('hapusdatamotor/{id_jenis_motor}', [MotorController::class, 'hapusdatamotor']);
Route::get('editdatamotor/{id_jenis_motor}', [MotorController::class, 'editdatamotor']);
Route::post('prosesupdatemotor', [MotorController::class, 'prosesupdatemotor']);

Route::post('tambahdetailmotor', [DetailJenisMotorController::class,'tambahdetailmotor']);
Route::get('detailmotor', [DetailJenisMotorController::class,'lihatdetailmotor']);
Route::get('hapusdetailmotor/{id_motor}', [DetailJenisMotorController::class, 'hapusdetailmotor']);
Route::get('editdetailmotor/{id_motor}', [DetailJenisMotorController::class, 'editdetailmotor']);
Route::post('prosesupdatedetailmotor', [DetailJenisMotorController::class, 'prosesupdatemotor']);

Route::get('transaksi', [PenyewaanController::class,'lihatcus']);
Route::post('transaksi', [PenyewaanController::class,'tambahsewa']);
Route::get('transaksi/getharga/{id_jenis_motor}',[PenyewaanController::class,'getharga']);
Route::get('readsewa', [PenyewaanController::class,'lihatdetailsewa']);
Route::get('hapussewa/{id_penyewaan}', [PenyewaanController::class, 'hapussewa']);
Route::get('editsewa/{id_penyewaan}', [PenyewaanController::class, 'editsewa']);
Route::post('prosesupdatesewa', [PenyewaanController::class, 'prosesupdatesewa']);


