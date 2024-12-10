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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); // Khóa chính
            $table->foreignId('tour_id')->constrained()->onDelete('cascade'); // Liên kết với bảng tours
            $table->string('name'); // Họ và tên khách hàng
            $table->string('email'); // Email khách hàng
            $table->string('phone'); // Số điện thoại
            $table->integer('adults')->default(1); // Số lượng người lớn
            $table->integer('children')->default(0); // Số lượng trẻ em
            $table->text('note')->nullable(); // Ghi chú
            $table->decimal('total_price', 15, 2); // Tổng tiền
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending'); // Trạng thái
            $table->timestamps(); // Thời gian tạo và cập nhật
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
