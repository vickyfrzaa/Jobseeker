<?php

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/create', [App\Http\Controllers\IndexController::class, 'create'])->name('create');
Route::get('/create', [App\Http\Controllers\IndexController::class, 'create'])->name('home');
// Route::post('/index', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
