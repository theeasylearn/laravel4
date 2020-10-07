<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pincode extends Migration
{
   
    public function up()
    {
        Schema::create('pincode',function(BluePrint $table){
            $table->id();
            $table->string("zipcode");
            $table->string("city");
            $table->timestamp("created_at")->nullable();
            $table->timestamp("modified_at")->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pincode');
    }
}
