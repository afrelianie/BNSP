<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DestinasiController;

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
        Route::get('home', [AdminController::class, 'index'])->name('home');
        // Route::get('user', [UserController::class, 'index']);
        Route::resource('user', UserController::class);
        Route::resource('destinasi', DestinasiController::class);
        
    });