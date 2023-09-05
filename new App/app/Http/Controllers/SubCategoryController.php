<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\SubCategory;

use App\Models\ServiceCategory;
use Str;

class SubCategoryController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $subCategory = SubCategory::with('getCategory')->get();

        return view('admin.subcategory.index',compact('subCategory'));

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $categories = ServiceCategory::get();

        return view('admin.subcategory.new',compact('categories'));

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

      $subCategory = new SubCategory();

        if ($request->hasFile('image')) {

          $file  = request()->file('image');

          $category_image = trim(time(). "." .$file->getClientOriginalExtension());

          $file->move('public/uploads/subcategory/', $category_image);

          $subCategory->imagePath = $category_image;

        }

        $subCategory->category_id = $request->category_id;

        $subCategory->name = $request->name;
        $subCategory->slug = Str::slug($request->name);
        $subCategory->path = "https://asteriksdigital.com/admin/public/";


      $subCategory->save();

      return redirect()->route('admin.service.subcategory.index')->with('success', 'Successfully Added!!!');

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

        $categories = ServiceCategory::get();

        $subcategories = SubCategory::with('getCategory')->find($id);

        return view('admin.subcategory.new',compact('categories','subcategories'));

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

      $subCategory = SubCategory::find($id);

         if ($request->hasFile('image')) {

          $file  = request()->file('image');

          $category_image = trim(time(). "." .$file->getClientOriginalExtension());

          $file->move('public/uploads/subcategory/', $category_image);

          $subCategory->imagePath = $category_image;

        }

        $subCategory->category_id = $request->category_id;

        $subCategory->name = $request->name;
        $subCategory->slug = Str::slug($request->name);
        $subCategory->path = "https://asteriksdigital.com/admin/public/";



        $subCategory->save();

      return redirect()->route('admin.service.subcategory.index')->with('success', 'Successfully Added!!!');

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

