<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\BlogPage;

class BlogPageController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $blogPage = BlogPage::first();

        // dd($blogPage );

        return view('admin.blog.add-blog-page',compact('blogPage'));

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        //

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        //

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

        //

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


        $requestdata = $request->except(['submit_form','_token']);
         if ($request->hasFile('work_image')) {
          $file  = request()->file('work_image');
          $SliderImage = trim(time(). "." .$file->getClientOriginalExtension());
          $file->move('public/uploads/blogpage/', $SliderImage);
        }else
        {
          $blogPage =   BlogPage::find($request->id);
          $SliderImage = $blogPage->work_image;
        }
      
        $requestdata['work_image'] = $SliderImage;
        // $requestdata = $requestArray;
     
        $blogPage =   BlogPage::firstOrNew(['id'=>$id]);
        $blogPage->fill($requestdata);
        $blogPage->save();
          
        return  redirect()->route('admin.blog-page.index');

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

