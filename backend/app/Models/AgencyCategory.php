<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgencyCategory extends Model
{
    protected $table = 'agency_category';
    protected $primaryKey = 'id';
    protected $guarded = ['_token'];
    public $timestamps = false;

    public function getCategory(){
        return $this->belongsTo(SubCategory::class,'category_id','id');
    }
}
