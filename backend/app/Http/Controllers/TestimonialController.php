<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Str;

class TestimonialController extends Controller
{
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $testimonial = Testimonial::get();
        return view('pages.testimonial.index',compact('testimonial'));
    }
    public function create(){
      return view('pages.testimonial.create');
    }
    public function store(Request $request)
    {
      $testimonial = new Testimonial();
      if ($request->hasFile('image')) {
        $file  = request()->file('image');
        $SliderImage = trim(time(). "." .$file->getClientOriginalExtension());
        $file->move('uploads/awards/', $SliderImage);
        $testimonial->Image = 'uploads/awards/'.$SliderImage;
      }
      $testimonial->Name = $request->name;
      $testimonial->Description = 'Serveral selected clients, who already believe our service.';
      $testimonial->Message = $request->message;
      $testimonial->Status = 1;
      $testimonial->MetaTitle = $request->metatitle;
      $testimonial->save();

      return redirect()->route('testimonial.index')->with('success', 'Successfully Updated');
    }

    public function edit($id)
    {
      $testimonial = Testimonial::find($id);
      return view('pages.testimonial.edit',compact('testimonial'));
    }
    public function update($id,Request $request)
    {
      $testimonial = Testimonial::find($id);
      if ($request->hasFile('image')) {
        $file  = request()->file('image');
        $SliderImage = trim(time(). "." .$file->getClientOriginalExtension());
        $file->move('uploads/awards/', $SliderImage);
        $testimonial->Image = 'uploads/awards/'.$SliderImage;
      }
      $testimonial->Name = $request->name;
      $testimonial->Description = 'Serveral selected clients, who already believe our service.';
      $testimonial->Message = $request->message;
      $testimonial->Status = 1;
      // $testimonial->MetaTitle = $request->metatitle;
      $testimonial->save();

      return redirect()->route('testimonial.index')->with('success', 'Successfully Updated');
    }
}
