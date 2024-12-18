<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidencesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('residences', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('address'); // Số nhà, tên đường
            $table->string('ward'); // Phường/xã
            $table->string('district'); // Quận/huyện
            $table->string('province'); // Tỉnh/thành phố
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->decimal('price_per_night', 10, 2);
            $table->decimal('rating', 3, 2)->default(0); // Tối đa 5 sao
            $table->boolean('status')->default(1); // 1: Hoạt động, 0: Ngừng hoạt động
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residences');
    }
}
