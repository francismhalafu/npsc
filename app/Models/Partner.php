<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'website',
        'tier',
        'description',
        'partnership_start',
        'partnership_end',
        'is_active',
        'show_on_homepage',
        'show_in_footer',
        'display_order',
    ];

    protected $casts = [
        'partnership_start' => 'date',
        'partnership_end' => 'date',
        'is_active' => 'boolean',
        'show_on_homepage' => 'boolean',
        'show_in_footer' => 'boolean',
        'display_order' => 'integer',
    ];

    /**
     * Scopes
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeMainPartners($query)
    {
        return $query->where('tier', 'main_partner')
            ->where('is_active', true)
            ->orderBy('display_order');
    }

    public function scopeOfficialSponsors($query)
    {
        return $query->where('tier', 'official_sponsor')
            ->where('is_active', true)
            ->orderBy('display_order');
    }

    public function scopeCommunityPartners($query)
    {
        return $query->where('tier', 'community_partner')
            ->where('is_active', true)
            ->orderBy('display_order');
    }

    public function scopeForHomepage($query)
    {
        return $query->where('show_on_homepage', true)
            ->where('is_active', true)
            ->orderBy('display_order');
    }

    public function scopeForFooter($query)
    {
        return $query->where('show_in_footer', true)
            ->where('is_active', true)
            ->orderBy('display_order');
    }

    /**
     * Check if partnership is currently active (within date range)
     */
    public function isCurrentlyActive(): bool
    {
        if (!$this->is_active) {
            return false;
        }

        $now = now();

        if ($this->partnership_start && $this->partnership_start->isFuture()) {
            return false;
        }

        if ($this->partnership_end && $this->partnership_end->isPast()) {
            return false;
        }

        return true;
    }
}
