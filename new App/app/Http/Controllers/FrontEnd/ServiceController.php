<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Helper;
use App\Models\RequestProposal;
use App\Models\RequestInterview;
class ServiceController extends Controller
{
   public function services(){

     
    }

     public function getServicesBySlug($catSlug,$subCateSlug) {

        $getServicesBySlug = Helper::getCurlRequest('https://asteriksdigital.com/admin/api/getServicesbyslug/'.$catSlug.'/'.$subCateSlug);
        $getServices = $getServicesBySlug[0]['sub_category'][0]['get_services'];
        return view('services.index',compact('getServicesBySlug','getServices'));
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

    public function postInterviewData(Request $request)
    {
        $requestdata = $request->all();
        $requestInterview = new RequestInterview;
        $requestInterview->fill($requestdata);
        $requestInterview->save();
        if($requestInterview){
          return redirect()->back()->with('Request Sucessfully Submited.');
        }else{
          return redirect()->back()->with('Request Not Sucessfully Submited.');
        }
   }

}
