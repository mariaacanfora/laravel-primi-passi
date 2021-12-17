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
    setlocale(LC_TIME, 'ita');
    $data = strftime("%A, %d %B %Y");

    $data = [
        "today" => utf8_encode($data),
        "now" => date("H:i"),
        "leap_year" => date("L")
    ];

    return view('home', $data);
});
