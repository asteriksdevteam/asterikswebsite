<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Helper;
class BlogController extends Controller
{
    public function getBlog()  {
      $getBlog =  Helper::getCurlRequest('https://asteriksdigital.com/admin/api/getblog');
      $getCategory= Helper::getCurlRequest('https://asteriksdigital.com/admin/api/getCategory');
      $getBlogPage =Helper::getCurlRequest('https://asteriksdigital.com/admin/api/getBlogPage');
      return view('blog.blog',compact('getBlog','getCategory','getBlogPage'));
  
    }

    function getBlogdetail($slug)  {
    
        $getBlogPageDetail = Helper::getCurlRequest('https://asteriksdigital.com/admin/api/blogDetail/'.$slug);
        
        return view('blog.blog-detail',compact('getBlogPageDetail'));
    }
}
