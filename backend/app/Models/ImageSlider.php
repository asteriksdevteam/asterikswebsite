<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageSlider extends Model
{
    public $table = 'slider_image';
    protected $primaryKey = 'id';
    protected $guarded = ['_token'];
    const CREATED_AT = 'Created_at';
    const UPDATED_AT = 'updated_at';

    public function sliderImage()
    {
    	return $this->hasOne(ImageSlider::class, 'imageId', 'id');
    }
    public function sliderName()
    {
    	return $this->hasOne(Slider::class, 'id', 'imageId');
    }
}
