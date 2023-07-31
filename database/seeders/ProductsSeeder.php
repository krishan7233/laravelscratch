<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;
use Faker\Factory as faker;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $faker=faker::create();
        
          for($i=1;$i<=50;$i++){
            $Products = new Products;
            $Products->product_name = $faker->city;
            $Products->product_price = $faker->numberBetween($min = 500, $max = 8000);
            $Products->product_description=$faker->paragraph($nb =2);
            $Products->product_image="1-3-1081x623-11.jpg";
            $Products->save();
          }

    }
}
