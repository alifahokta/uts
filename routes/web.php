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

/* Halaman Home */
Route::get('/home', function () {
    return view('index');
});

/* Wisata */
Route::get("/project_detail1", function() {
    return view('project_detail1');
});
Route::get("/project_detail2", function() {
    return view('project_detail2');
});
Route::get("/project_detail3", function() {
    return view('project_detail3');
});
Route::get("/project_detail4", function() {
    return view('project_detail4');
});
Route::get("/project_detail5", function() {
    return view('project_detail5');
});
Route::get("/project_detail6", function() {
    return view('project_detail6');
});
Route::get("/project_detail7", function() {
    return view('project_detail7');
});
Route::get("/project_detail8", function() {
    return view('project_detail8');
});
Route::get("/project_detail9", function() {
    return view('project_detail9');
});
Route::get("/project_detail10", function() {
    return view('project_detail10');
});


/* Berita */
Route::get('/berita', function () {
    return view('blog');
});

/* Kontak */
Route::get('/kontak', function () {
    return view('contact');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
