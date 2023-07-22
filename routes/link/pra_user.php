<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\BokingController;
use App\Http\Controllers\ReviewController;


 ///// Bagian Pengguna //////
 Route::group(['middleware' => ['auth','cek_login:admin,user']],function(){
     Route::controller(PenggunaController::class)->group(function(){
          Route::get('profile', 'profil');
          Route::post('profil/update/{id}', 'profil_update');

     });


     Route::controller(BokingController::class)->group(function(){
          Route::get('pesanan', 'index');
          Route::get('pesanan/create/{id}', 'create');
          Route::post('pesanan/store', 'store');
          Route::post('pesanan/destroy/{id}', 'destroy');
          Route::get('pesanan/show/{id}', 'show');
 
          Route::post('pesanan/bayar', 'lunas')->name('lunas');
          Route::get('pesanan/print/{id}', 'print')->name('print');
          Route::post('pesanan/cancel', 'cancel')->name('cancel');
        
     });

     Route::controller(ReviewController::class)->group(function(){
          Route::get('review', 'index');
          Route::get('review/show/{id}', 'show');
          Route::get('review/create/{id}', 'create');
          Route::post('review/store', 'store');
         
          });

});