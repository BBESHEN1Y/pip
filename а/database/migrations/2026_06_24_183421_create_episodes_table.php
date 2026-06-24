<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();

            $table->string('title');

            $table->integer('episode_number');

            $table->integer('duration_minutes');

            $table->foreignId('series_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('episodes');
    }
};