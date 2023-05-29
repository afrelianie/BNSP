<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\Detail_PesananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



    ///////////  ADMIN /////////////
    Route::prefix('admin')->group(function(){

        //menggunakan routing ke controller
        //mengarahkan ke controller AdminController

        // ini adalah route untuk bagian home
        Route::get('home', [AdminController::class, 'index'])->name('home');
        
        // ini adalah route untuk bagian user
        Route::resource('user', UserController::class);
       
        // ini adalah route untuk bagian destinasi
        Route::resource('destinasi', DestinasiController::class);

        // ini adalah route untuk bagian pesanan
        Route::resource('pesanan', PesananController::class);
        
        // ini adalah route untuk bagian pembayaran
        Route::resource('pembayaran', PembayaranController::class);

         // ini adalah route untuk bagian detail_pesanan
         Route::resource('detail_pesanan', Detail_PesananController::class);
    });