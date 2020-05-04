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

//Index Home Page
Route::get('/', function () {
    return view('index');
});

//User Authentication
Route::get('/login', 'auth\LoginController@index')->name('login');
Route::post('/login', 'auth\LoginController@login')->name('login');
Route::get('/logout', 'auth\LoginController@logout')->name('logout');
Route::post('/logout', 'auth\LoginController@logout')->name('logout');
Route::get('/register/{pid?}', 'auth\RegisterController@index')->name('register');
Route::post('/register/{pid?}', 'auth\RegisterController@register')->name('register');

//Error Page
Route::any('{all}', function(){
    return view('errors.404');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
