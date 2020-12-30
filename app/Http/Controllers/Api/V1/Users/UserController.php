<?php

namespace App\Http\Controllers\Api\V1\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    public function getAllUsers()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        if ($request->has('password'))
        {
            $passHash = Hash::make($request->password);
        }
        User::create(array_merge($request->except('password'), ['password' => $passHash]));
        return ['successes' => 'the user has been created'];
    }
}
