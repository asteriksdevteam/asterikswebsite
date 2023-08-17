<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WhatWeDo;
use Str;

class WhatWeDoController extends Controller
{
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $wwd = WhatWeDo::get();
        return view('pages.what-we-do.index',compact('wwd'));
    }

    public function edit(Request $request)
    {
      $wwd = WhatWeDo::first();
      return view('pages.what-we-do.edit',compact('wwd'));
    }
    public function update($id,Request $request)
    {
      $wwd = WhatWeDo::find($id);
      if ($request->hasFile('image_business')) {
        $file1  = request()->file('image_business');
        $image_business = trim('1'.''.time(). "." .$file1->getClientOriginalExtension());
        $file1->move('uploads/what-we-do/', $image_business);
        $wwd->business_idea_image = 'uploads/what-we-do/'.$image_business;
      }
      if ($request->hasFile('image_finance')) {
        $file2  = request()->file('image_finance');
        $image_finance = trim('2'.''.time(). "." .$file2->getClientOriginalExtension());
        $file2->move('uploads/what-we-do/', $image_finance);
        $wwd->finance_planning_image = 'uploads/what-we-do/'.$image_finance;
      }
      if ($request->hasFile('image_develop')) {
        $file3  = request()->file('image_develop');
        $image_develop = trim('3'.''.time(). "." .$file3->getClientOriginalExtension());
        $file3->move('uploads/what-we-do/', $image_develop);
        $wwd->develop_web_image = 'uploads/what-we-do/'.$image_develop;
      }
      if ($request->hasFile('image_market')) {
        $file4  = request()->file('image_market');
        $image_market = trim('4'.''.time(). "." .$file4->getClientOriginalExtension());
        $file4->move('uploads/what-we-do/', $image_market);
        $wwd->market_analysis_image = 'uploads/what-we-do/'.$image_market;
      }
      // $wwd->Name = $request->name;
      // $wwd->Slug = Str::slug($request->name);
      // $wwd->Heading = $request->heading;
      // $wwd->Description = $request->description;
      // $wwd->Sub_Heading = $request->subheading;
      // $wwd->Sub_Description = $request->subdescription;
      // $wwd->Status = 1;
      // $wwd->MetaTitle = $request->metatitle;
      $wwd->save();

      return redirect()->route('wwd.edit')->with('success', 'Successfully Updated');
    }
}
