<?php

use App\Http\Controllers\Web\CategoryController;
use App\Http\Controllers\Web\FooterController;
use App\Http\Controllers\Web\NavMenuController;
use App\Http\Controllers\Web\SiteImageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');





Route::prefix('cactus')->group(function () {
    Route::apiResource('site-images', SiteImageController::class);
    Route::apiResource('nav-menus', NavMenuController::class);
    Route::apiResource('footers', FooterController::class);
     Route::apiResource('categories', CategoryController::class);

});
