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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('training_id')->constrained('trainings')->cascadeOnDelete();
            $table->foreignId('trainer_id')->constrained('trainers')->cascadeOnDelete();
            $table->string('title');
            $table->string('venue');
            $table->date('date_start');
            $table->date('date_end');
            $table->time('time_start');
            $table->time('time_end');
            $table->integer('quota')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('description')->nullable();
            $table->string('btn_text')->nullable();
            $table->string('btn_url')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
