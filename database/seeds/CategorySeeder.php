<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
 
class CategorySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,10) as $index){
            $arr = array(false,true); 
            DB::table("category")->insert([
                    "title"=>$faker->name,
                    "photo"=>$faker->name,
                    "islive"=>$arr[rand(0,1)],
                    "isdeleted"=>$arr[rand(0,1)],
                    "created_at"=>$faker->dateTime()
            ]); 
        }
    }
}
