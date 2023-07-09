<?php

namespace App\Http\Controllers;

use App\Models\admin\Luck;
use App\Models\admin\task;
use App\Models\level;
use App\Models\luckyPersons;
use App\Models\User;
use App\Models\user\levelFees;
use App\Models\user\vistors;
use App\Models\user\WidthrawBalance;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{

    public function myProfile()
    {
        return view('LandingPage.user.profile');
    }

    public function myFinance()
    {
        $widthraws = WidthrawBalance::where('user_id', auth()->user()->id)->get();
        return view('LandingPage.user.finance', compact('widthraws'));
    }

    public function myTeam()
    {
        $users = User::where('referal', auth()->user()->email)->get();
        return view('LandingPage.user.team', compact('users'));
    }

    public function allMembers()
    {
        $users = User::where('referal', auth()->user()->email)->get();
        return view('LandingPage.user.members', compact('users'));
    }

    public function performTask()
    {
        $currentTime = Carbon::now('America/New_York')->format('g:i:s A');
        $tasks = task::where('level', auth()->user()->level)->get();
        return view('LandingPage.user.task', compact('tasks','currentTime'));
    }

    public function levels()
    {
        $levels = level::get();
        return view('LandingPage.user.levels', compact('levels'));
    }

    public function unlock($id)
    {
        $level = level::find($id);
        return view('LandingPage.user.fees', compact('level'));
    }

    public function levelFees(Request $request, $id)
    {
        $validated = $request->validate([
            'trxId' => 'required',
            'img' => 'required',
        ]);

        $level = level::find($id);
        $levelName = $level->level;

        $image = $validated['img'];
        $imageName = rand(111111, 99999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/'), $imageName);

        // save into database

        $levelFees = new levelFees();
        $levelFees->user_id = auth()->user()->id;
        $levelFees->level_id = $id;
        $levelFees->user_name = auth()->user()->name;
        $levelFees->level = $levelName;
        $levelFees->trxId = $validated['trxId'];
        $levelFees->img = $imageName;
        $levelFees->save();
        return redirect()->route('LandingPage')->with('success', 'Your request has been submit.We will unlock your level after verification');
    }

    public function record()
    {
        $records = levelFees::where('user_id', auth()->user()->id)->get();
        return view('LandingPage.user.invesment', compact('records'));
    }

    public function changePin()
    {
        return view('LandingPage.user.changePin');
    }

    public function updatePin(Request $request)
    {
        $validated = $request->validate([
            'oldPin' => 'required',
            'newPin' => 'required',
            'pin_confirmation' => 'required',
        ]);

        $user = User::where('id', auth()->user()->id)->first();
        $user_old_pin = $user->pin;
        // return $user_old_pin;

        if ($user_old_pin != $validated['oldPin']) {
            return redirect()->back()->with('error', 'Your old pin is not matched!');
        }

        // if ($user_old_pin = $validated['newPin']) {
        //     return redirect()->back()->with('error', 'Please use a different pin to your older pin!');
        // }

        if ($validated['newPin'] != $validated['pin_confirmation']) {
            return redirect()->back()->with('error', 'Your new pin is not matched');
        }

        $user->pin = $validated['pin_confirmation'];
        $user->save();
        return redirect()->back()->with('success', 'Security Pin Updated successfully');
    }

    public function doTask($id)
    {
        $task = task::find($id);
        $commission = $task->price;

        // Storing in vistors

        $vistor = vistors::where('user_id', auth()->user()->id)->where('product_id', $id)->whereDate('created_at', '=', Carbon::today())->first();

        if (!$vistor) {
            $vistor = new vistors();
            $vistor->user_id = auth()->user()->id;
            $vistor->product_id = $id;
            $vistor->save();
            // giving reward

            $user = User::where('id', auth()->user()->id)->first();
            $user->balance += $commission;
            $user->save();
            return redirect()->back()->with('success', 'Task compeleted successfully');
        }

        return redirect()->back()->with('error', 'You have been compeleted this task before!');
    }

    public function luck()
    {
        $luck = Luck::first();
        $currentDate = Carbon::now();
        $lucks = Luck::get();
        return view('LandingPage.user.luck', compact('lucks', 'luck', 'currentDate'));
    }

    public function tryLuck($id)
    {
        $luck = Luck::find($id);
        return view('LandingPage.user.luckFees', compact('luck'));
    }

    public function winer()
    {
        $user = luckyPersons::where('status', 'winner')->first();
        $luck_id = $user->luck_id;
        $luck = luck::where('id', $luck_id)->first();
        return view('LandingPage.user.winer', compact('user', 'luck'));
    }

    public function luckyInvestors(Request $request, $id)
    {
        $validated = $request->validate([
            'trx_id' => 'required',
            'image' => 'required'
        ]);

        $image = $validated['image'];
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $luckyPerson = new luckyPersons();
        $luckyPerson->user_id = auth()->user()->id;
        $luckyPerson->name = auth()->user()->name;
        $luckyPerson->email = auth()->user()->email;
        $luckyPerson->luck_id = $id;
        $luckyPerson->trx_id = $validated['trx_id'];
        $luckyPerson->image = $image_name;
        $luckyPerson->save();

        return redirect()->back()->with('success', 'You have been participated in this campaign successfully!');
    }
}
