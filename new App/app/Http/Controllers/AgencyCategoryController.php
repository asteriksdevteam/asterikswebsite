<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgencyCategory;
use App\Models\SubCategory;
use Str;

class AgencyCategoryController extends Controller
{
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $agency = AgencyCategory::with('getCategory')->get();
        return view('admin.service.agency-category.index',compact('agency'));
    }
    public function create(){
      $categories = SubCategory::all();
      return view('admin.service.agency-category.create',compact('categories'));
    }
    public function store(Request $request)
    {
      $agency = new AgencyCategory();
     
      $agency->category_id = $request->category_id;
      $agency->name = $request->name;
      $agency->save();

      return redirect()->route('agency.index')->with('success', 'Successfully Updated');
    }

    public function edit($id)
    {
      $agency = AgencyCategory::find($id);
      $categories = SubCategory::all();
      return view('admin.service.agency-category.edit',compact('agency','categories'));
    }
    public function update($id,Request $request)
    {
      $agency = AgencyCategory::find($id);
      $agency->category_id = $request->category_id;
      $agency->name = $request->name;
      $agency->save();

      return redirect()->route('admin.agency.index')->with('success', 'Successfully Updated');
    }
}
