<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
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
        return view('admin.user.index',compact('users'));
    }

    public function pendingUsers()
    {
        $users = User::where('status','pending')->get();
        return view('admin.user.pending',compact('users'));
    }

    public function approvedUsers()
    {
        $users = User::where('status','approved')->get();
        return view('admin.user.approved',compact('users'));
    }

    public function rejectedUsers()
    {
        $users = User::where('status','rejected')->get();
        return view('admin.user.rejected',compact('users'));
    }

    public function makePending($id)
    {
        $user = User::find($id);
        $user->status = 'pending';
        $user->save();
        return redirect()->back()->with('success','User In Pending List');
    }

    public function makeApproved($id)
    {
        $user = User::find($id);
        $user->status = 'approved';
        $user->save();
        return redirect()->back()->with('success','User Approved successfully');
    }

    public function makeRejected($id)
    {
        $user = User::find($id);
        $user->status = 'rejected';
        $user->save();
        return redirect()->back()->with('success','User Rejected Successfully');
    }


}
