<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\ContactUs;

class ContactUsController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $contactus = ContactUs::first();



        return view('admin.contactus.new',compact('contactus'));

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
        if ($request->hasFile('slider_image')) {
          $file  = request()->file('slider_image');
          $SliderImage = trim(time(). "." .$file->getClientOriginalExtension());
          $file->move('public/uploads/contactus/', $SliderImage);
        }else
        {
          $contactUs =   ContactUs::find($request->id);
          $SliderImage = $contactUs->slider_image;
        }



        if ($request->hasFile('work_with_image_1')) {
          $file  = request()->file('work_with_image_1');
           $work_with_image_1 = trim(time(). "." .$file->getClientOriginalExtension());
           $file->move('public/uploads/contactus/',  $work_with_image_1);
        }else
        {
          $contactUs =   ContactUs::find($request->id);
          $work_with_image_1 = $contactUs->work_with_image_1;
        }

        if ($request->hasFile('work_with_image_2')) {
          $file  = request()->file('work_with_image_2');
          $work_with_image_2 = trim(time(). "." .$file->getClientOriginalExtension());
          $file->move('public/uploads/contactus/', $work_with_image_2);
        }else

        {
          $contactUs =   ContactUs::find($request->id);
          $work_with_image_2 = $contactUs->work_with_image_2;
        }

        $requestdata = $requestArray;
        $requestdata['slider_image'] = $SliderImage;
        $requestdata['work_with_image_1'] = $work_with_image_1;
        $requestdata['work_with_image_2'] = $work_with_image_2;
        $contactUs =   ContactUs::firstOrNew(['id'=>$id]);
        $contactUs->fill($requestdata);
        $contactUs->save();
        return  redirect()->route('admin.contact-us');

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

