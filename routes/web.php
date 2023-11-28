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


// Mengalihkan he alamat beranda
Route::get('/', function () {
    return redirect('/beranda');
});

Route::get('/home', function () {
    return redirect('/admin');
});

require_once 'backend.php';
require_once 'frondend.php';
