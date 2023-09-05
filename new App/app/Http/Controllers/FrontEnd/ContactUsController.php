<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Helper;


class ContactUsController extends Controller
{
    public function index() {
        $contact = Helper::getCurlRequest('https://asteriksdigital.com/admin/api/getContactUs');
        return view('contactus.index',compact('contact'));

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
