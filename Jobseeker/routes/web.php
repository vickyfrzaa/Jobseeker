<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('/home', [App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::post('/create', [App\Http\Controllers\IndexController::class, 'create'])->name('create');
Route::get('/create', [App\Http\Controllers\IndexController::class, 'create'])->name('create');
Route::post('/save', [App\Http\Controllers\IndexController::class, 'store'])->name('save');
Route::get('/edit/{candidate_id}', [App\Http\Controllers\IndexController::class, 'edit'])->name('edit');
Route::post('/update/{candidate_id}', [App\Http\Controllers\IndexController::class, 'update'])->name('update');
Route::get('/destroy/{candidate_id}', [App\Http\Controllers\IndexController::class, 'destroy'])->name('destroy');