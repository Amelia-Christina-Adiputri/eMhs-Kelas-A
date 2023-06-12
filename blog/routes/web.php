<?php

Route::get('/', function () {
    $user = [
        [
            "id" => 1,
            "nama" => "Siti"
        ],
        [
            "id" => 2,
            "nama" => "Jhon"
        ]
    ];
    // return view('user', ['user'=>$user]);
    // return view('welcome');
    return dd($user);
});

Route::get('/user', 'UserController@user');

Route::get('/product/{category}/{any}', 'UserController@product');

Route::get('/form', 'UserController@form');

Route::post('/proses', 'UserController@proses');