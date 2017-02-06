<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    protected $fillable = ['title','excerpt','pdf_link','featured_image','posted_by','category'];
}
