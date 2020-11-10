<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mylogger extends Migration
{
    public function up()
    {
        Schema::create('mylogger',function(BluePrint $table){
            $table->id();
            $table->string("route");
            $table->timestamp("requestdatetime");
        });
    }
    public function down()
    {
        
    }
}
