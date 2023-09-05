<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechImage extends Model
{
    public $table = 'tech_image';
    protected $primaryKey = 'id';
    protected $guarded = ['_token'];
    const CREATED_AT = 'Created_at';
    const UPDATED_AT = 'updated_at';

}
