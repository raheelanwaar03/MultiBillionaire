<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\level;
use App\Models\User;
use App\Models\user\levelFees;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{


    public function index()
    {
        return view('admin.index');
    }

    public function allUsers()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function pendingUsers()
    {
        $users = User::where('status', 'pending')->get();
        return view('admin.user.pending', compact('users'));
    }

    public function approvedUsers()
    {
        $users = User::where('status', 'approved')->get();
        return view('admin.user.approved', compact('users'));
    }

    public function rejectedUsers()
    {
        $users = User::where('status', 'rejected')->get();
        return view('admin.user.rejected', compact('users'));
    }

    public function makePending($id)
    {
        $user = User::find($id);
        $user->status = 'pending';
        $user->save();
        return redirect()->back()->with('success', 'User In Pending List');
    }

    public function makeApproved($id)
    {
        $user = User::find($id);
        $user->status = 'approved';
        $user->save();
        return redirect()->back()->with('success', 'User Approved successfully');
    }

    public function makeRejected($id)
    {
        $user = User::find($id);
        $user->status = 'rejected';
        $user->save();
        return redirect()->back()->with('success', 'User Rejected Successfully');
    }

    // giving daily bounc

    public function dailyBounc()
    {

        $level = levelFees::where('status', 'unlock')->get();
        foreach ($level as $lel) {
            $levelName = $lel->level;
            $level = level::where('level', $levelName)->first();
            $dailyProfit = $level->dailyProfit;

            $user_id = $lel->user_id;
            $user = User::where('id', $user_id)->where('status', 'approved')->first();
            $user->balance += $dailyProfit;
            $user->save();
        }

        return redirect()->back()->with('success', 'Daily Profit Given To All User According to thier Unlock Levels');
    }

    public function lockUser()
    {
        // Get the current time.
        $current_time = Carbon::now();
        // Get the 45 days older time.
        $older_time = $current_time->subDays(45);
        // Get all the accounts that were created before the 45 days older time.
        $levels = levelFees::where('created_at', '<', $older_time)->where('status','unlock')->get();

        foreach($levels as $level)
        {
            $levelId = $level->id;
            $lockLevel = levelFees::where('id',$levelId)->first();
            $lockLevel->status = 'locked';
            $lockLevel->save();
        }

        return redirect()->back()->with('success','All Old Levels are Locked Now!');

    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
    }

    public function updateUser(Request $request,$id)
    {
        $user = User::find($id);
        $user->level = $request->level;
        $user->balance = $request->balance;
        $user->save();
        return redirect()->back()->with('success','User details updated successfully');
    }


}
