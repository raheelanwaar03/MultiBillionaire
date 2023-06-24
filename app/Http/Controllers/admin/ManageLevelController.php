<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\user\levelFees;
use Illuminate\Http\Request;

class ManageLevelController extends Controller
{
    public function index()
    {
        $levelRequests = levelFees::get();
        return view('admin.level.index',compact('levelRequests'));
    }
}
