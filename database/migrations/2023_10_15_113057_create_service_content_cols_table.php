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
        Schema::create('service_content_cols', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_content_id')->constrained('service_contents')->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->string('content')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_content_cols');
    }
};
