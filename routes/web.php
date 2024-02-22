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
    return view('home');
})->name('home');

Route::get('/classe114', function () {
    return view('classe114');
})->name('classe114');

Route::get('/batCaverna', function () {
    return view('batCaverna');
})->name('batCaverna');

Route::get('/dysonStore', function () {
    return view('dysonStore');
})->name('dysonStore');
