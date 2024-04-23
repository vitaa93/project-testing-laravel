<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Ini Adalah Home Project Backend Testing Vita';
});

Route::get('/registration', function () {
    return view('registration');
});
