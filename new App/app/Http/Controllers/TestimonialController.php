<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\Testimonial;

use Str;



class TestimonialController extends Controller

{

  



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index()

    {

        $testimonial = Testimonial::get();

        return view('admin.pages.testimonial.index',compact('testimonial'));

    }

    public function create(){

      return view('admin.pages.testimonial.create');

    }

    public function store(Request $request)

    {

      $testimonial = new Testimonial();

      if ($request->hasFile('image')) {

        $file  = request()->file('image');

        $SliderImage = trim(time(). "." .$file->getClientOriginalExtension());

        $file->move('public/uploads/testimonial/', $SliderImage);

        $testimonial->Image = 'uploads/testimonial/'.$SliderImage;

      }

      $testimonial->Name = $request->name;
      $testimonial->Rating = $request->rating;
      $testimonial->Position = $request->position;

      $testimonial->Description = 'Serveral selected clients, who already believe our service.';

      $testimonial->Message = $request->message;

      $testimonial->Status = 1;

      $testimonial->MetaTitle = $request->metatitle;

      $testimonial->save();



      return redirect()->route('admin.testimonial.index')->with('success', 'Successfully Updated');

    }



    public function edit($id)

    {

      $testimonial = Testimonial::find($id);

      return view('admin.pages.testimonial.edit',compact('testimonial'));

    }

    public function update($id,Request $request)

    {

      $testimonial = Testimonial::find($id);

      if ($request->hasFile('image')) {

        $file  = request()->file('image');

        $SliderImage = trim(time(). "." .$file->getClientOriginalExtension());

        $file->move('public/uploads/testimonial/', $SliderImage);

        $testimonial->Image = 'uploads/testimonial/'.$SliderImage;

      }

      $testimonial->Name = $request->name;
      $testimonial->Rating = $request->rating;
      $testimonial->Position = $request->position;

      $testimonial->Description = 'Serveral selected clients, who already believe our service.';

      $testimonial->Message = $request->message;

      $testimonial->Status = 1;

      // $testimonial->MetaTitle = $request->metatitle;

      $testimonial->save();



      return redirect()->route('admin.testimonial.index')->with('success', 'Successfully Updated');

    }

}

