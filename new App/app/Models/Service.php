<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function subcat()
    {
        return $this->belongsTo(SubCategory::class ,'sub_category_id','id')->withDefault();
        
    }
}
