<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $primaryKey = 'id';
    protected $guarded = ['_token'];
    public $timestamps = false;

    public function sliderImages()
    {
    	return $this->hasMany(TechImage::class, 'imageId', 'id');
    }
    public function sliderImage()
    {
    	return $this->hasOne(TechImage::class, 'imageId', 'id');
    }
    public function techCategory()
    {
    	return $this->belongsTo(TechCategory::class, 'category_id', 'id');
    }
}
