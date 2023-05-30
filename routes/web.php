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
            Route::post('user/delete/{id}', 'delete');
            Route::get('user/show/{id}', 'show');
        });
       



        //menggunakan routing ke controller
        //mengarahkan ke controller AdminController

        // ini adalah route untuk bagian home
        Route::get('home', [AdminController::class, 'index'])->name('home');
        
        // ini adalah route untuk bagian destinasi
        Route::resource('destinasi', DestinasiController::class);

        // ini adalah route untuk bagian pesanan
        Route::resource('pesanan', PesananController::class);
        
        // ini adalah route untuk bagian pembayaran
        Route::resource('pembayaran', PembayaranController::class);

         // ini adalah route untuk bagian detail_pesanan
        //  Route::resource('detail_pesanan', DetailController::class);
         Route::get('detail_pesanan', [DetailController::class, 'index'])->name('detail_pesanan');

         // ini adalah route untuk bagian detail_testimoni
         Route::resource('testimoni', TestimoniController::class); 
    });