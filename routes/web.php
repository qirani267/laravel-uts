<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HpController;

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

Route::get('/list-hp', [HpController::class, 'list']);

Route::get('/tambah-hp', function () {
    return view('tambah-hp');
});
Route::post('/simpan-hp', [HpController::class, 'simpan']);
Route::get('/hapus-hp/{id}', [HpController::class, 'hapus']);
Route::get('/ubah-hp/{id}', [HpController::class, 'ubah']);
Route::post('/ubah-hp', [HpController::class, 'rubah']);
