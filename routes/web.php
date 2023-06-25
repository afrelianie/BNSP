<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebController;





Route::prefix('admin')->middleware('auth')->group(function () {
    include('link/pra_admin.php');
});


Route::prefix('pelanggan')->middleware('auth')->group(function () {
    include('link/pra_user.php');
});



    /////////// AUTH ///////////
    Route::controller(AuthController::class)->group(function(){
        Route::get('login', 'login')->name('login');
        Route::post('proses_login', 'proses_login');
        Route::get('logout', 'logout');
        Route::get('register', 'register')->name('register');
        Route::post('proses_register', 'proses_register');


        Route::get('lupaSandi', 'lupaSandi');
        Route::post('konfirPassword', 'konfirPassword');
        Route::get('update', 'update');
        Route::post('updateSandi/{user}', 'updateSandi');


    });


    /////////// WEB ///////////
    Route::controller(WebController::class)->group(function(){
        Route::get('/', 'welcome')->name('/');
        Route::get('art', 'art');
        Route::get('about', 'about');
        Route::get('contact', 'contact');
        Route::get('destinasi', 'destinasi');
        Route::get('destinasi/detail/{id}', 'detail');
        
    });


    
    