<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});

Route::post('/welcome',  'MainController@submit')->name('index-page');

 