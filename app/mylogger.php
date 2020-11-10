<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mylogger extends Model
{
    protected $table = 'mylogger';
    protected $fillable = ['route','requestdatetime'];
}
