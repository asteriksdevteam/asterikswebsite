<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Helper;
class AboutUsController extends Controller
{
   
    public function aboutUs() {
        
        $getAboutsData = Helper::getCurlRequest('https://asteriksdigital.com/admin/api/getAboutUs');

        return view('aboutus.index',compact('getAboutsData'));
        
    }
}
