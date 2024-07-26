<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [AdminCategoryController::class, 'index']);
// Route::get('/san-pham', [AdminCategoryController::class, 'index']);

// // slug
// Route::get('/product', [AdminCategoryController::class, 'index']);


Route::get('/', function () {
    return view('client.index');
})->name('home');

Route::get('about', function () {
    return view('client.about');
})->name('about');

Route::get('room', function () {
    return view('client.room');
})->name('room');

Route::get('gallery', function () {
    return view('client.gallery');
})->name('gallery');

Route::get('blog', function () {
    return view('client.blog');
})->name('blog');

Route::get('contact', function () {
    return view('client.contact');
})->name('contact');

Route::get('account', function () {
    return view('client.account');
})->name('account');


Route::prefix('admin')->group(function () {
    Route::get('/login', function () {
        return view('admin.login');
    })->name('login');

    Route::get('/register', function () {
        return view('admin.register');
    })->name('register');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/user', function () {
        return view('admin.user');
    })->name('user');

    Route::get('/room_management', function () {
        return view('admin.room');
    })->name('room_management');


    Route::get('/insertroom', function () {
        return view('admin.insert_room');
    })->name('insert_room');

    Route::get('/insertuser', function () {
        return view('admin.insert_user');
    })->name('insert_user');

    Route::get('/hotel', function () {
        return view('admin.hotel');
    })->name('hotel');

    Route::get('/insert_hotel', function () {
        return view('admin.insert_hotel');
    })->name('insert_hotel');

    Route::get('/service', function () {
        return view('admin.service');
    })->name('service');

    Route::get('/insert_service', function () {
        return view('admin.insert_service');
    })->name('insert_service');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
