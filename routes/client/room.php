<?php

use Illuminate\Support\Facades\Route;

Route::get('room', function () {
    return view('client.room');
})->name('room');
