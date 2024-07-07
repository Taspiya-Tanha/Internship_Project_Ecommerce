<?php

namespace Database\Seeders;

use App\Models\Product;
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


    $products = Product::all();
    foreach ($products as $prod) {
      $price = new ProductPrice;
      $price->product_id = $prod->id;
      $randprice = rand(85, 25000);
      $price->price = $randprice;
      $price->discount = rand(0, $randprice / 2);
      $price->save();
    }
  }
}
