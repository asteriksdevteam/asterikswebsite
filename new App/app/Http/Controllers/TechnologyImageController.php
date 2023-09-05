<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\TechImage;

use App\Models\Slider;

use Str;



class TechnologyImageController extends Controller

{

    public function updateSlider($id,Request $request)

    {

      if ($request->hasFile('image_slider')) {

        $files  = request()->file('image_slider');

        foreach($files as $key => $file){

        $slider = new TechImage();

        $SliderImage = trim($key.time(). "." .$file->getClientOriginalExtension());

        $file->move('public/uploads/tech-slider/', $SliderImage);

        $slider->imageId = $id;

        $slider->imagePath = 'uploads/tech-slider/'.$SliderImage;


        $slider->save();

        }

      }

      return redirect()->back();

    }

    public function deleteSlider($id)

    {

      $slider = TechImage::find($id);

      $slider->delete();

      return redirect()->back();

    }

}

