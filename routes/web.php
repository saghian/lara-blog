<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('dashboard.dashboard');
    // return view('dashboard.layouts.index');
});

// Route::prefix('/dashboard')->group(function () {
//     Route::get('/', function () {
//         return view('dashboard.layouts.dashboard');
//     })->middleware(['auth', 'verified'])->name('dashboard');
// });

Route::prefix('/console')->group(function () {
    Route::get('/', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');
});

Route::prefix('/console/sample')->group(function () {
    Route::get('/acc-setting', function () {
        return view('dashboard.sample.account-setting.pages-account-settings-account');
    })->name('dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::fallback(function () {
    return 'Not Found Page!';
});
