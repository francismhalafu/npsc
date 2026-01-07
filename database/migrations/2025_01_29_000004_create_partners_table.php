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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('logo');
            $table->string('website')->nullable();

            $table->enum('tier', ['main_partner', 'official_sponsor', 'community_partner'])->default('community_partner');
            $table->text('description')->nullable();

            $table->date('partnership_start')->nullable();
            $table->date('partnership_end')->nullable();

            $table->boolean('is_active')->default(true);
            $table->boolean('show_on_homepage')->default(true);
            $table->boolean('show_in_footer')->default(false);

            $table->integer('display_order')->default(0);

            $table->timestamps();

            // Indexes
            $table->index('tier');
            $table->index('is_active');
            $table->index('display_order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
