<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $userInfo = UserInfo::orderBy('id', 'desc')-> paginate(10);

        return view('dashboard.index', ['userInfo' => $userInfo]);
    }
}
