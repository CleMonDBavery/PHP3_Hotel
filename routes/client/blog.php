<?php

use Illuminate\Support\Facades\Route;

Route::get('blog', function () {
    return view('client.blog');
})->name('blog');
