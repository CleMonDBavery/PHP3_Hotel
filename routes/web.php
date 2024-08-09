<?php

use App\Http\Controllers\Admin\RoomtypeController;
use App\Http\Controllers\Client\RoomtypeController as ClientRoomtype;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginGoogleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::controller(LoginGoogleController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('login-by-google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Định nghĩa route cho home
    Route::get('/home', function () {
        return view('client.index');
    })->name('home');

    Route::get('about', function () {
        return view('client.about');
    })->name('about');

    Route::get('rooms', [ClientRoomtype::class, 'list'])->name('room');
    Route::get('room/{id}', [ClientRoomtype::class, 'detail'])->name('rooms.detail');


    Route::get('contact', function () {
        return view('client.contact');
    })->name('contact');
    Route::post('/send', [ContactController::class, 'send'])->name('send.email');


    Route::get('blog', function () {
        return view('client.blog');
    })->name('blog');

    Route::get('checkout', function () {
        return view('client.checkout');
    })->name('checkout');


    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});


Route::prefix('admin')->middleware(['auth', 'role:1'])->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');


    Route::prefix('services')->group(function () {
        Route::get('/service', function () {
            return view('admin.service');
        })->name('service');

        Route::get('/insert_service', function () {
            return view('admin.insert_service');
        })->name('insert_service');
    });

    Route::prefix('rooms')->group(function () {

        Route::get('room', function () {
            return view('client.room');
        })->name('admin_room');
    });

    Route::prefix('room-type')->group(function () {

        Route::get('/dashboard', [RoomtypeController::class, 'read'])->name('room-type.dashboard');
        Route::get('/insert_room-type', [RoomtypeController::class, 'create'])->name('room-type.insert');
        Route::get('edit_room-type/{id}', [RoomtypeController::class, 'edit'])->name('room-type.edit');

        Route::post('/insert_room-type', [RoomtypeController::class, 'store'])->name('room-type.store');
        Route::delete('destroy_room-type/{id}', [RoomtypeController::class, 'destroy'])->name('room-type.destroy');
        Route::patch('update_room-type/{id}', [RoomtypeController::class, 'update'])->name('room-type.update');
    });

    Route::prefix('users')->group(function () {
        Route::get('/user', function () {
            return view('admin.user');
        })->name('user');

        Route::get('/insertuser', function () {
            return view('admin.insert_user');
        })->name('insert_user');
    });
});

Route::prefix('client')->middleware(['auth', 'role:0'])->group(function () {
});

require __DIR__ . '/auth.php';
