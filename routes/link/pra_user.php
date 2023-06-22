<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\BokingController;


 ///// Bagian Pengguna //////
 Route::group(['middleware' => ['auth','cek_login:admin,user']],function(){
     Route::controller(PenggunaController::class)->group(function(){
          Route::get('profile', 'profil');
          Route::post('profil/update/{id}', 'profil_update');

     });


     Route::controller(BokingController::class)->group(function(){
          Route::get('pesanan', 'index');
          Route::get('pesanan/create', 'create');
          Route::post('pesanan/store', 'store');
          Route::post('pesanan/destroy/{id}', 'destroy');
          Route::get('pesanan/show/{id}', 'show');
 
          Route::post('pesanan/bayar', 'bayar')->name('bayar');
          Route::get('pesanan/print/{id}', 'print')->name('print');
          Route::post('pesanan/batal', 'batal')->name('batal');
        
     });

});