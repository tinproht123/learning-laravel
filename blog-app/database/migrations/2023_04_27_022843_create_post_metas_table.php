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
        Schema::create('post_metas', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('post_id');
            $table->string('title')->nullable();
            $table->string('robots')->nullable();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->timestamps();
        });
        //meta keywords, meta tag -> loại bỏ vì không ảnh hưởng đến SEO
        //meta description -> dùng $post->description thay thế, không cần thêm data vào DB
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_metas');
    }
};
