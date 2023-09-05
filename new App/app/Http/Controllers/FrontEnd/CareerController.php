<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Helper;


class CareerController extends Controller
{
    public function index() {
        $career = Helper::getCurlRequest('https://asteriksdigital.com/admin/api/getCareer');
        return view('career.index',compact('career'));

    }
    public function postServicesData(Request $request)
    {
     
       $requestdata = $request->all();
       $requestProposal = new RequestProposal;
       $requestProposal->fill($requestdata);
       $requestProposal->save();
       if($requestProposal)
       {
            return redirect()->back()->with('success','Request Sucessfully Submited.');
       }else
       {
           return redirect()->back()->with('success','Request Not Sucessfully Submited.');
       }
    
    }  
}
