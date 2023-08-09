<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
    Route::get('/getAboutUs', [App\Http\Controllers\API\v1\ApiController::class, 'getAboutUs'])->name('getAboutUs');
   Route::get('/getWhatWeDo', [App\Http\Controllers\API\v1\ApiController::class, 'getWhatWeDo'])->name('getWhatWeDo');
   Route::get('/getContactUs', [App\Http\Controllers\API\v1\ApiController::class, 'getContactUs'])->name('getContactUs');
   Route::get('/getServices/{catid}/{subcateId}', [App\Http\Controllers\API\v1\ApiController::class, 'getServices'])->name('getServices');

   // Route::get('/getServices/{catid}/{subcateId}', [App\Http\Controllers\API\v1\ApiController::class, 'getServices'])->name('getServices');


   Route::get('/getCareer', [App\Http\Controllers\API\v1\ApiController::class, 'getCareer'])->name('getCareer');
    Route::get('/getMetaDetail/{slug}', [App\Http\Controllers\API\v1\ApiController::class, 'getMetaDetail'])->name('getMetaDetail');
    Route::get('/getCategory', [App\Http\Controllers\API\v1\ApiController::class, 'getCategory'])->name('getCategory');
    Route::get('/getblog', [App\Http\Controllers\API\v1\ApiController::class, 'getblog'])->name('getblog');
    Route::get('/blogDetail/{slug}', [App\Http\Controllers\API\v1\ApiController::class, 'blogDetail'])->name('blogDetail');
   Route::get('/getBlogPage', [App\Http\Controllers\API\v1\ApiController::class, 'getBlogPage'])->name('getBlogPage');
   Route::get('/getTestimonial', [App\Http\Controllers\API\v1\ApiController::class, 'getTestimonial'])->name('getTestimonial');
    Route::get('/getSlider/{slug}', [App\Http\Controllers\API\v1\ApiController::class, 'getSlider'])->name('getSlider');
    Route::get('/getImageSlider/{slug}', [App\Http\Controllers\API\v1\ApiController::class, 'getImageSlider'])->name('getImageSlider');
    Route::get('/postServicesData', [App\Http\Controllers\API\v1\ApiController::class, 'postServicesData'])->name('postServicesData');
    Route::get('/postInterviewData', [App\Http\Controllers\API\v1\ApiController::class, 'postInterviewData'])->name('postInterviewData');

