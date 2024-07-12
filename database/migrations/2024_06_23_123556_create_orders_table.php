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
    Schema::create('orders', function (Blueprint $table) {
      $table->id();
      $table->string('invoice_no');
      $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
      $table->string('fname');
      $table->string('email');
      $table->string('country');
      $table->string('city');
      $table->string('billing_address');
      $table->string('zipcode')->nullable();
      $table->string('phone');
      $table->integer('total_amount')->default(0)->nullable();
      $table->enum('status', ['Processing', 'Delivered'])->default('Processing')->nullable();
      $table->unsignedBigInteger('delivered_by')->nullable()->comment('user_id');
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
    Schema::dropIfExists('orders');
  }
};
