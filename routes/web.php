<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test', [ 'message' => 'Test mode : laravel kamu sudah tersetup dengan baik !']);
});
