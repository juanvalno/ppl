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
    return view('home');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/icome', function () {
    return view('income');
});

Route::get('/outgoing', function () {
    return view('outgoing');
});

Route::get('/acc', function () {
    return view('acc');
});

Route::get('/about', function () {
    return view('about',[
        "instansi" => "Gudang Data",
        "img" => "me.jpg"
    ]);
});