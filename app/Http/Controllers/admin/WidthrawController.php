<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\WidthrawBalance;
use Illuminate\Http\Request;

class WidthrawController extends Controller
{
    public function index()
    {
        $widthraws = WidthrawBalance::get();
        return view('admin.widthraw.index', compact('widthraws'));
    }

    public function pending()
    {
        $widthraws = WidthrawBalance::where('status', 'pending')->get();
        return view('admin.widthraw.pending', compact('widthraws'));
    }

    public function approved()
    {
        $widthraws = WidthrawBalance::where('status', 'approved')->get();
        return view('admin.widthraw.approved', compact('widthraws'));
    }

    public function rejected()
    {
        $widthraws = WidthrawBalance::where('status', 'rejected')->get();
        return view('admin.widthraw.rejected', compact('widthraws'));
    }

    public function makePending($id)
    {
        $widthraw = WidthrawBalance::find($id);
        $widthraw->status = 'pending';
        $widthraw->save();
        return redirect()->back()->with('success','Widthraw is in pending list successfully');
    }

    public function makeApprove($id)
    {
        $widthraw = WidthrawBalance::find($id);
        $widthraw->status = 'approved';
        $widthraw->save();
        return redirect()->back()->with('success','Widthraw is approved successfully');
    }

    public function makeRejected($id)
    {
        $widthraw = WidthrawBalance::find($id);
        $widthraw->status = 'rejected';
        $widthraw->save();

        // Adding user balance again
        $user = User::where('id', $widthraw->user_id)->first();
        $totalBalance = $user->balance;
        $deductedBalance = $totalBalance + $widthraw->widthraw_amount;
        $user->balance = $deductedBalance;
        $user->save();

        return redirect()->back()->with('success','Widthraw is rejected successfully');
    }
}
