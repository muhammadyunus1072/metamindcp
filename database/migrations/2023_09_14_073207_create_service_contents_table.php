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
        Schema::create('service_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services')->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('bg_color')->nullable();
            $table->string('title_color')->nullable();
            $table->string('poin_color')->nullable();
            $table->string('description_color')->nullable();
            $table->integer('position')->nullable();
            $table->tinyInteger('total_col')->nullable();
            $table->string('image')->nullable();
            $table->string('image_position')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_contents');
    }
};
