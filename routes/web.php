<?php

use App\Http\Controllers\RsController;
use App\Http\Controllers\PasienController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('kamar0006', RsController::class);
Route::resource('pasien0006', PasienController::class);
Route::get('pasien_import0006', [PasienController::class, 'formimport']);
Route::post("pasien_import0006", [PasienController::class, 'import'])->name("pasien.import");