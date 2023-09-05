<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public static function createTable()
{
    try {
    // Schema::connection('mysql')->create('termsandconditions', function($table)
    // {
    // $table->increments('id');
    // $table->string('title');
    // $table->text('Description');
    // $table->timestamps();
    // });
    dd('created successfully');
} catch (\Exception $e){
    $e->message();
}
}
}
