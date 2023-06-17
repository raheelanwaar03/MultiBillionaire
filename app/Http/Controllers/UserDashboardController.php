<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\user\WidthrawBalance;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function widthraw()
    {
        return view('LandingPage.user.widthraw.index');
    }

    public function widthrawRequest(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required',
            'password' => 'required',
            'wallet' => 'required',
        ]);

        if($validated['amount'] < 10)
        {
            return redirect()->back()->with('error','You cannot request widthraw less than 10$');
        }

        //  Checking user personal balance

        if ($validated['amount'] > auth()->user()->balance)
        {
            return redirect()->back()->with('error','You have not sufficient balance');
        }

        // Dedecting Widthrawal Fees and widthrawal amount from user personal balance

         $fees = $validated['amount'] * 10 / 100;
         $user = User::where('id',auth()->user()->id)->first();
         $userBalance = $user->balance;
         $dedectionAmount = $fees + $validated['amount'];
         $user->balance = $userBalance - $dedectionAmount;
         $user->save();

        $widthraw  = new WidthrawBalance();
        $widthraw->user_id = auth()->user()->id;
        $widthraw->amount = $validated['amount'];
        $widthraw->password = $validated['password'];
        $widthraw->wallet = $validated['wallet'];
        $widthraw->save();
        return redirect()->back()->with('success','You successfully requsted for Widthraw you will recive widthraw in working 20hrs');

    }



}
