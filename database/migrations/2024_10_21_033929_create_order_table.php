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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('customer_name');
            $table->string('customer_wa');
            $table->string('address');
            $table->boolean('status')->default(true); // true = terima, false = tolak
            $table->boolean('is_done')->default(false);
            $table->string('title');
            // $table->string('image')->nullable();
            // $table->integer('price')->nullable(); // harga yang diberikan oleh penjual
            // $table->date('order_date');
            // $table->date('done_date')->nullable();
            // $table->uuid('products')->nullable();
            // $table->integer('quantity');
            $table->string('desc')->nullable();
            // $table->foreign('products')->references('id')->on('products')->onDelete('set null');
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
