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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();

            $table->string('opponent');
            $table->dateTime('match_date');
            $table->string('venue');
            $table->string('competition'); // League One, FA Cup, etc.

            $table->enum('match_type', ['home', 'away', 'neutral'])->default('home');
            $table->enum('status', ['scheduled', 'live', 'completed', 'postponed', 'cancelled'])->default('scheduled');

            // Results
            $table->integer('npsc_score')->nullable();
            $table->integer('opponent_score')->nullable();
            $table->enum('result', ['win', 'draw', 'loss'])->nullable();

            // Match report
            $table->longText('match_report')->nullable();
            $table->string('match_report_image')->nullable();
            $table->string('video_highlight_url')->nullable();

            // Statistics
            $table->json('statistics')->nullable(); // possession, shots, etc.
            $table->json('scorers')->nullable(); // goal scorers
            $table->json('lineup')->nullable(); // starting 11

            $table->integer('attendance')->nullable();
            $table->string('referee')->nullable();

            $table->timestamps();

            // Indexes
            $table->index('match_date');
            $table->index('status');
            $table->index('competition');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
