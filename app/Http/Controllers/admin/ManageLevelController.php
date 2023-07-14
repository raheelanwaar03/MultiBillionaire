<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\level;
use App\Models\User;
use App\Models\user\levelFees;
use Illuminate\Http\Request;

class ManageLevelController extends Controller
{
    public function index()
    {
        $levelRequests = levelFees::where('status', 'pending')->get();
        return view('admin.level.index', compact('levelRequests'));
    }

    public function unlock($user_id)
    {
        $level = levelFees::where('user_id', $user_id)->first();
        $level->status = 'unlock';
        $level->save();
        // getting level investment
        $levelName = $level->level;
        $levelInvestment = Level::where('level', $levelName)->first();
        $levelInvestment = $levelInvestment->invest;
        $level_commission = $levelInvestment * 5 / 100;
        // Giving user new Level
        $userLevel = $level->level;
        $user = User::find($user_id);
        $user->level = $userLevel;
        $user->save();
        // fetching user referal
        $referal = $user->referal;
        if($referal != 'default')
        {
            $user = User::where('email', $referal)->first();
            $user->balance += $level_commission;
            $user->save();
        }

        return redirect()->back()->with('success', 'User Level Unlock Successfully');
    }

    public function unlocked()
    {
        $levelRequests = levelFees::where('status', 'unlock')->get();
        return view('admin.level.unlock', compact('levelRequests'));
    }

    public function rejected($id)
    {
        $level = levelFees::find($id);
        $level->status = 'rejected';
        $level->save();
        return redirect()->back()->with('success', 'User Level Rejected Successfully');

    }

    public function rejectedLevels()
    {
        $levelRequests = levelFees::where('status', 'rejected')->get();
        return view('admin.level.rejected', compact('levelRequests'));
    }


}
