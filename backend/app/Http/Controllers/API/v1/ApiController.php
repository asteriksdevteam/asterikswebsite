<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\WhatWeDo;
use App\Models\Blog;
use App\Models\Awards;
use App\Models\ContactUs;
use App\Models\ServiceCategory;
use App\Models\Meta;
use App\Models\Service;
use App\Models\Category;
use App\Models\Career;
use App\Models\RequestProposal;
use App\Models\RequestInterview;
use App\Models\SubCategory;
use App\Models\BlogPage;
use App\Models\Testimonial;
use App\Models\Slider;
use App\Models\ImageSlider;

class ApiController extends Controller
{
    public function getAboutUs()
    {
        $aboutUs =AboutUs::first();
        return $aboutUs;
    }

     public function getWhatWeDo()
    {
        $whatWeDo = WhatWeDo::first();
        return $whatWeDo;
    }

    public function getContactUs()
    {
        $contactUs = ContactUs::first();
        return $contactUs;
    } 
    public function getServices($cateId ,$subcateId)
    {
     // $cateId = $request->category;
      // $subcateId = $request->subcategory;
      $categories =ServiceCategory::get();
      $subcategories = SubCategory::with('getCategory')->get();
      $services =  Service::where('category_id',$cateId)->where('sub_category_id',$subcateId)->first();
      return $services;
    }  

    public function getCareer(Request $request)
      {
           $career = Career::first();
           return $career;
      }  

      public function getMetaDetail($page_slug)
      {
             $meta = Meta::where('page_slug',$page_slug)->first();
             return $meta;
      }
      public function getCategory(Request $request)
      {
          $category = Category::first();
          return $category;
      }

     public function getblog()
     {
        $blogs = Blog::with('category')->orderBy('id', 'desc')->get();
        return $blogs;
     }
     public function blogDetail($slug)
     {
        $blogs = Blog::with('category')->where('slug', $slug)->get();
        return $blogs;
     }
     public function getBlogPage()
     {
        $blogPage = BlogPage::first();
        return $blogPage;
     }

     public function getTestimonial()
     {
        $testimonial = Testimonial::get();
        return $testimonial;
     }
     public function getSlider($slug)
     {  

        $slider = Slider::with('sliderImages')->where('slug',$slug)->get();
        return $slider;
     }
      public function getImageSlider($slug)
     {
        $imageSlider = ImageSlider::where('slug',$slug)->get();
        return $imageSlider;
     }

     public function postServicesData(Request $request)
     {
        $requestdata = $requestArray;
        $requestProposal = new RequestProposal;
        $requestProposal->fill($requestdata);
        $requestProposal->save();
        if($requestProposal)
        {
           return  array('success'=>true);
        }else
        {
            return  array('success'=>false);
        }
     }  

     public function postInterviewData(Request $request)
     {
        $RequestInterview = $RequestInterview;
        $requestInterview = new RequestInterview;
        $requestInterview->fill($requestdata);
        $requestInterview->save();
        if($requestInterview){
            return  array('success'=>true);
        }else{
            return  array('success'=>false);
         }
    }

}
