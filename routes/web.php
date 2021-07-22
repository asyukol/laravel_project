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
Route::get('/home', function () {
    return view('home');
});

Route::get('/register', 'registerController@showRegisterForm');
Route::post('/register', 'registerController@registerUser');

Route::get('/login', 'loginController@showLoginForm');
Route::post('/login', 'loginController@loginUser');

Route::post('/home', 'loginController@logoutUser');

Route::get('/admin', 'adminPageController@showAdminPage');


