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
        Schema::create('order_detail', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->integer('price')->nullable(); // harga yang diberikan oleh penjual
            $table->date('order_date');
            $table->date('done_date')->nullable();
            $table->uuid('products')->nullable();
            $table->integer('quantity');
            $table->foreign('products')->references('id')->on('products')->onDelete('set null');
            $table->foreignId('order')->nullable()->constrained('order', 'id')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_detail');
    }
};
