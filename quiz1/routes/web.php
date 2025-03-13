<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// This tells the website to listen for a link like "hello/John" and grab the "John" part
Route::get('hello/{name}', function($name) {
    return 'hi ' . $name; // It will say "hi" followed by whatever name you typed (like "hi John")
});