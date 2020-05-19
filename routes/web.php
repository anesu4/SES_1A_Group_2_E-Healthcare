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
Auth::routes();

// Index Home Page
Route::get('/', function () {
    return view('index');
});


// Doctor and Patient URL Pages
Route::get('/patient', function () {return view('patient');});
Route::get('/doctor', function () {return view('doctor');});
Route::get('/messages', function () {return view('messages');});
Route::get('/patient-form', function () {return view('patient-form');});

//User Authentication
// Route::get('/login', 'auth\LoginController@index')->name('login');
// Route::post('/login', 'auth\LoginController@login')->name('login');
// Route::get('/logout', 'auth\LoginController@logout')->name('logout');
// Route::post('/logout', 'auth\LoginController@logout')->name('logout');
// Route::get('/register/{pid?}', 'auth\RegisterController@index')->name('register');
// Route::post('/register/{pid?}', 'auth\RegisterController@register')->name('register');

//Error Page
// Route::any('{all}', function(){
//     return view('errors.404');
// });

// Home Page/Dashboard
Route::get('/dashboard', 'DashboardController@index');
Route::get('/home', 'DashboardController@index')->name('home');

// Messages
Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('/{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});
