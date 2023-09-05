<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;
   
    function subCategory()
    {
        return $this->hasMany(SubCategory::class ,'category_id','id');
    }
}
