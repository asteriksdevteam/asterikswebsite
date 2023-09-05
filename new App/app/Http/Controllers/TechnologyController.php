<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technology;
use App\Models\TechCategory;
use Str;

class TechnologyController extends Controller
{
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tech = Technology::with('sliderImages','techCategory')->get();
        return view('admin.pages.tech.index',compact('tech'));
    }

    public function slider($id)
    {
        $slider = Technology::with('sliderImages')->find($id);
        return view('admin.pages.tech.slider-images',compact('slider'));
    }

    public function create()
    {
      $categories = TechCategory::all(); 
      return view('admin.pages.tech.new',compact('categories'));
    }
    public function store(Request $request)
    {
      
      $slider = new Technology();
      $slider->Name = $request->name;
      $slider->category_id = $request->category_id;
      $slider->save();

      return redirect()->route('tech');
    }
    public function edit($id)
    {
      $tech = Technology::find($id);
      $categories = TechCategory::all(); 
      return view('admin.pages.tech.edit',compact('tech','categories'));
    }
    public function update($id,Request $request)
    {
      $slider = Technology::find($id);
      $slider->Name = $request->name;
      $slider->category_id = $request->category_id;
      $slider->save();

      return redirect()->route('admin.tech')->with('success', 'Successfully Updated');
    }
}
