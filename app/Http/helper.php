<?php

use App\Models\User;
use App\Models\level;
use App\Models\luckyPersons;
use App\Models\user\UserReferalCommission;
use App\Models\user\WidthrawBalance;
use App\Models\user\levelFees;

function allUser()
{
    $user = User::all()->count();
    return $user;
}

function pendingUsers()
{
    $user = User::where('status', 'pending')->get()->count();
    return $user;
}

function verifiedUsers()
{
    $user = User::where('status', 'approved')->get()->count();
    return $user;
}

function rejectedUsers()
{
    $user = User::where('status', 'rejected')->get()->count();
    return $user;
}

function totalReferFriends()
{
    $user = User::where('referal', auth()->user()->email)->where('status','approved')->get()->count();
    return $user;
}

// user widhrawal balance

function userWidthrawalBalance()
{
    $totalWidthraw = 0;
    $widthrawBalance = WidthrawBalance::where('user_id', auth()->user()->id)->where('status','approved')->get();
    foreach ($widthrawBalance as $widthraw) {
        $totalWidthraw += $widthraw->widthraw_amount;
    }

    return $totalWidthraw;
}

function userPendingBalance()
{
    $totalPending = 0;
    $pendingBalance = WidthrawBalance::where('user_id', auth()->user()->id)->where('status','pending')->get();
    foreach ($pendingBalance as $widthraw) {
        $totalPending += $widthraw->widthraw_amount;
    }

    return $totalPending;
}

function userApprovedBalance()
{
    $totalApproved = 0;
    $approvedBalance = WidthrawBalance::where('user_id', auth()->user()->id)->where('status','approved')->get();
    foreach ($approvedBalance as $widthraw) {
        $totalApproved += $widthraw->widthraw_amount;
    }

    return $totalApproved;
}

function totalReferal()
{
    $totalRefers = User::where('referal',auth()->user()->email)->get();
    $totalRefers = $totalRefers->count();
    return $totalRefers;
}

// getting todays approved user

function todayApprovedWidthraw()
{
    $totalApproved = 0;
    $approvedBalance = WidthrawBalance::where('status','approved')->whereDay('created_at',now()->day)->get();
    foreach ($approvedBalance as $widthraw) {
        $totalApproved += $widthraw->widthraw_amount;
    }

    return $totalApproved;
}

// checking user Investment

function investment()
{
    $investment = levelFees::where('user_id',auth()->user()->id)->get();
    $totalInvestment = 0;
    foreach ($investment as $invest)
    {
        $level = $invest->level;
        $levelPrice = level::where('level',$level)->first();
        $totalInvestment += $levelPrice->invest;
    }
    return $totalInvestment;
}

function recived()
{
    $investment = levelFees::where('user_id',auth()->user()->id)->get();
    $totalInvestment = 0;
    foreach ($investment as $invest)
    {
        $level = $invest->level;
        $levelPrice = level::where('level',$level)->first();
        $totalInvestment += $levelPrice->totalProfit;
    }
    return $totalInvestment;
}


function participated()
{
    $participated = luckyPersons::get()->count();
    return $participated;
}

// function teamProfit()
// {
//     $investment = levelFees::where('status','unlock')->get();

//     // getting my user
//     $referal = $investment->referal;
//     if($referal != 'default')
//     {
//         $investment = levelFees::where('referal',$referal)->get();
//         $totalInvestment = 0;

//         foreach ($investment as $invest)
//         {
//             $level = $invest->level;
//             $levelPrice = level::where('level',$level)->first();
//             $totalInvestment += $levelPrice->totalProfit;
//         }

//         $profit = $totalInvestment * 5 /100;
//         return $profit;
//     }

// }


function teamProfit()
{
    $userTeamProfit = UserReferalCommission::where('id',auth()->user()->id)->where('status','given')->get();
    $countProfit = $userTeamProfit->amount->sum();
    return $countProfit;
}





