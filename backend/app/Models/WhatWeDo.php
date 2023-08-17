<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhatWeDo extends Model
{
    protected $table = 'what_we_do';
    protected $primaryKey = 'id';
    protected $guarded = ['_token'];
    public $timestamps = false;
}
