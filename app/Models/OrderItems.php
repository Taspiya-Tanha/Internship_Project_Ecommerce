<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
  use HasFactory;

  public function orders()
  {
    $this->belongsTo(Orders::class);
  }

  public function user()
  {
    $this->belongsTo(User::class);
  }

  public function product()
  {
    $this->belongsTo(Product::class);
  }

  public function productPrice()
  {
    $this->belongsTo(ProductPrice::class);
  }
}
