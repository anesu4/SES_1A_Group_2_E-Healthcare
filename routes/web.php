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

// // Index Home Page
// Route::get('/', function () {
//         return view('index');
//     });

// Doctor and Patient URL Pages
//Route::get('/patient/{id}', function ($id) {return view('patient');});

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
// Route::get('/dashboard', 'DashboardController@index');
// Route::get('/home', 'DashboardController@index')->name('home');

Route::group(['middleware' => ['web']], function () {
    Route::auth();
    Route::get('/patient', function () {return view('patient');});
// Route::get('/doctor', function () {return view('doctor');});
    Route::get('/messaging', function () {return view('messages');});
    Route::get('/patient-form', function () {return view('patient-form');});
    Route::get('/messaging-display', function () {return view('messaging-display');});
    Route::get('/dd', function () {return view('dd');});
    Route::get('/form', function () {
        return view('form');
    });
    Route::get('/appointment', function () {
        return view('appointment');
    });
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/', 'DashboardController@index');

// Messaging
Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messaging', 'uses' => 'MessagesController@index']);
    Route::get('create', ['as' => 'messaging.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messaging.store', 'uses' => 'MessagesController@store']);
    Route::get('/{id}', ['as' => 'messaging.show', 'uses' => 'MessagesController@show']);
    Route::put('/{id}', ['as' => 'messaging.update', 'uses' => 'MessagesController@update']);
});

//Messaging View
// Route::get('/messages', function () {
//     return view('messages');
// });


// Doctor Login Information
Route::group(['prefix' => 'doctors'], function () {
    Route::get('/login', 'Auth\DoctorLoginController@showLoginForm')->name('doctors.login');
    Route::post('/login', 'Auth\DoctorLoginController@login')->name('doctors.login.submit');
    Route::get('/', 'DoctorController@index')->name('doctors.dashboard');
    Route::get('/register', 'Auth\DoctorRegisterController@showRegistrationForm')->name('doctors.register');
    Route::post('/register', 'Auth\DoctorRegisterController@register')->name('doctors.register.submit');
});



