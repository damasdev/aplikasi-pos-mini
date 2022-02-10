<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resources([
    'produk' => App\Http\Controllers\ProdukController::class,
    'kategori' => App\Http\Controllers\KategoriController::class,
    'pelanggan' => App\Http\Controllers\PelangganController::class,
    'suplier' => App\Http\Controllers\SuplierController::class,
    'user' => App\Http\Controllers\UserController::class,
]);

