<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\LuckController;
use App\Http\Controllers\admin\ManageLevelController;
use App\Http\Controllers\admin\TaskController;
use App\Http\Controllers\admin\WidthrawController;
use Illuminate\Support\Facades\Route;



// Group Routing

Route::name('Admin.')->prefix('Admin')->middleware('admin','auth')->group(function(){


    Route::get('/Dashboard',[AdminDashboardController::class,'index'])->name('Dashbaord');
    Route::get('/Daily/Bounc',[AdminDashboardController::class,'dailyBounc'])->name('Daily.Bounc');
    Route::get('/Lock/Older/User',[AdminDashboardController::class,'lockUser'])->name('Lock.Users');
    Route::get('/Edit/User/{id}',[AdminDashboardController::class,'editUser'])->name('edit.User');
    Route::post('/Update/User/{id}',[AdminDashboardController::class,'updateUser'])->name('Update.User');

    // Users Routes
    Route::get('/All/Users',[AdminDashboardController::class,'allUsers'])->name('All.Users');
    Route::get('/Pending/Users',[AdminDashboardController::class,'pendingUsers'])->name('Pending.Users');
    Route::get('/Approved/Users',[AdminDashboardController::class,'approvedUsers'])->name('Approved.Users');
    Route::get('/Rejected/Users',[AdminDashboardController::class,'rejectedUsers'])->name('Rejected.Users');
    Route::get('/Make/User/Pending/{id}',[AdminDashboardController::class,'makePending'])->name('Make.User.Pending');
    Route::get('/Make/User/pproved/{id}',[AdminDashboardController::class,'makeApproved'])->name('Make.User.Approved');
    Route::get('/Make/User/Rejected/{id}',[AdminDashboardController::class,'makeRejected'])->name('Make.User.Rejected');

    // Widthraw Routes
    Route::get('/All/Widthraw',[WidthrawController::class,'index'])->name('All.Widthraw');
    Route::get('/Pending/Widthraw',[WidthrawController::class,'pending'])->name('Pending.Widthraw');
    Route::get('/Approved/Widthraw',[WidthrawController::class,'approved'])->name('Approved.Widthraw');
    Route::get('/Rejected/Widthraw',[WidthrawController::class,'rejected'])->name('Rejected.Widthraw');
    Route::get('/Make/Pending/{id}',[WidthrawController::class,'makePending'])->name('Make.Pending');
    Route::get('/Make/Approve/{id}',[WidthrawController::class,'makeApprove'])->name('Make.Approved');
    Route::get('/Make/Rejected/{id}',[WidthrawController::class,'makeRejected'])->name('Make.Rejected');

    // Add new Task
    Route::get('/Add/New/Task',[TaskController::class,'index'])->name('Add.Task');
    Route::post('/Enter/Task',[TaskController::class,'add'])->name('Enter.Task');
    Route::get('/All/Task',[TaskController::class,'allTask'])->name('All.Task');
    Route::get('/Delete/Task/{id}',[TaskController::class,'delete'])->name('Delete.Task');

    // Level routes
    Route::get('All/Level/Requests',[ManageLevelController::class,'index'])->name('Level.Requests.From.Users');
    Route::get('Unlock/Level/{user_id}',[ManageLevelController::class,'unlock'])->name('Unlock.User.Level');
    Route::get('Unlock/Users',[ManageLevelController::class,'unlocked'])->name('Unlock.Users');

    // luck page
    Route::get('/Add',[LuckController::class,'add'])->name('Add.Luck');
    Route::post('/Store',[LuckController::class,'store'])->name('Store.Luck');
    Route::get('/All/Luck',[LuckController::class,'index'])->name('All.Luck');
    Route::get('/Delete/Luck/{id}',[LuckController::class,'delete'])->name('Delete.Luck');
    Route::get('/All/Insvestors',[LuckController::class,'allInvestors'])->name('All.Investors');
    Route::get('/Chosse/One/Lucky/Person',[LuckController::class,'luckyPerson'])->name('Lucky.Person');
    Route::get('/Add/User/In/Luck/{id}',[LuckController::class,'addInLuck'])->name('Add.In.Lucky');

});
