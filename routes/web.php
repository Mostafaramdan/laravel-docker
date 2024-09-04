<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // get os hostname
    $os = exec('hostname');
    return "welcome to laravel , reserved by nginx. aaa ";
});
