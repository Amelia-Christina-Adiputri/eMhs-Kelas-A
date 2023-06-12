<?php

Route::get('/', 'UserController@index');

Route::get('/home', 'UserController@home');

Route::get('/about', 'UserController@about');

Route::get('/profile', 'UserController@profile');

Route::get('/contact', 'UserController@contact');

Route::get('/status/{nama?}/{status?}', 'UserController@status');

Route::get('/form', 'UserController@form');

Route::post('/proses', 'UserController@proses');