<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    //
    public $fillable = ['id','ad_name','ad_image','ad_position'];
}
