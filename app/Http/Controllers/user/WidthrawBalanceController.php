<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\WidthrawBalance;
use Illuminate\Http\Request;

class WidthrawBalanceController extends Controller
{
    public function widthraw()
    {
        return view('LandingPage.user.widthraw.index');
    }

    public function widthrawRequest(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'wallet' => 'required',
            'pin' => 'required',
        ]);
        //  Checking user personal balance

        if ($validated['amount'] > auth()->user()->balance) {
            return redirect()->back()->with('error', 'You have not sufficient balance');
        }
        // checking user balance null or not
        if (auth()->user()->balance = null) {
            return redirect()->back()->with('error', 'Your account is empty');
        }

         // checking user 10 $
        if ($validated['amount'] <= 10) {
            return redirect()->back()->with('error', 'You can not widthrawal less than 10$');
        }


        $user = User::where('id', auth()->user()->id)->first();
        // checking user pin
        $pin = $user->pin;
        if($pin != $validated['pin']){
            return redirect()->back()->with('error','Please Enter correct Pin');
        }
        // Dedecting user balance
        $user = User::where('id',auth()->user()->id)->first();
        $userBalance = $user->balance;
        $userBalance = $userBalance - $validated['amount'];
        $user->balance = $userBalance;
        $user->save();

        $widthraw  = new WidthrawBalance();
        $widthraw->user_id = auth()->user()->id;
        $widthraw->name = $validated['name'];
        $widthraw->amount = $validated['amount'];
        $widthraw->wallet = $validated['wallet'];
        $widthraw->save();
        return redirect()->back()->with('success', 'You successfully requsted for Widthraw you will recive widthraw in working 20 hrs');
    }
}
