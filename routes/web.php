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
    return view('welcome');
});
Route::get('/test/{angka}', function ($angka) {
    
    return view ('test', ["angka" => $angka]);
});
Route::get('/register', function () {
    return 'welcome';
});
Route::get ('/welcome', function () {
    return 'Hai';
});
Route::get ('/form', 'RegisterController@form');

Route::get ('/siapa', 'RegisterController@siapa');

Route::get ('/home', 'RegisterController@home');