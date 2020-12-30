<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Slider;
use App\Http\Requests\SliderRequest;

use Carbon\Carbon;

class SliderController extends Controller
{
    public function index()
    {
        return view('slider.create');
    }

    public function store(SliderRequest $request)
    {

        if ($request->has('image'))
        {
            $file = Carbon::now()->timestamp.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images'), $file);

            $slider = new Slider();
            $slider->title = $request->input('title');
            $slider->desc = $request->input('desc');
            $slider->image = '/images/'.$file;
            $slider->save();

            return redirect()->back()->with('success', 'the slider is created');
        }

    }
}
