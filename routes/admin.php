<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\WidthrawController;
use Illuminate\Support\Facades\Route;



// Group Routing

Route::name('Admin.')->prefix('Admin')->middleware('admin','auth')->group(function(){


    Route::get('/Dashboard',[AdminDashboardController::class,'index'])->name('Dashbaord');
    Route::get('/All/Widthraw',[WidthrawController::class,'index'])->name('All.Widthraw');


});
