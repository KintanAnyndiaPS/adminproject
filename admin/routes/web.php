<?php

use App\Http\Controllers\kategoricontroller;
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
    return view('halamanutama');
});

Route::controller(kategoricontroller::class)->group(function () {
    Route::get('kategori/index', 'index')->name('kategori');
    Route::get('kategori', 'index')->name('kategori');
});

Route::resource('kategori',kategoricontroller::class);