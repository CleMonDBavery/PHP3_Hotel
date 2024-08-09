<?php

use App\Http\Controllers\Admin\RoomtypeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ConvenientController;
use App\Http\Controllers\Client\RoomController;
use App\Http\Controllers\Client\RoomdetailController;
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
Route::prefix('/')->group(function () {
    Route::get('room', [RoomController::class, 'getRooms'])->name('room');
    Route::get('room_detail/{id}', [RoomController::class, 'getRoomDetail'])->name('room_detail');
});
Route::get('checkout', function () {
    return view('client.checkout');
})->name('checkout');

// Route::prefix('admin')->group(function () {
//     Route::get('/login', function () {
//         return view('admin.login');
//     })->name('login');

//     Route::get('/register', function () {
//         return view('admin.register');
//     })->name('register');

//     Route::get('/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('dashboard');

//     Route::get('/user', function () {
//         return view('admin.user');
//     })->name('user');

//     Route::get('/room_management', function () {
//         return view('admin.room');
//     })->name('room_management');


//     Route::get('/insertroom', function () {
//         return view('admin.insert_room');
//     })->name('insert_room');

//     Route::get('/insertuser', function () {
//         return view('admin.insert_user');
//     })->name('insert_user');

//     Route::get('/hotel', [RoomtypeController::class, 'read']

//     )->name('hotel');

//     Route::get('/insert_hotel', function () {
//         return view('admin.insert_hotel');
//     })->name('insert_hotel');

//     Route::get('/service', function () {
//         return view('admin.service');
//     })->name('service');

//     Route::get('/insert_service', function () {
//         return view('admin.insert_service');
//     })->name('insert_service');
// });


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');


    Route::prefix('services')->group(function () {
        Route::get('/dashboard', [ServiceController::class, 'read'])->name('service.dashboard');
        Route::get('/insert_service', [ServiceController::class, 'create'])->name('service.insert');
        Route::get('edit_service/{id}', [ServiceController::class, 'edit'])->name('service.edit');

        Route::post('/insert_service', [ServiceController::class, 'store'])->name('service.store');
        Route::delete('destroy_service/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
        Route::patch('update_service/{id}', [ServiceController::class, 'update'])->name('service.update');
    });

    Route::prefix('convenients')->group(function () {
        Route::get('/dashboard', [ConvenientController::class, 'read'])->name('convenient.dashboard');
        Route::get('/insert_convenient', [ConvenientController::class, 'create'])->name('convenient.insert');
        Route::get('edit_convenient/{id}', [ConvenientController::class, 'edit'])->name('convenient.edit');

        Route::post('/insert_convenient', [ConvenientController::class, 'store'])->name('convenient.store');
        Route::delete('destroy_convenient/{id}', [ConvenientController::class, 'destroy'])->name('convenient.destroy');
        Route::patch('update_convenient/{id}', [ConvenientController::class, 'update'])->name('convenient.update');
    });

    // Route::prefix('rooms')->group(function () {

    //     Route::get('room', function () {
    //         return view('client.room');
    //     })->name('room');
    // });

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
require __DIR__ . '/auth.php';
