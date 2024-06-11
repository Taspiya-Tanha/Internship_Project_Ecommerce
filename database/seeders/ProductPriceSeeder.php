<?php

namespace Database\Seeders;

use App\Models\ProductPrice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ProductPrice::factory()->count(60)->create();


        $price = new ProductPrice();
        $price->product_id = 1;
        $price->price = 1100;
        $price->discount = 1300;
        $price->save();

        
        $price = new ProductPrice();
        $price->product_id = 2;
        $price->price = 1300;
        $price->discount = 1400;
        $price->save();


        
        $price = new ProductPrice();
        $price->product_id = 3;
        $price->price = 900;
        $price->discount = 1100;
        $price->save();


        $price = new ProductPrice();
        $price->product_id = 4;
        $price->price = 1200;
        $price->discount = 1400;
        $price->save();


        $price = new ProductPrice();
        $price->product_id = 5;
        $price->price = 1500;
        $price->discount = 1400;
        $price->save();






    }
}
