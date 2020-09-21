<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['title','price','quantity','photo','detail'];

    public function getCreationDate()
    {
        return date("d-m-Y h:i:s A",strtotime($this->created_at));
    }
    public function getUpdationDate()
    {
        return date("d-m-Y h:i:s A",strtotime($this->updated_at));
    }
    
}
