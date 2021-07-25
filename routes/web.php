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
    return view('home');
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
Route::get('/admin/deleteUser', 'adminPageController@deleteUserView');
Route::get('/admin/editUser', 'adminPageController@editUserView');
Route::post('/admin/deleteUser', 'adminPageController@deleteUser');
Route::post('/admin/editUser', 'adminPageController@editUser');

Route::get('/news', 'newsController@showNews');
Route::post('/news', 'newsController@addNewsShow');

Route::post('/news/add', 'newsController@addNews');

Route::get('/news/{title}', 'newsController@showNewsDetails');
Route::post('/news/comment','newsController@addComment');
