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
        Schema::create('involves', function (Blueprint $table) {
            $table->id();
            $table->biginteger('quantity');
            $table->unsignedInteger('dish_id');
            $table->unsignedInteger('order_id');
            $table->foreign('dish_id')->references('id')->on('dishes');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('involves');
    }
};
