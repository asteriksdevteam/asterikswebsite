<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutus=AboutUs::first();
        // dd($aboutus);
        return view('aboutus.new',compact('aboutus'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
        $requestArray = $request->except(['submit_form','_token']);
        $SliderImage="";
        if ($request->hasFile('work_image')) {
          $file  = request()->file('work_image');
          $SliderImage = trim(time(). "." .$file->getClientOriginalExtension());
          $file->move('uploads/aboutus/', $SliderImage);
        }else
        {
          $aboutUs =   AboutUs::find($request->id);
          $SliderImage = $aboutUs->work_image;
        }
        $requestdata = $requestArray;
        $requestdata['work_image'] = $SliderImage;
        $aboutUs =   AboutUs::find($request->id);
        $aboutUs->fill($requestdata);
        $aboutUs->save();
        return  redirect()->route('about-us');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
