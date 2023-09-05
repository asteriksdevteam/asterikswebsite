<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\CategoryType;

class CategoryController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $categories =Category::with('categorytype')->get();



        return view('admin.category.index',compact('categories'));

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

       $categoryTypes =CategoryType::get();

        return view('admin.category.new',compact('categoryTypes'));

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

    if ($request->hasFile('image')) {

          $file  = request()->file('image');

          $category_image = trim(time(). "." .$file->getClientOriginalExtension());

          $file->move('public/uploads/category/', $category_image);

        }

      $category = new Category();

      $category->type_id = $request->type_id;

      $category->category_image = $category_image;

      $category->name = $request->name;

      $category->save();

      return redirect()->route('admin.category.index')->with('success', 'Successfully Added!!!');

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

        $categories = Category::with('categorytype')->find($id);

        $categoryTypes = CategoryType::get();

        return view('admin.category.new',compact('categories','categoryTypes'));

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

        if ($request->hasFile('image')) {

          $file  = request()->file('image');

          $category_image = trim(time(). "." .$file->getClientOriginalExtension());

          $file->move('public/uploads/category/', $category_image);

        }else

        {

              $category =  Category::find($id);

              $category_image = $category->category_image;

        }

          $category =  Category::find($id);

          $category->type_id = $request->type_id;

          $category->category_image = $category_image;

          $category->name = $request->name;

          $category->save();

      return redirect()->route('admin.category.index')->with('success', 'Successfully Added!!!');

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

