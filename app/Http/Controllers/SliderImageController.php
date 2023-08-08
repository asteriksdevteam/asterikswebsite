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
      $slider = Slider::all();
      $sliderImg = ImageSlider::find($id);
      return view('pages.sliderImage.edit',compact('sliderImg','slider'));
    }
    public function update($id,Request $request)
    {
      $slider = ImageSlider::find($id);
      if ($request->hasFile('image')) {
        $file  = request()->file('image');
        $SliderImage = trim(time(). "." .$file->getClientOriginalExtension());
        $file->move('uploads/slider/', $SliderImage);
        $slider->imagePath = 'uploads/slider/'.$SliderImage;
      }
      $slider->imageId = $request->imageid;
      $slider->imageAlt = $request->alt;
      $slider->save();

      return redirect()->route('slider.image.index')->with('success', 'Successfully Updated');
    }
    public function updateSlider($id,Request $request)
    {
      if ($request->hasFile('image_slider')) {
        $files  = request()->file('image_slider');
        foreach($files as $key => $file){
        $slider = new ImageSlider();
        $SliderImage = trim($key.time(). "." .$file->getClientOriginalExtension());
        $file->move('uploads/slider/', $SliderImage);
        $slider->imageId = $id;
        $slider->imagePath = 'uploads/slider/'.$SliderImage;
        $slider->save();
        }
      }
      return redirect()->back();
    }
    public function deleteSlider($id)
    {
      $slider = ImageSlider::find($id);
      $slider->delete();
      return redirect()->back();
    }
}
