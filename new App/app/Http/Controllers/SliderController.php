<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\ImageSlider;
use Str;

class SliderController extends Controller
{
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mainSection = Slider::with('sliderImages')->get();
        return view('admin.pages.slider.slider-page',compact('mainSection'));
    }

    public function slider($id)
    {
        $slider = Slider::with('sliderImages')->find($id);
        return view('admin.pages.slider.slider-images',compact('slider'));
    }

    public function create()
    {
      return view('admin.pages.slider.new');
    }
    public function store(Request $request)
    {
      
      $slider = new Slider();
      $slider->Name = $request->name;
      $slider->Slug = Str::slug($request->name);
      $slider->Heading = $request->heading;
      $slider->Description = $request->description;
      $slider->Status = $request->status;
      $slider->save();

      return redirect()->route('admin.slider-page');
    }
    public function edit($id)
    {
      $slider = Slider::find($id);
      return view('admin.pages.slider.edit',compact('slider'));
    }
    public function update($id,Request $request)
    {
      $slider = Slider::find($id);
      $slider->Name = $request->name;
      $slider->Slug = Str::slug($request->name);
      $slider->Heading = $request->heading;
      $slider->Description = $request->description;
      $slider->Status = $request->status;
      $slider->save();

      return redirect()->route('admin.slider-page')->with('success', 'Successfully Updated');
    }
}
