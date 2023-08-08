<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $table = 'agencies';
    protected $primaryKey = 'id';
    protected $guarded = ['_token'];
    public $timestamps = false;

    public function getCategory(){
        return $this->belongsTo(AgencyCategory::class,'category_id','id');
    }
}
