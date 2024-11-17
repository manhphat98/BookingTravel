<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id'); // Khóa ngoại liên kết với bảng categories
            $table->string('title');
            $table->text('description');
            $table->string('vehicle'); // Phương tiện di chuyển
            $table->decimal('price', 10, 2); // Giá tour
            $table->date('start_date'); // Ngày bắt đầu
            $table->date('end_date'); // Ngày kết thúc
            $table->string('tour_code')->unique(); // Mã tour
            $table->string('tour_time'); // Thời gian tour (số ngày, giờ)
            $table->string('image')->nullable(); // Hình ảnh tour
            $table->string('tour_from'); // Nơi xuất phát
            $table->string('tour_to'); // Nơi đến
            $table->integer('quantity'); // Số lượng khách tối đa
            $table->boolean('status')->default(1); // Trạng thái tour (hiển thị/ẩn)
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
        Schema::dropIfExists('tours');
    }
}
