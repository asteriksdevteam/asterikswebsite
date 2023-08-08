<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AboutUsController;
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
        Route::get('/slider-image/{id}', [App\Http\Controllers\SliderController::class, 'slider'])->name('slider.images');
        Route::get('/edit/{id}', [App\Http\Controllers\SliderController::class, 'edit'])->name('slider.edit');
        Route::post('/update/{id}', [App\Http\Controllers\SliderController::class, 'update'])->name('slider.update');

        Route::get('slider-image/index', [App\Http\Controllers\SliderImageController::class, 'index'])->name('slider.image.index');
        Route::get('slider-image/create', [App\Http\Controllers\SliderImageController::class, 'create'])->name('slider.image.create');
        Route::post('slider-image/store', [App\Http\Controllers\SliderImageController::class, 'store'])->name('slider.image.store');
        Route::get('slider-image/edit/{id}', [App\Http\Controllers\SliderImageController::class, 'edit'])->name('slider.image.edit');
        Route::post('slider-image/update/{id}', [App\Http\Controllers\SliderImageController::class, 'update'])->name('slider.image.update');
        Route::post('slider-image/store-slider/{id}', [App\Http\Controllers\SliderImageController::class, 'updateSlider'])->name('slider.image.store.slider');
        Route::post('slider-image/delete-slider/{id}', [App\Http\Controllers\SliderImageController::class, 'deleteSlider'])->name('slider.image.delete.slider');

        Route::get('what-we-do/index', [App\Http\Controllers\WhatWeDoController::class, 'index'])->name('wwd.index');
        Route::get('what-we-do/edit', [App\Http\Controllers\WhatWeDoController::class, 'edit'])->name('wwd.edit');
        Route::post('what-we-do/update/{id}', [App\Http\Controllers\WhatWeDoController::class, 'update'])->name('wwd.update');

        Route::get('award/index', [App\Http\Controllers\AwardsController::class, 'index'])->name('award.index');
        Route::get('award/create', [App\Http\Controllers\AwardsController::class, 'create'])->name('award.create');
        Route::post('award/store', [App\Http\Controllers\AwardsController::class, 'store'])->name('award.store');
        Route::get('award/edit/{id}', [App\Http\Controllers\AwardsController::class, 'edit'])->name('award.edit');
        Route::post('award/update/{id}', [App\Http\Controllers\AwardsController::class, 'update'])->name('award.update');

        Route::get('testimonial/index', [App\Http\Controllers\TestimonialController::class, 'index'])->name('testimonial.index');
        Route::get('testimonial/create', [App\Http\Controllers\TestimonialController::class, 'create'])->name('testimonial.create');
        Route::post('testimonial/store', [App\Http\Controllers\TestimonialController::class, 'store'])->name('testimonial.store');
        Route::get('testimonial/edit/{id}', [App\Http\Controllers\TestimonialController::class, 'edit'])->name('testimonial.edit');
        Route::post('testimonial/update/{id}', [App\Http\Controllers\TestimonialController::class, 'update'])->name('testimonial.update');
    });
  Route::group(['middleware' => 'permissions:about-us'], function () {
       Route::get('about-us', 'App\Http\Controllers\AboutUsController@index')->name('about-us');
       Route::put('about-us/update/{id}', 'App\Http\Controllers\AboutUsController@update')
       ->name('about-us.update');
       
    });
  
   Route::group(['middleware' => 'permissions:blog'], function () {
       
        Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
        Route::post('/blog/store', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
        Route::get('/blog/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
        Route::get('/blog/edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit');
        Route::put('/blog/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.update');


         Route::get('/blog-page', [App\Http\Controllers\BlogPageController::class, 'index'])->name('blog-page.index');
          Route::post('/blog-page/store', [App\Http\Controllers\BlogController::class, 'store'])->name('blog-page.store');
        Route::get('/blog-page/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog-page.create');
        Route::get('/blog-page/edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog-page.edit');
        Route::put('/blog-page/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog-page.update');
    });

 Route::group(['middleware' => 'permissions:category'], function () {

        Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
        Route::get('category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
        Route::post('category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
        Route::get('category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
        Route::post('category/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');

        

    });
    Route::group(['middleware' => 'permissions:service-category'], function () {

        Route::get('/service-category', [App\Http\Controllers\ServiceCategoryController::class, 'index'])->name('service.category.index');
        Route::get('service-category/create', [App\Http\Controllers\ServiceCategoryController::class, 'create'])->name('service.category.create');
        Route::post('service-category/store', [App\Http\Controllers\ServiceCategoryController::class, 'store'])->name('service.category.store');
        Route::get('service-category/edit/{id}', [App\Http\Controllers\ServiceCategoryController::class, 'edit'])->name('service.category.edit');
        Route::put('service-category/update/{id}', [App\Http\Controllers\ServiceCategoryController::class, 'update'])->name('service.category.update');

        Route::get('/service-subcategory', [App\Http\Controllers\SubCategoryController::class, 'index'])->name('service.subcategory.index');
        Route::get('service-subcategory/create', [App\Http\Controllers\SubCategoryController::class, 'create'])->name('service.subcategory.create');
        Route::post('service-subcategory/store', [App\Http\Controllers\SubCategoryController::class, 'store'])->name('service.subcategory.store');
        Route::get('service-subcategory/edit/{id}', [App\Http\Controllers\SubCategoryController::class, 'edit'])->name('service.subcategory.edit');
        Route::put('service-subcategory/update/{id}', [App\Http\Controllers\SubCategoryController::class, 'update'])->name('service.subcategory.update');
    });

   Route::group(['middleware' => 'permissions:career'], function () {
       Route::get('career', 'App\Http\Controllers\CareerController@index')->name('career');
       Route::put('career/update/{id}', 'App\Http\Controllers\CareerController@update')
       ->name('career.update');
    });

Route::group(['middleware' => 'permissions:contact-us'], function () {
       Route::get('contact-us', 'App\Http\Controllers\ContactUsController@index')->name('contact-us');
       Route::put('contact-us/update/{id}', 'App\Http\Controllers\ContactUsController@update')
       ->name('contact-us.update');
    });

   Route::group(['middleware' => 'permissions:services'], function () {
        Route::get('/services', [App\Http\Controllers\ServiceController::class, 'index'])->name('services');
        Route::get('/get-subcategory', [App\Http\Controllers\ServiceController::class, 'getSubcategory'])->name('get-subcategor');
        Route::get('/get-data', [App\Http\Controllers\ServiceController::class, 'getData'])->name('get-data');
        Route::post('/service/store', [App\Http\Controllers\ServiceController::class, 'store'])->name('service.store');
    });
    Route::group(['middleware' => 'permissions:service-agency'], function () {
        Route::get('agency-category/index', [App\Http\Controllers\AgencyCategoryController::class, 'index'])->name('agency.index');
        Route::get('agency-category/create', [App\Http\Controllers\AgencyCategoryController::class, 'create'])->name('agency.create');
        Route::post('agency-category/store', [App\Http\Controllers\AgencyCategoryController::class, 'store'])->name('agency.store');
        Route::get('agency-category/edit/{id}', [App\Http\Controllers\AgencyCategoryController::class, 'edit'])->name('agency.edit');
        Route::post('agency-category/update/{id}', [App\Http\Controllers\AgencyCategoryController::class, 'update'])->name('agency.update');

        Route::get('agency/index', [App\Http\Controllers\AgencyController::class, 'index'])->name('agencys.index');
        Route::get('agency/create', [App\Http\Controllers\AgencyController::class, 'create'])->name('agencys.create');
        Route::post('agency/store', [App\Http\Controllers\AgencyController::class, 'store'])->name('agencys.store');
        Route::get('agency/edit/{id}', [App\Http\Controllers\AgencyController::class, 'edit'])->name('agencys.edit');
        Route::post('agency/update/{id}', [App\Http\Controllers\AgencyController::class, 'update'])->name('agencys.update');
    });
     Route::group(['middleware' => 'permissions:seo'], function () {
        
        Route::get('/meta', [App\Http\Controllers\MetaController::class, 'index'])->name('meta.index');
        Route::get('/meta/create', [App\Http\Controllers\MetaController::class, 'create'])->name('meta.create');
        Route::post('/meta/store', [App\Http\Controllers\MetaController::class, 'store'])->name('meta.store');
        Route::put('/meta/update/{id}', [App\Http\Controllers\MetaController::class, 'update'])->name('meta.update');
        Route::get('/meta/edit/{id}', [App\Http\Controllers\MetaController::class, 'edit'])->name('meta.edit');
        Route::get('/meta/get-by-pageid', [App\Http\Controllers\MetaController::class, 'getPageDataByid'])->name('meta.get-by-pageid');
    
    });
