<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', function () {
        return view('auth.login');
    });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::group(['middleware' => 'permissions:home-pages'], function () {
        Route::get('/slider-page', [App\Http\Controllers\SliderController::class, 'index'])->name('slider-page');
        Route::get('/create', [App\Http\Controllers\SliderController::class, 'create'])->name('slider.create');
        Route::post('/store', [App\Http\Controllers\SliderController::class, 'store'])->name('slider.store');
        Route::get('/edit/{id}', [App\Http\Controllers\SliderController::class, 'edit'])->name('slider.edit');
        Route::post('/update/{id}', [App\Http\Controllers\SliderController::class, 'update'])->name('slider.update');

        Route::get('slider-image/index', [App\Http\Controllers\SliderImageController::class, 'index'])->name('slider.image.index');
        Route::get('slider-image/create', [App\Http\Controllers\SliderImageController::class, 'create'])->name('slider.image.create');
        Route::post('slider-image/store', [App\Http\Controllers\SliderImageController::class, 'store'])->name('slider.image.store');
        Route::get('slider-image/edit/{id}', [App\Http\Controllers\SliderImageController::class, 'edit'])->name('slider.image.edit');
        Route::post('slider-image/update/{id}', [App\Http\Controllers\SliderImageController::class, 'update'])->name('slider.image.update');
    });
  Route::group(['middleware' => 'permissions:about-us'], function () {
        Route::get('/about-us', [App\Http\Controllers\PageController::class, 'about-us'])->name('about-us');
    });
  
   Route::group(['middleware' => 'permissions:blog'], function () {
        Route::get('/blog', [App\Http\Controllers\PageController::class, 'blog'])->name('blog');
    });

   Route::group(['middleware' => 'permissions:services'], function () {
        Route::get('/services', [App\Http\Controllers\PageController::class, 'services'])->name('services');
    });
