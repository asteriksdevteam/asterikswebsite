<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['_token'];
    public $timestamps = false;

    public function sliderImages()
    {
    	return $this->hasMany(ImageSlider::class, 'imageId', 'id');
    }
    public function sliderImage()
    {
    	return $this->hasOne(ImageSlider::class, 'imageId', 'id');
    }
}
