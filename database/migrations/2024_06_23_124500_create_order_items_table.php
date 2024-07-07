<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('order_items', function (Blueprint $table) {
      $table->id();
      $table->foreignId('order_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
      $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
      $table->foreignId('product_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
      $table->foreignId('product_price')->constrained()->onUpdate('cascade')->onDelete('cascade');
      $table->integer('product_qty')->default(0);
      $table->integer('price');
      $table->integer('discount_price')->nullable();

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('order_items');
  }
};
