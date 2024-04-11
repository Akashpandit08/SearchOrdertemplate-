<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('product_link')->nullable();
            $table->string('product_model')->nullable();
            $table->string('img')->nullable();
            $table->string('price')->nullable();
            $table->string('quantity')->nullable();
            $table->enum('payment_type', ['prepaid', 'cod']);
            $table->enum('order_status', ['pending', 'canceled', 'shipped', 'delivered']);
            $table->string('discount')->nullable();
            $table->string('delivery charge')->nullable();
            $table->string('custumer_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
