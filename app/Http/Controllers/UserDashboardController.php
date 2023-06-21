<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\user\WidthrawBalance;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{

    public function myProfile()
    {
        return view('LandingPage.user.profile');
    }

    public function myFinance()
    {
        $widthraws = WidthrawBalance::get();
        return view('LandingPage.user.finance',compact('widthraws'));
    }

    public function myTeam()
    {
        $referals = User::where('referal',auth()->user()->email)->get();

        return view('LandingPage.user.team',compact('referals'));
    }


}
