<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Support\Str;
use File;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('category')->orderBy('id', 'desc')->get();
        return view('blog.index',compact('blogs'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('blog.new',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('sss');
        $blog              = new Blog();
        $blog->meta_title        = $request->meta_title;
        $blog->meta_tags        = $request->meta_tags;
        $blog->meta_description        = $request->meta_description;
        $blog->name        = $request->name;
        $blog->slug        = Str::slug($request->name, '-');
        $blog->sort        = $request->sort;
        $blog->category_id = $request->category_id;
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;
        $imageFile         = $request->file('image');
        $imageName         = time().$imageFile->getClientOriginalName();
        $imageFile->move('uploads/blog', $imageName);
        $blog->image       = $imageName;
        $thumbFile         = $request->file('thumb');
        $thumbName         = time().$thumbFile->getClientOriginalName();
        $thumbFile->move('uploads/blog/thumb', $thumbName);
        $blog->thumb       = $thumbName;
        $blog->status      = $request->status;
        $blog->save();
        return redirect()->route('blog.index');
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
         $categories = Category::get();
        $blog = Blog::with('category')->where('id',$id)->orderBy('id', 'desc')->first();
        return view('blog.new', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog , $id)
    {
        $currentImage = $blog->image;
        $currentThumb = $blog->thumb;

        if (request()->hasFile('image')) {
            $file      = request()->file('image');
            $name      =  time().$file->getClientOriginalName();
            $pathImage = $file->move('uploads/blog', $name);
        }
        if (request()->hasFile('thumb')) {
            $file      = request()->file('thumb');
            $name      =  time().$file->getClientOriginalName();
            $pathThumb = $file->move('uploads/blog/thumb', $name);
        }
        $blogU = $blog->update([
             'meta_title'       => $request->meta_title,
             'meta_tags '       => $request->meta_tags,
             'meta_description' => $request->meta_description,
            'name'        => $request->name,
            "slug"        => Str::slug($request->name, '-'),
            'category_id' => $request->category_id,
            'sort'        => $request->sort,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'image'       => isset($pathImage) ? $pathImage : $currentImage,
            'thumb'       => isset($pathThumb) ? $pathThumb : $currentThumb,
            'status'      => $request->status,
        ]);

   
        
        if (isset($pathImage)) {
            File::delete($currentImage);
        }
        if (isset($pathThumb)) {
            File::delete($currentThumb);
        }
        return redirect()->route('blog.index');
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
