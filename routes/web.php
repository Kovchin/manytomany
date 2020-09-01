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
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('createUser/{name}/{email}', 'Application@createUser');
Route::get('showUsers', 'Application@showUsers');
Route::get('showUser/{id}', 'Application@showUser');
Route::get('createPost/{user_id}/{titlePost}/{bodyPost}', 'Application@createPost');
Route::get('showPostsByIdUser/{user_id}', 'Application@showPostsByIdUser');
Route::get('showUsersByIdPost/{post_id}','Application@showUsersByIdPost');
