<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\user\WidthrawBalanceController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;



Route::get('/',[LandingPageController::class,'index'])->name('LandingPage');


// User Routes

Route::name('User.')->prefix('User')->middleware('user','auth')->group(function(){

    Route::get('/Widthraw',[WidthrawBalanceController::class,'widthraw'])->name('Widthraw.Page');
    Route::post('/Widthraw/Request',[WidthrawBalanceController::class,'widthrawRequest'])->name('Widthraw.Request');
    Route::get('/My/Profile',[UserDashboardController::class,'myProfile'])->name('My.Profile');
    Route::get('/Finance/Records',[UserDashboardController::class,'myFinance'])->name('Finance.Records');
    Route::get('/My/Team',[UserDashboardController::class,'myTeam'])->name('My.Team');
    Route::get('/Perform/Task',[UserDashboardController::class,'performTask'])->name('Perform.Task');

});



// Profile Routes


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
