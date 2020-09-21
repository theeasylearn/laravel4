<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        for($i=1;$i<=100;$i++)
        {
            DB::table("product")->insert([
                "categoryid"=> rand(1,10),
                "title"=> $faker->name,
                "price"=>$faker->randomDigit,
                "quantity"=>$faker->numberBetween(1,100),
                "photo"=>$faker->imageUrl(640,480),
                "detail"=>"Hi There",
                "created_at"=>$faker->dateTime(),
                "updated_at"=>$faker->dateTime()
            ]);
        }
    }
}
