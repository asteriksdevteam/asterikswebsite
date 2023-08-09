<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\SubCategory;
use App\Models\Service;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $isService = false;
        $categories =ServiceCategory::get();
        $subcategories = SubCategory::with('getCategory')->get();

        return view('service.index',compact('isService','categories','subcategories'));
    }

    public function getSubcategory(Request $request) {
     return SubCategory::with('getCategory')->where('category_id',$request->categoryId)->get(); 
    }

    public function getData(Request $request) {
      $isService = true;
      $cateId = $request->category;
      $subcateId = $request->subcategory;
      $categories =ServiceCategory::get();
      $subcategories = SubCategory::with('getCategory')->get();
      $services =  Service::where('category_id',$request->category)->where('sub_category_id',$request->subcategory)->first();
      return view('service.index',compact('isService','services','cateId','subcateId','categories','subcategories'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        if ($request->hasFile('header_image')) {
          $file  = request()->file('header_image');
          $header_image = trim('header_image'.time(). "." .$file->getClientOriginalExtension());
          $file->move('uploads/service/', $header_image);
          $header_image = 'uploads/service/'.$header_image;

        }
        if ($request->hasFile('box1image')) {
          $file  = request()->file('box1image');
          $box1image = trim('box1image'.time(). "." .$file->getClientOriginalExtension());
          $file->move('uploads/service/', $box1image);
          $box1image = 'uploads/service/'.$box1image;

        }
        if ($request->hasFile('box2image')) {
          $file  = request()->file('box2image');
          $box2image = trim('box2image'.time(). "." .$file->getClientOriginalExtension());
          $file->move('uploads/service/', $box2image);
          $box2image = 'uploads/service/'.$box2image;

        }
        if ($request->hasFile('box3image')) {
          $file  = request()->file('box3image');
          $box3image = trim('box3image'.time(). "." .$file->getClientOriginalExtension());
          $file->move('uploads/service/', $box3image);
          $box3image = 'uploads/service/'.$box3image;

        }
        if ($request->hasFile('box4image')) {
          $file  = request()->file('box4image');
          $box4image = trim('box4image'.time(). "." .$file->getClientOriginalExtension());
          $file->move('uploads/service/', $box4image);
          $box4image = 'uploads/service/'.$box4image;

        }
        if ($request->hasFile('portfolioimage')) {
          $file  = request()->file('portfolioimage');
          $portfolioimage = trim('portfolioimage'.time(). "." .$file->getClientOriginalExtension());
          $file->move('uploads/service/', $portfolioimage);
          $portfolioimage = 'uploads/service/'.$portfolioimage;

        }
        if ($request->hasFile('portfoliologo')) {
          $file  = request()->file('portfoliologo');
          $portfoliologo = trim('portfoliologo'.time(). "." .$file->getClientOriginalExtension());
          $file->move('uploads/service/', $portfoliologo);
          $portfoliologo = 'uploads/service/'.$portfoliologo;

        }
        if ($request->hasFile('chooseimage')) {
          $file  = request()->file('chooseimage');
          $chooseimage = trim('chooseimage'.time(). "." .$file->getClientOriginalExtension());
          $file->move('uploads/service/', $chooseimage);
          $chooseimage = 'uploads/service/'.$chooseimage;
        }
        if ($request->hasFile('tab1image')) {
          $file  = request()->file('tab1image');
          $tab1_image = trim('tab1image'.time(). "." .$file->getClientOriginalExtension());
          $file->move('uploads/service/', $tab1_image);
          $tab1_image = 'uploads/service/'.$tab1_image;
        }
        if ($request->hasFile('tab2image')) {
          $file  = request()->file('tab2image');
          $tab2_image = trim('tab2image'.time(). "." .$file->getClientOriginalExtension());
          $file->move('uploads/service/', $tab2_image);
          $tab2_image = 'uploads/service/'.$tab2_image;
        }
        if ($request->hasFile('tab3image')) {
          $file  = request()->file('tab3image');
          $tab3_image = trim('tab3image'.time(). "." .$file->getClientOriginalExtension());
          $file->move('uploads/service/', $tab3_image);
          $tab3_image = 'uploads/service/'.$tab3_image;
        }
        if ($request->hasFile('tab4image')) {
          $file  = request()->file('tab4image');
          $tab4_image = trim('tab4image'.time(). "." .$file->getClientOriginalExtension());
          $file->move('uploads/service/', $tab4_image);
          $tab4_image = 'uploads/service/'.$tab4_image;
        }
        if ($request->hasFile('tab5image')) {
          $file  = request()->file('tab5image');
          $tab5_image = trim('tab5image'.time(). "." .$file->getClientOriginalExtension());
          $file->move('uploads/service/', $tab5_image);
          $tab5_image = 'uploads/service/'.$tab5_image;
        }
      $serviceID = $request->service_id;
      if($serviceID){
      $service = Service::find($serviceID);
      $service->main_heading = @$request->mainheading;
      $service->main_desc = @$request->maindescription;
      if ($request->hasFile('header_image'))
      $service->header_image = @$header_image;
      $service->service_heading = @$request->serviceheading;
      $service->service_desc = @$request->servicedesc;
      $service->box1_heading = @$request->box1heading;
      $service->box1_desc = @$request->box1desc;
      if ($request->hasFile('box1image'))
      $service->box1_image = @$box1image;
      $service->box2_heading = @$request->box2heading;
      $service->box2_desc = @$request->box2desc;
      if ($request->hasFile('box2image'))
      $service->box2_image = @$box2image;
      $service->box3_heading = @$request->box3heading;
      $service->box3_desc = @$request->box3desc;
      if ($request->hasFile('box3image'))
      $service->box3_image = @$box3image;
      $service->box4_heading = @$request->box4heading;
      $service->box4_desc = @$request->box4desc;
      if ($request->hasFile('box4image'))
      $service->box4_image = @$box4image;
      if ($request->hasFile('tab1image'))
      $service->tab1_image = @$tab1_image;
      if ($request->hasFile('tab2image'))
      $service->tab2_image = @$tab2_image;
      if ($request->hasFile('tab3image'))
      $service->tab3_image = @$tab3_image;
      if ($request->hasFile('tab4image'))
      $service->tab4_image = @$tab4_image;
      if ($request->hasFile('tab5image'))
      $service->tab5_image = @$tab5_image;
      $service->tab1 = @$request->tab1;
      $service->tab2 = @$request->tab2;
      $service->tab3 = @$request->tab3;
      $service->tab4 = @$request->tab4;
      $service->tab5 = @$request->tab5;
      $service->tab1_heading = @$request->tab1heading;
      $service->tab2_heading = @$request->tab2heading;
      $service->tab3_heading = @$request->tab3heading;
      $service->tab4_heading = @$request->tab4heading;
      $service->tab5_heading = @$request->tab5heading;
      $service->tab1_desc = @$request->tab1desc;
      $service->tab2_desc= @$request->tab2desc;
      $service->tab3_desc = @$request->tab3desc;
      $service->tab4_desc = @$request->tab4desc;
      $service->tab5_desc = @$request->tab5desc;
      $service->portfolio_heading = @$request->portfolioheading;
      $service->portfolio_desc = @$request->portfoliodesc;
      if ($request->hasFile('portfolioimage'))
      $service->portfolio_image = @$portfolioimage;
      if ($request->hasFile('portfoliologo'))
      $service->portfolio_logo = @$portfoliologo;
      $service->company_heading = @$request->companyheading;
      $service->company_desc = @$request->companydesc;
      $service->choose_heading = @$request->chooseheading;
      $service->choose_desc = @$request->choosedesc;
      if ($request->hasFile('chooseimage'))
      $service->choose_image = @$chooseimage;
      $service->process_heading = @$request->processheading;
      $service->process_desc = @$request->processdesc;
      $service->p1_heading = @$request->p1heading;
      $service->p1_desc = @$request->p1desc;
      $service->p2_heading = @$request->p2heading;
      $service->p2_desc = @$request->p2desc;
      $service->p3_heading = @$request->p3heading;
      $service->p3_desc = @$request->p3desc;
      $service->category_id = @$request->cateId;
      $service->sub_category_id = @$request->subcateId;
      $service->save();
      return redirect()->back()->with('success', 'Successfully Update!!!');
      }else{
      $service = new Service();
      $service->main_heading = @$request->mainheading;
      $service->main_desc = @$request->maindescription;
      $service->header_image = @$header_image;
      $service->service_heading = @$request->serviceheading;
      $service->service_desc = @$request->servicedesc;
      $service->box1_heading = @$request->box1heading;
      $service->box1_desc = @$request->box1desc;
      $service->box1_image = @$box1image;
      $service->box2_heading = @$request->box2heading;
      $service->box2_desc = @$request->box2desc;
      $service->box2_image = @$box2image;
      $service->box3_heading = @$request->box3heading;
      $service->box3_desc = @$request->box3desc;
      $service->box3_image = @$box3image;
      $service->box4_heading = @$request->box4heading;
      $service->box4_desc = @$request->box4desc;
      $service->box4_image = @$box4image;
      $service->tab1 = @$request->tab1;
      $service->tab2 = @$request->tab2;
      $service->tab3 = @$request->tab3;
      $service->tab4 = @$request->tab4;
      $service->tab5 = @$request->tab5;
      $service->tab1_heading = @$request->tab1heading;
      $service->tab2_heading = @$request->tab2heading;
      $service->tab3_heading = @$request->tab3heading;
      $service->tab4_heading = @$request->tab4heading;
      $service->tab5_heading = @$request->tab5heading;
      $service->tab1_desc = @$request->tab1desc;
      $service->tab2_desc= @$request->tab2desc;
      $service->tab3_desc = @$request->tab3desc;
      $service->tab4_desc = @$request->tab4desc;
      $service->tab5_desc = @$request->tab5desc;
      $service->tab1_image = @$tab1_image;
      $service->tab2_image = @$tab2_image;
      $service->tab3_image = @$tab3_image;
      $service->tab4_image = @$tab4_image;
      $service->tab5_image = @$tab5_image;

      $service->portfolio_heading = @$request->portfolioheading;
      $service->portfolio_desc = @$request->portfoliodesc;
      $service->portfolio_image = @$portfolioimage;
      $service->portfolio_logo = @$portfoliologo;
      $service->company_heading = @$request->companyheading;
      $service->company_desc = @$request->companydesc;
      $service->choose_heading = @$request->chooseheading;
      $service->choose_desc = @$request->choosedesc;
      $service->choose_image = @$chooseimage;
      $service->process_heading = @$request->processheading;
      $service->process_desc = @$request->processdesc;
      $service->p1_heading = @$request->p1heading;
      $service->p1_desc = @$request->p1desc;
      $service->p2_heading = @$request->p2heading;
      $service->p2_desc = @$request->p2desc;
      $service->p3_heading = @$request->p3heading;
      $service->p3_desc = @$request->p3desc;
      $service->category_id = @$request->cateId;
      $service->sub_category_id = @$request->subcateId;
      $service->save();
      return redirect()->back()->with('success', 'Successfully Added!!!');
      }
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
