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
            $table->date('order_date');
            $table->string('customer_name');
            $table->string('customer_wa');
            $table->string('address');
            $table->string('title')->nullable();    
            $table->integer('total_price');
            $table->integer('is_done')->default(0)->comment('0: not done, 1: done, 2: sudah diambil ');
            $table->string('desc')->nullable();
            $table->string('bukti_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
