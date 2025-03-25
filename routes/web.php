<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '<h1>Hello World!</h1><p>Backend is connected successfully.</p><p>Current time: ' . now()->toDateTimeString() . '</p>';
});
