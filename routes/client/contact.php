<?php

use Illuminate\Support\Facades\Route;

Route::get('contact', function () {
    return view('client.contact');
})->name('contact');
