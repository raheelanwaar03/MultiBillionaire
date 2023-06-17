<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;



Route::get('/',[LandingPageController::class,'index'])->name('LandingPage');


// User Routes

Route::name('User.')->prefix('User')->middleware('user','auth')->group(function(){

    Route::get('/Widthraw',[UserDashboardController::class,'widthraw'])->name('Widthraw.Page');
    Route::post('/Widthraw/Request',[UserDashboardController::class,'widthrawRequest'])->name('Widthraw.Request');

});



// Profile Routes


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
