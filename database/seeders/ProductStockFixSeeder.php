<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductStockFixSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Product::all()->each(function ($product) {
      $totalSold = Order::join('order_items', 'orders.id', '=', 'order_items.order_id')
        ->where('order_items.product_id', $product->id)
        ->sum('order_items.product_qty');

      $product->stock = $product->intial_stock - $totalSold;
      $product->save();
    });
  }
}
