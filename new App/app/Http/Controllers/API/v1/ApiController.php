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
use App\Models\Technology;
use App\Models\Faq;
use App\Models\PrivacyPolicy;
use App\Models\TermAndCondition;

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
      $s=ServiceCategory::with('subCategory','subCategory.getServices')->get();
      $services =  Service::where('category_id',$cateId)->where('sub_category_id',$subcateId)->first()->toArray();
      array_push($services,$subcategories);
      $services = json_encode($services,true);
      return $s;
    }  

    public function getServicesBySlug($cateSlug ,$subcateSlug)
    {
     // $cateId = $request->category;
      // $subcateId = $request->subcategory;
      $categories =ServiceCategory::get();
      $subcategories = SubCategory::with('getCategory')->get();
      $s=ServiceCategory::with(['subCategory'=>function($q)use($subcateSlug){
         $q->with('getServices')->where('slug',$subcateSlug);
      }])->where('slug',$cateSlug)->get();

      // $services =  Service::where('category_id',$cateId)->where('sub_category_id',$subcateId)->first()->toArray();
      // array_push($services,$subcategories);
      // $services = json_encode($services,true);
      return $s;
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
          $category = Category::get();
          return $category;
      }
      public function getCategoryBySubCategory(Request $request)
      {
          $getcategorybySubcatgory = ServiceCategory::with('subCategory')->get();
          return $getcategorybySubcatgory;
      }
     public function getblog()
     {
        $blogs = Blog::with('category')->orderBy('id', 'desc')->get();
        return $blogs;
     }
     public function blogDetail($slug)
     {
      
        $blogs = Blog::with('category')->where('slug', $slug)->first();
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
     public function getTechnologies()
     {  
        $tech = Technology::with('sliderImages','techCategory')->get();
        return $tech;
     }
     public function getAwards()
     {  
        $awards = Awards::get();
        return $awards;
     }
     public function getFaqs()
     {  
        $faqspage = Faq::select('title','description')->first();
        $faqs = Faq::select('question','answer')->get();
        $faqsArray=array('page_detail'=>$faqspage,'questionans'=> $faqs);
        return $faqsArray;
     }
     public function getPrivacyPolicy()
     {  
        $privacyPolicy = PrivacyPolicy::first();
        return $privacyPolicy;
     }
     public function getTermAndCondition() {
      $termAndCondition = TermAndCondition::first();
      return $termAndCondition;
     }

     public function postServicesData(Request $request)
     {
        $requestdata = $request->all();
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
         $requestdata = $request->all();
      //   $RequestInterview = $RequestInterview;
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
