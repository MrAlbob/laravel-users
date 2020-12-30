<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{

    public function index()
    {

        $userInfo = UserInfo::paginate(10);

        return view('main.index', ['userInfo' => $userInfo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        UserInfo::create($request->all());
        return redirect()->back()->with('successes', 'The user is stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserInfo  $userInfo
     * @return \Illuminate\Http\Response
     */
    public function show(UserInfo $userInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserInfo  $userInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(UserInfo $userInfo)
    {
        //
    }


    public function update(Request $request)
    {
       $userInfo = UserInfo::find($request->id);
       $userInfo->name = $request->name;
       $userInfo->phone = $request->phone;
       $userInfo->id_ns = $request->id_ns;
       $userInfo->live = $request->live;
       $userInfo->save();
       return redirect()->back()->with('successes', 'The user is updated successfully');
    }

    public function updateForm($id)
    {
        $data = UserInfo::find($id);

        return view('dashboard.update', ['id' => $id, 'data' => $data]);
    }


    public function destroy($id)
    {
        UserInfo::destroy($id);
        return redirect()->back()->with('successes', 'The user id deleted successfully');
    }
}
