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
    return view('home', [
        "title" => "Beranda"
    ]);
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa', [
        "title" => "Mahasiswa"
    ]);
});

Route::get('/lulusan', function () {
    return view('lulusan', [
        "title" => "Lulusan"
    ]);
});

Route::get('/halaman-staff', function () {
    return view('halstaff', [
        "title" => "staff"
    ]);
});

Route::get('/data-mhs', function () {
    return view('datamhs', [
        "title" => "dtMhs"
    ]);
});