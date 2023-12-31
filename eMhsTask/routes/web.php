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

Route::group(['middleware'=>['auth']], function(){
    Route::get('/home', 'PageController@home');
    Route::get('/profile', 'PageController@profile');
    Route::get('/mahasiswa', 'PageController@mahasiswa');
    Route::get('/contact', 'PageController@contact');

    Route::get('/mahasiswa/search', 'PageController@search');
    Route::get('/mahasiswa/formadd', 'PageController@formadd');
    Route::post('/mahasiswa/save', 'PageController@save');
    Route::get('/mahasiswa/formedit/{id}', 'PageController@edit');
    Route::put('/mahasiswa/update/{id}', 'PageController@update');
    Route::get('/mahasiswa/delete/{id}', 'PageController@delete');
    Route::get('/logout', 'AuthController@logout');
});

Route::group(['middleware'=>['guest']], function(){
    Route::get('/', 'AuthController@login');
    Route::post('/ceklogin', 'AuthController@ceklogin');
    Route::get('/register', 'AuthController@register');
    Route::post('/simpan', 'AuthController@simpan');
    Route::get('/taskindex', 'PageController@taskindex');
});


Route::get('/index', function(){
    return view('index');
})->middleware('guest');