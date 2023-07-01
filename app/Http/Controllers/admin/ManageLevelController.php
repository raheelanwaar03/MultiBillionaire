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
        $levelRequests = levelFees::where('status','pending')->get();
        return view('admin.level.index', compact('levelRequests'));
    }

    public function unlock($user_id)
    {
        $level = levelFees::where('user_id', $user_id)->first();
        $level->status = 'unlock';
        $level->save();
        $userLevel = $level->level;
        $user = User::find($user_id);
        $user->level = $userLevel;
        $user->save();
        return redirect()->back()->with('success', 'User Level Unlock Successfully');
    }

    public function unlocked()
    {
        $levelRequests = levelFees::where('status','unlock')->get();
        return view('admin.level.unlock',compact('levelRequests'));
    }

}
