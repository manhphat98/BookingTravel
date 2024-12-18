<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name');          // Tên xe
            $table->string('brand');         // Hãng
            $table->integer('seats');        // Số chỗ
            $table->integer('quantity');     // Số lượng
            $table->string('color');         // Màu
            $table->decimal('rental_price', 10, 2); // Giá thuê
            $table->text('description')->nullable(); // Mô tả
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
