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
        Schema::create('site_images', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // banner, right_card, logo, payment etc.
            $table->string('image'); // file path
            $table->string('title')->nullable(); // optional (for right card)
            $table->string('subtitle')->nullable();
            $table->string('link')->nullable(); // optional (for app links, payment link, etc.)
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_images');
    }
};
