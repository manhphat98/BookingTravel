<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Tên danh mục
            $table->string('slug'); // Tên danh mục
            $table->text('description')->nullable(); // Mô tả (có thể null)
            $table->string('image')->nullable(); // Hình ảnh (có thể null)
            $table->integer('status'); // Trạng thái (hiển thị/ẩn)
            $table->unsignedBigInteger('parent_id')->nullable(); // Phân cấp (có thể null)
            $table->timestamps(); // Tạo 2 trường created_at và updated_at

            // Tạo khóa ngoại liên kết parent_id với chính bảng categories
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
