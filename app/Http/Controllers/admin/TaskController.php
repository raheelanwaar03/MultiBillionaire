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
            'rate' => 'required',
            'level' => 'required',
            'img' => 'required',
        ]);

        $image = $validated['img'];
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $task = new task();
        $task->title = $validated['title'];
        $task->price = $validated['price'];
        $task->rate = $validated['rate'];
        $task->level = $validated['level'];
        $task->img = $imageName;
        $task->save();
        return redirect()->route('Admin.All.Task')->with('success','Task added successfully');
    }

    public function allTask()
    {
        $tasks = task::get();
        // return $tasks;
        return view('admin.task.index',compact('tasks'));
    }

    public function delete($id)
    {
        $task = task::find($id);
        $task->delete();
        return redirect()->back()->with('success','Task Deleted successfully');
    }



}
