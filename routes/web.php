<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PesananController;
// use App\Http\Controllers\Detail_PesananController;
use App\Http\Controllers\TestimoniController;

use App\Http\Controllers\DetailController;



Route::get('/', function () {
    return view('welcome');
});



    ///////////  ADMIN /////////////
    Route::prefix('admin')->group(function(){

        // ini adalah route untuk bagian user
        Route::controller(UserController::class)->group(function(){
            Route::get('user', 'index');
            Route::get('user/create', 'create');
            Route::post('user/store', 'store');
            Route::get('user/{id}/edit', 'edit');
            Route::post('user/update/{id}', 'update');
            Route::post('user/destroy/{id}', 'destroy');
            Route::get('user/show/{id}', 'show');
        });
       



        //menggunakan routing ke controller
        //mengarahkan ke controller AdminController

        // ini adalah route untuk bagian home
        Route::get('home', [AdminController::class, 'index'])->name('home');
        
        // ini adalah route untuk bagian destinasi
        Route::controller(DestinasiController::class)->group(function(){
            Route::get('destinasi', 'index');
            Route::get('destinasi/create', 'create');
            Route::post('destinasi/store', 'store');
            Route::get('destinasi/{id}/edit', 'edit');
            Route::post('destinasi/update/{id}', 'update');
            Route::post('destinasi/destroy/{id}', 'destroy');
            Route::get('destinasi/show/{id}', 'show');

        });

        // ini adalah route untuk bagian pesanan
        //Route::resource('pesanan', PesananController::class);
        Route::controller(PesananController::class)->group(function(){
            Route::get('pesanan', 'index');
            Route::get('pesanan/create', 'create');
            Route::post('pesanan/store', 'store');
            Route::get('pesanan/{id}/edit', 'edit');
            Route::post('pesanan/update/{id}', 'update');
            Route::post('pesanan/destroy/{id}', 'destroy');
            Route::get('pesanan/show/{id}', 'show');

        });
        
        // ini adalah route untuk bagian pembayaran
        Route::resource('pembayaran', PembayaranController::class);

         // ini adalah route untuk bagian detail_pesanan
        //  Route::resource('detail_pesanan', DetailController::class);
         Route::get('detail_pesanan', [DetailController::class, 'index'])->name('detail_pesanan');

         // ini adalah route untuk bagian detail_testimoni
         Route::resource('testimoni', TestimoniController::class); 
    });