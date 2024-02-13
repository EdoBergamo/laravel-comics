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
    $comics = [
        'films' => config('dbcomics'),
        'elenco_film' => 'Current series',
        'links' => config('dbmenu'),
    ];
    return view('home', $comics);
});


Route::get('/comics', function () {
    return view('comics');
});