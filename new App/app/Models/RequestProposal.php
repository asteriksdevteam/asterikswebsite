<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestProposal extends Model
{
    use HasFactory;
    protected $guarded = ['_token'];
    public $table ='request_proposal';
}
