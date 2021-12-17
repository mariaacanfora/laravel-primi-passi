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
    $date = strftime("%A, %d %B %Y");

    $data = [
        "today" => utf8_encode($date),
        "now" => date("H:i"),
        "leap_year" => date("L")
    ];

    return view('home', $data);
});

Route::get('/english', function(){

    $data = [
        "today" => date("l, dS M Y"),
        "now" => date("h:i A"), 
        "leap_year" => date("L")
    ];

    return view('english', $data);
});


Route::get('/spanish', function () {
    setlocale(LC_TIME, 'esp');
    $date = strftime("%A, %d %B %Y");

    $data = [
        "today" => utf8_encode($date),
        "now" => date("H:i"),
        "leap_year" => date("L")
    ];

    return view('spanish', $data);
});

Route::get('/francais', function () {
    setlocale(LC_TIME, 'fra');
    $date = strftime("%A, %d %B %Y");

    $data = [
        "today" => utf8_encode($date),
        "now" => date("H:i"),
        "leap_year" => date("L")
    ];

    return view('francais', $data);
});


