<?php

use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/User',[UserDashboardController::class,'index'])->name('User.Dashboard');
