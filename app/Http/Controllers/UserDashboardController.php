<?php

namespace App\Http\Controllers;

use App\Models\admin\task;
use App\Models\level;
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
        $users = User::where('referal',auth()->user()->email)->get();
        return view('LandingPage.user.team',compact('users'));
    }

    public function performTask()
    {
        $tasks = task::get();
        return view('LandingPage.user.task',compact('tasks'));
    }

    public function levels()
    {
        $levels = level::get();
        return view('LandingPage.user.levels',compact('levels'));
    }

    public function unlock($id)
    {
        $level = level::find($id);
        return view('LandingPage.user.fees',compact('level'));
    }


}
