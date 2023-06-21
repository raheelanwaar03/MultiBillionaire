<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('admin.task.add');
    }

    public function add(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'commission' => 'required',
            'rate' => 'required',
            'img' => 'required',
        ]);

        $image = $validated['img'];
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $image);

        $task = new task();
        $task->title = $validated['title'];
        $task->price = $validated['price'];
        $task->commission = $validated['commission'];
        $task->rate = $validated['rate'];
        $task->img = $imageName;
        return redirect()->back()->with('success','Task added successfully');
    }
}
