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
            $table->integer('status')->nullable()->comment('0: reject, 1: accept, 2: selesai');
            $table->integer('tipe')->nullable()->comment('0: Catalog, 1: Request');
            $table->string('title');
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
