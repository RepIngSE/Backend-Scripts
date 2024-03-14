<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('rols', App\Http\Controllers\RolController::class);
Route::resource('photosDetails', App\Http\Controllers\Photos_detailsController::class);
Route::resource('photos', App\Http\Controllers\PhotoController::class);
Route::resource('users', App\Http\Controllers\UserController::class);