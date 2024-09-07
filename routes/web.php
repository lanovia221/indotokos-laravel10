<?php

use Illuminate\Support\Facades\Route;
use Modules\Shop\App\Http\Controllers\ShopController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/', [ShopController::class, 'index'])->name('index');
Route::get('/home', [ShopController::class, 'home'])->name('home');
Route::get('/toko', [ShopController::class, 'toko'])->name('toko');
Route::get('/kontak', [ShopController::class, 'kontak'])->name('kontak');
Route::get('/transaksi', [ShopController::class, 'transaksi'])->name('transaksi');
Route::get('/contact', [ShopController::class, 'contact'])->name('contact');

// Auth::routes();
// Route::prefix('shop')->group(function(){
//     Route::get('/', 'ShopController@index');
// });

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
