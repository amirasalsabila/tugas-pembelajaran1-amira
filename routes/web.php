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
    // return view('home/welcome);
    return 'Hallo Laravel';
});

Route::get('about', function () {
    return 'Ini adalah halaman <b>about</b>';
});

Route::get('mahasiswa', function () {
    return 'Ini adalah halaman <b>mahasiswa</b>';
});

Route::get('profile', function () {
    $nama = 'AMIRA';
    return 'Ini adalah halaman <b>profile</b>, nama saya adalah '. $nama;
});