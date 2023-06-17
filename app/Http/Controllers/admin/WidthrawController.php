<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\user\WidthrawBalance;
use Illuminate\Http\Request;

class WidthrawController extends Controller
{
    public function index()
    {
        $widthraws = WidthrawBalance::get();
        return view('admin.widthraw.index',compact('widthraws'));
    }

    public function pending()
    {
        $widthraws = WidthrawBalance::where('status','pending')->get();
        return view('admin.widthraw.pending',compact('widthraws'));
    }

    public function approved()
    {
        $widthraws = WidthrawBalance::where('status','approved')->get();
        return view('admin.widthraw.approved',compact('widthraws'));
    }

    public function rejected()
    {
        $widthraws = WidthrawBalance::where('status','rejected')->get();
        return view('admin.widthraw.rejected',compact('widthraws'));
    }

    public function makePending($id)
    {
        $widthraw = WidthrawBalance::find($id);
        $widthraw->status = 'pending';
        $widthraw->save();
    }

    public function makeApprove($id)
    {
        $widthraw = WidthrawBalance::find($id);
        $widthraw->status = 'approved';
        $widthraw->save();
    }

    public function makeRejected($id)
    {
        $widthraw = WidthrawBalance::find($id);
        $widthraw->status = 'rejected';
        $widthraw->save();
    }

}
