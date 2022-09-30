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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add', [App\Http\Controllers\HomeController::class, 'add'])->name('add');
Route::post('/add', [App\Http\Controllers\HomeController::class, 'insert'])->name('insert');
Route::get('/show', [App\Http\Controllers\HomeController::class, 'show'])->name('show');
Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');
Route::get('/edit/{id}',[App\Http\Controllers\HomeController::class,'edit']);
Route::post('/edit/{id}',[App\Http\Controllers\HomeController::class,'update']);
