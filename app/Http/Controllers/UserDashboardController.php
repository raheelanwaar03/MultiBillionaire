<?php

namespace App\Http\Controllers;

use App\Models\admin\task;
use App\Models\level;
use App\Models\User;
use App\Models\user\levelFees;
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

    public function allMembers()
    {
        $users = User::where('referal',auth()->user()->email)->get();
        return view('landingPage.user.members',compact('users'));
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

    public function levelFees(Request $request,$id)
    {
        $validated = $request->validate([
            'trxId' => 'required',
            'img' => 'required',
        ]);

        $level = level::find($id);
        $levelName = $level->level;

        $image = $validated['img'];
        $imageName = rand(111111,99999). '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/'),$imageName);

        // save into database

        $levelFees = new levelFees();
        $levelFees->user_id = auth()->user()->id;
        $levelFees->user_name = auth()->user()->name;
        $levelFees->level = $levelName;
        $levelFees->trxId = $validated['trxId'];
        $levelFees->img = $imageName;
        $levelFees->save();
        return redirect()->route('LandingPage')->with('success','Your request has been submit.We will unlock your level after verification');
    }

    public function record()
    {
        $records = levelFees::where('user_id',auth()->user()->id)->get();
        return view('LandingPage.user.invesment',compact('records'));
    }


}
