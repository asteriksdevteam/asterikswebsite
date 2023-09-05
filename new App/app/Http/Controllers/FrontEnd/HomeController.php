<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Helper;
use App\Models\TechCategory;

class HomeController extends Controller
{
    public function index() {
        $slider1 = Helper::getCurlRequest('https://asteriksdigital.com/admin/api/getSlider/hero-banner-1');
        $slider2 = Helper::getCurlRequest('https://asteriksdigital.com/admin/api/getSlider/hero-banner-2');
        $slider3 = Helper::getCurlRequest('https://asteriksdigital.com/admin/api/getSlider/hero-banner-3');
        $trustedby = Helper::getCurlRequest('https://asteriksdigital.com/admin/api/getSlider/trusted-by');
        $whatWeDo = Helper::getCurlRequest('https://asteriksdigital.com/admin/api/getWhatWeDo');
        $about = Helper::getCurlRequest('https://asteriksdigital.com/admin/api/getSlider/short-about');
        $techs = Helper::getCurlRequest('https://asteriksdigital.com/admin/api/getTechnologies');
        $techCaregory = TechCategory::all();
        $awards = Helper::getCurlRequest('https://asteriksdigital.com/admin/api/getAwards');
        $testimonials = Helper::getCurlRequest('https://asteriksdigital.com/admin/api/getTestimonial');
        // dd($awards);
        return view('home.index',compact('slider1','slider2','slider3','trustedby','whatWeDo','about','techCaregory','techs','awards','testimonials'));
    }

   
}
