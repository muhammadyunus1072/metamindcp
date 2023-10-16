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
        Schema::create('event_detail_cols', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_detail_id')->constrained('event_details')->cascadeOnDelete();
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
        Schema::dropIfExists('event_detail_cols');
    }
};
