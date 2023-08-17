<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonials';
    protected $primaryKey = 'id';
    protected $guarded = ['_token'];
    public $timestamps = false;
}
