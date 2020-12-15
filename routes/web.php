<?php

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

Route::get("/about-me", function () {
    return "Nama Saya <b>Hilli Safuan Aliyanto</b>";
});

Route::get("/Alamat", function () {
    return "Perum Bukit Pinang Bahari";
});

Route::get("/Rutinits", function () {
    return "Kuliah sambil Bekerja";
});

Route::get("/status", function () {
    return "Mahasiswa";
});

Route::get("/Universitas", function () {
    return "Muhammadiyah Kalimantan Timur";
});

Route::get("/semester", function () {
    return "Semester 5";
});

Route::get("/Prodi", function () {
    return "Teknik Informatika";
});

use App\Http\Controllers\hillisafuanController;

Route::get("/hillisafuan/one", [hillisafuanController::class, "one"]);
Route::get("/hillisafuan/two", [hillisafuanController::class, "two"]);
Route::get("/hillisafuan/three", [hillisafuanController::class, "three"]);


use App\Http\Controllers\hilliController;

Route::get("/hilli/satu", [hilliController::class, "satu"]);
Route::get("/hilli/dua", [hilliController::class, "dua"]);
Route::get("/hilli/tiga", [hilliController::class, "tiga"]);

Route::get("/test-tema", [hillisafuanController::class, "index"]);