<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageSlider;
use App\Models\Slider;
use Str;

class SliderImageController extends Controller
{
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliderImage = ImageSlider::with('sliderName')->get();
        return view('pages.sliderImage.index',compact('sliderImage'));
    }

    public function create()
    {
      $slider = Slider::all();
      return view('pages.sliderImage.new',compact('slider'));
    }
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
          $file  = request()->file('image');
          $SliderImage = trim(time(). "." .$file->getClientOriginalExtension());
          $file->move('uploads/slider/', $SliderImage);
        }
      $slider = new ImageSlider();
      $slider->imageId = $request->imageid;
      $slider->imagePath = 'uploads/slider/'.$SliderImage;
      $slider->imageAlt = $request->alt;
      $slider->save();

      return redirect()->route('slider.image.index');
    }
    public function edit($id)
    {
      $slider = ImageSlider::find($id);
      return view('pages.sliderImage.edit',compact('slider'));
    }
    public function update($id,Request $request)
    {
      $slider = ImageSlider::find($id);
      $slider->Name = $request->name;
      $slider->Slug = Str::slug($request->name);
      $slider->Heading = $request->heading;
      $slider->Description = $request->description;
      $slider->MetaTitle = $request->metatitle;
      $slider->Status = $request->status;
      $slider->save();

      return redirect()->route('slider.image.index')->with('success', 'Successfully Updated');
    }
}
