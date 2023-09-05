<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meta;
use App\Models\Page;
class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metas = Meta::with('page')->get();
  
        return view('admin.metakeywords.index',compact('metas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages= Page::get();

        return view('admin.metakeywords.new',compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestArray = $request->except(['submit_form','_token']);
        $meta = new Meta;
        $meta->fill($requestArray);
        $meta->Save();
        return redirect()->route('admin.meta.index');

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
        $pages= Page::get();
        $metas = Meta::find($id);
        return view('metakeywords.new',compact('pages','metas'));
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
        $meta =  Meta::find($id);
        $meta->fill($requestArray);
        $meta->Save();
        return redirect()->route('meta.index');

    }
    public function getPageDataByid(Request $request)
    {
        $tagsArray=[];
        $slug= $request->slug;
        $page = Meta::where('page_slug',$slug)->first();
        return $page;
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
