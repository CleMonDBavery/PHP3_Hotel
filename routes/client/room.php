<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\RoomController;

Route::get('/room', [RoomController::class, 'read'])->name('room');
