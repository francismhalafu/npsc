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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('created_by')->constrained('users')->cascadeOnDelete();
            $table->foreignId('approved_by')->nullable()->constrained('users')->nullOnDelete();

            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable();
            $table->longText('content');

            $table->string('featured_image')->nullable();
            $table->string('featured_image_alt')->nullable();

            // Slot system for homepage display
            $table->enum('slot_position', ['hero', 'featured_1', 'featured_2', 'featured_3', 'archive'])->default('archive');

            // Status workflow
            $table->enum('status', ['draft', 'pending_approval', 'approved', 'published', 'archived'])->default('draft');

            // SEO fields
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();

            $table->boolean('is_featured')->default(false);
            $table->boolean('allow_comments')->default(true);
            $table->integer('views_count')->default(0);

            $table->timestamp('published_at')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->index('status');
            $table->index('slot_position');
            $table->index('published_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
