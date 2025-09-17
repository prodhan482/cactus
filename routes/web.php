<?php

use App\Http\Controllers\Web\HomePageController;
use App\Http\Controllers\Web\SiteImageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Blade View

Route::get('/', [HomePageController::class, 'index'])->name('home');






// Resources

Route::resource('site-images', SiteImageController::class);