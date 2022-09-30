<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for($i=0; $i<10; $i++){
        $product=new Product;
        $product->name=$faker->name;
        $product->description="this  is text description";
        $product->price=$faker->randomDigit;
        $product->image=$faker->imageUrl($width =200, $height =200);
        $product->save();
        }
    }
}
