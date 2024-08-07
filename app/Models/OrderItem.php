<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
  use HasFactory;

  public function order()
  {
    $this->belongsTo(Order::class);
  }

  public function user()
  {
    $this->belongsTo(User::class);
  }

  public function product()
  {
    return $this->belongsTo(Product::class);
  }

  public function productPrice()
  {
    $this->belongsTo(ProductPrice::class);
  }
}
