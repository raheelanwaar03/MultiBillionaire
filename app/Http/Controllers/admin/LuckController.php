<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Luck;
use App\Models\luckyPersons;
use Illuminate\Http\Request;

class LuckController extends Controller
{
    public function add()
    {
        return view('admin.luck.add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => 'required',
        ]);

        $image = $validated['image'];
        $imageName = rand(11111,909999).'.'. $image->getClientOriginalExtension();
        $image->move(public_path('images'),$imageName);

        $luck = new Luck();
        $luck->title = $validated['title'];
        $luck->price = $validated['price'];
        $luck->image = $imageName;
        $luck->save();
        return redirect(route('Admin.All.Luck'))->with('success','Luck added successfully!');
    }

    public function index()
    {
        $lucks = Luck::get();
        return view('admin.luck.index',compact('lucks'));
    }


    public function delete($id)
    {
        $luck = Luck::find($id);
        $luck->delete();
        return redirect()->back()->with('success','Luck Deleted successfully');
    }

    public function allInvestors()
    {
        $users = luckyPersons::get();
        return view('admin.luck.allInvestor',compact('users'));
    }

    public function luckyPerson()
    {
        $luckyPerson = luckyPersons::get();
        return $luckyPerson;
    }


}
