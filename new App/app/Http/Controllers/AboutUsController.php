<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\AboutUs;



class AboutUsController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $aboutus=AboutUs::first();

        // dd($aboutus);

        return view('admin.aboutus.new',compact('aboutus'));

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
        $requestArray = $request->except(['submit_form','_token']);
        $SliderImage="";
        if ($request->hasFile('work_image')) {
          $file  = request()->file('work_image');
          $SliderImage = 'uploads/work/work_image'.trim(time(). "." .$file->getClientOriginalExtension());
          $file->move('public/uploads/work/', $SliderImage);
        }else
        {
          $aboutUs =   AboutUs::find($request->id);
          $SliderImage = $aboutUs->work_image??'';
        }
        if ($request->hasFile('our_story_image')) {
          $file  = request()->file('our_story_image');
          $our_story_imageSliderImage = 'uploads/story/our_story_image'.trim(time(). "." .$file->getClientOriginalExtension());
          $file->move('public/uploads/story/', $our_story_imageSliderImage);
        }else
        {
          $aboutUs =   AboutUs::find($request->id);
          $our_story_imageSliderImage = $aboutUs->our_story_image??'';
        }
        if ($request->hasFile('our_company_image')) {
          $file  = request()->file('our_company_image');
          $our_company_imageSliderImage = 'uploads/company/our_company_image'.trim(time(). "." .$file->getClientOriginalExtension());
          $file->move('public/uploads/company/', $our_company_imageSliderImage);
        }else
        {
          $aboutUs =   AboutUs::find($request->id);
          $our_company_imageSliderImage = $aboutUs->our_company_image??'';
        }
        if ($request->hasFile('vision_image')) {
          $file  = request()->file('vision_image');
          $vision_imageSliderImage = 'uploads/vision/vision_image'.trim(time(). "." .$file->getClientOriginalExtension());
          $file->move('public/uploads/vision/', $vision_imageSliderImage);
        }else
        {
          $aboutUs =   AboutUs::find($request->id);
          $vision_imageSliderImage = $aboutUs->vision_image??'';
        }

         if ($request->hasFile('mission_image')) {
          $file  = request()->file('mission_image');
          $mission_imageSliderImage = 'uploads/mission/mission_image'.trim(time(). "." .$file->getClientOriginalExtension());
          $file->move('public/uploads/mission/', $mission_imageSliderImage);
        }else
        {
          $aboutUs =   AboutUs::find($request->id);
          $mission_imageSliderImage = $aboutUs->mission_image??'';
        }


        $requestdata = $requestArray;
        $requestdata['work_image'] = $SliderImage;
        $requestdata['our_story_image'] = $our_story_imageSliderImage;
        $requestdata['vision_image'] = $vision_imageSliderImage;
        $requestdata['mission_image'] = $mission_imageSliderImage;
        $requestdata['our_company_image'] = $our_company_imageSliderImage;
 
        $aboutUs =   AboutUs::firstOrNew(['id'=>$id]);;
        $aboutUs->fill($requestdata);
        $aboutUs->save();

        return  redirect()->route('admin.about-us');



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

