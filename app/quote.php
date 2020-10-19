<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quote extends Model
{
    protected $table = "quotes";
    protected $fillable = ['title','author','like'];
}
