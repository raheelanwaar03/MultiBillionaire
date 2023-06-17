<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\WidthrawController;
use Illuminate\Support\Facades\Route;



// Group Routing

Route::name('Admin.')->prefix('Admin')->middleware('admin','auth')->group(function(){


    Route::get('/Dashboard',[AdminDashboardController::class,'index'])->name('Dashbaord');

    // Users Routes
    Route::get('/All/Users',[AdminDashboardController::class,'allUsers'])->name('All.Users');
    Route::get('/Pending/Users',[AdminDashboardController::class,'pendingUsers'])->name('Pending.Users');
    Route::get('/Approved/Users',[AdminDashboardController::class,'approvedUsers'])->name('Approved.Users');
    Route::get('/Rejected/Users',[AdminDashboardController::class,'rejectedUsers'])->name('Rejected.Users');
    Route::get('/Make/Pending/{id}',[AdminDashboardController::class,'makePending'])->name('Make.Users.Pending');
    Route::get('/Make/Approved/{id}',[AdminDashboardController::class,'makeApproved'])->name('Make.Users.Approved');
    Route::get('/Make/Rejected/{id}',[AdminDashboardController::class,'makeRejected'])->name('Make.Users.Rejected');

    // Widthraw Routes
    Route::get('/All/Widthraw',[WidthrawController::class,'index'])->name('All.Widthraw');
    Route::get('/Pending/Widthraw',[WidthrawController::class,'pending'])->name('Pending.Widthraw');
    Route::get('/Approved/Widthraw',[WidthrawController::class,'approved'])->name('Approved.Widthraw');
    Route::get('/Rejected/Widthraw',[WidthrawController::class,'rejected'])->name('Rejected.Widthraw');
    Route::get('/Make/Pending/{id}',[WidthrawController::class,'makePending'])->name('Make.Pending');
    Route::get('/Make/Approve/{id}',[WidthrawController::class,'makeApprove'])->name('Make.Approve');
    Route::get('/Make/Rejected/{id}',[WidthrawController::class,'makeRejected'])->name('Make.Rejected');



});
