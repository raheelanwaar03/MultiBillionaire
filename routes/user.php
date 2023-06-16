<?php

use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;


// Group Routing

Route::name('User.')->prefix('User')->middleware('user','auth')->group(function(){

Route::get('/Dashboard',[UserDashboardController::class,'index'])->name('Dashboard');


});
