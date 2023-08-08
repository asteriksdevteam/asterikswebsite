<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;
class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories =ServiceCategory::get();

        return view('service-category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service-category.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    if ($request->hasFile('image')) {
          $file  = request()->file('image');
          $category_image = trim(time(). "." .$file->getClientOriginalExtension());
          $file->move('uploads/service-category/', $category_image);
        }
      $category = new ServiceCategory();
      $category->category_image = $category_image;
      $category->name = $request->name;
      $category->save();
      return redirect()->route('service.category.index')->with('success', 'Successfully Added!!!');
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
        $categories = ServiceCategory::first();
        return view('service-category.new',compact('categories'));
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
        if ($request->hasFile('image')) {
          $file  = request()->file('image');
          $category_image = trim(time(). "." .$file->getClientOriginalExtension());
          $file->move('uploads/service-category/', $category_image);
        }else
        {
              $category =  ServiceCategory::find($id);
              $category_image = $category->category_image;
        }
          $category =  ServiceCategory::find($id);
          $category->category_image = $category_image;
          $category->name = $request->name;
          $category->save();
      return redirect()->route('service.category.index')->with('success', 'Successfully Added!!!');
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
