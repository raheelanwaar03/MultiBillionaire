<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\WidthrawController;
use Illuminate\Support\Facades\Route;



// Group Routing

Route::name('Admin.')->prefix('Admin')->middleware('admin','auth')->group(function(){


    Route::get('/Dashboard',[AdminDashboardController::class,'index'])->name('Dashbaord');
    Route::get('/All/Widthraw',[WidthrawController::class,'index'])->name('All.Widthraw');
    Route::get('/Pending/Widthraw',[WidthrawController::class,'pending'])->name('Pending.Widthraw');
    Route::get('/Approved/Widthraw',[WidthrawController::class,'approved'])->name('Approved.Widthraw');
    Route::get('/Rejected/Widthraw',[WidthrawController::class,'rejected'])->name('Rejected.Widthraw');


});
