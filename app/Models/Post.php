<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'created_by',
        'approved_by',
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'featured_image_alt',
        'slot_position',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'is_featured',
        'allow_comments',
        'views_count',
        'published_at',
        'approved_at',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'allow_comments' => 'boolean',
        'views_count' => 'integer',
        'published_at' => 'datetime',
        'approved_at' => 'datetime',
    ];

    /**
     * Boot method - auto-generate slug
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
            // Auto-generate excerpt if empty
            if (empty($post->excerpt) && !empty($post->content)) {
                $post->excerpt = Str::limit(strip_tags($post->content), 200);
            }
            // Auto-generate meta fields if empty
            if (empty($post->meta_title)) {
                $post->meta_title = $post->title;
            }
            if (empty($post->meta_description)) {
                $post->meta_description = $post->excerpt;
            }
        });

        static::updating(function ($post) {
            if ($post->isDirty('title') && empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
        });

        // When a post is assigned to a slot, archive the previous post in that slot
        static::saving(function ($post) {
            if ($post->isDirty('slot_position') && in_array($post->slot_position, ['hero', 'featured_1', 'featured_2', 'featured_3'])) {
                static::where('slot_position', $post->slot_position)
                    ->where('id', '!=', $post->id)
                    ->update(['slot_position' => 'archive']);
            }

            // Auto-set published_at when status changes to published
            if ($post->isDirty('status') && $post->status === 'published' && !$post->published_at) {
                $post->published_at = now();
            }
        });
    }

    /**
     * Relationships
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function approver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Scopes
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeInSlot($query, $slot)
    {
        return $query->where('slot_position', $slot);
    }

    /**
     * Increment view count
     */
    public function incrementViews()
    {
        $this->increment('views_count');
    }

    /**
     * Check if post is published
     */
    public function isPublished(): bool
    {
        return $this->status === 'published'
            && $this->published_at !== null
            && $this->published_at->isPast();
    }
}
