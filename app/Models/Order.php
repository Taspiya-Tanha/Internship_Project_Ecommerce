<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Stripe\Charge;
use Stripe\Stripe;

class Order extends Model
{
  protected $guarded = ['id'];
  // protected $fillable = ['charge', /* other fillable fields */];


  public function orderItems()
  {
    return $this->hasMany(OrderItem::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class, 'delivered_by');
  }

  public function getChargeAttribute()
  {

    if (!$this->attributes['charge']) {
      return null; // Return null if the charge field is empty
    }

    Stripe::setApiKey(env('STRIPE_SECRET'));

    $charge = Charge::retrieve([
      'id' => $this->attributes['charge']
    ]);

    return $charge;
  }
}
