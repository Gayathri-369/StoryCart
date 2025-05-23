<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index'); // points to resources/views/home/index.blade.php
});
