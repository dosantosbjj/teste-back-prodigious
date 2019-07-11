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
    return redirect('users');
});

Route::resource('users', 'UsersController');

// Formulário para busca AJAX
Route::get('users/look','UsersController@look')->name('users.look');

// Rota da requisição AJAX
Route::post('/users/search','UsersController@searchUser')->name('users.search');
