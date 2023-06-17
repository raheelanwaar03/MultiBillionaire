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




}
