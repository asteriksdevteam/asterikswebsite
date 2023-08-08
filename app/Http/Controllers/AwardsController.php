<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Awards;
use Str;

class AwardsController extends Controller
{
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $awards = Awards::get();
        return view('pages.awards.index',compact('awards'));
    }
    public function create(){
      return view('pages.awards.create');
    }
    public function store(Request $request)
    {
      $awards = new Awards();
      if ($request->hasFile('image')) {
        $file  = request()->file('image');
        $SliderImage = trim(time(). "." .$file->getClientOriginalExtension());
        $file->move('uploads/awards/', $SliderImage);
        $awards->Image = 'uploads/awards/'.$SliderImage;
      }
      $awards->Heading = $request->heading;
      $awards->Description = $request->description;
      $awards->Status = 1;
      $awards->MetaTitle = $request->metatitle;
      $awards->save();

      return redirect()->route('award.index')->with('success', 'Successfully Updated');
    }

    public function edit($id)
    {
      $awards = Awards::find($id);
      return view('pages.awards.edit',compact('awards'));
    }
    public function update($id,Request $request)
    {
      $awards = Awards::find($id);
      if ($request->hasFile('image')) {
        $file  = request()->file('image');
        $SliderImage = trim(time(). "." .$file->getClientOriginalExtension());
        $file->move('uploads/awards/', $SliderImage);
        $awards->Image = 'uploads/awards/'.$SliderImage;
      }
      $awards->Heading = $request->heading;
      $awards->Description = $request->description;
      $awards->Status = 1;
      // $awards->MetaTitle = $request->metatitle;
      $awards->save();

      return redirect()->route('award.index')->with('success', 'Successfully Updated');
    }
}
