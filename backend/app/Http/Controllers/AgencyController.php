<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agency;
use App\Models\SubCategory;
use Str;

class AgencyController extends Controller
{
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $agency = Agency::with('getCategory')->get();
        return view('service.agency.index',compact('agency'));
    }
    public function create(){
      $categories = SubCategory::all();
      return view('service.agency.create',compact('categories'));
    }
    public function store(Request $request)
    {
      $agency = new Agency();
     
      $agency->category_id = $request->category_id;
      $agency->heading = $request->name;
      $agency->save();

      return redirect()->route('agencys.index')->with('success', 'Successfully Updated');
    }

    public function edit($id)
    {
      $agency = Agency::find($id);
      $categories = SubCategory::all();
      return view('service.agency.edit',compact('agency','categories'));
    }
    public function update($id,Request $request)
    {
      $agency = Agency::find($id);
      $agency->category_id = $request->category_id;
      $agency->heading = $request->name;
      $agency->save();

      return redirect()->route('agencys.index')->with('success', 'Successfully Updated');
    }
}
