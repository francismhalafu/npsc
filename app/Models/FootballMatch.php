<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FootballMatch extends Model
{
    use HasFactory;

    protected $table = 'matches';

    protected $fillable = [
        'opponent',
        'match_date',
        'venue',
        'competition',
        'match_type',
        'status',
        'npsc_score',
        'opponent_score',
        'result',
        'match_report',
        'match_report_image',
        'video_highlight_url',
        'statistics',
        'scorers',
        'lineup',
        'attendance',
        'referee',
    ];

    protected $casts = [
        'match_date' => 'datetime',
        'statistics' => 'array',
        'scorers' => 'array',
        'lineup' => 'array',
        'attendance' => 'integer',
        'npsc_score' => 'integer',
        'opponent_score' => 'integer',
    ];

    /**
     * Scopes
     */
    public function scopeUpcoming($query)
    {
        return $query->where('match_date', '>', now())
            ->where('status', 'scheduled')
            ->orderBy('match_date', 'asc');
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed')
            ->orderBy('match_date', 'desc');
    }

    public function scopeByCompetition($query, $competition)
    {
        return $query->where('competition', $competition);
    }

    /**
     * Accessors & Mutators
     */
    public function getIsUpcomingAttribute(): bool
    {
        return $this->match_date->isFuture() && $this->status === 'scheduled';
    }

    public function getIsCompletedAttribute(): bool
    {
        return $this->status === 'completed';
    }

    public function getScoreDisplayAttribute(): ?string
    {
        if ($this->npsc_score !== null && $this->opponent_score !== null) {
            return "{$this->npsc_score} - {$this->opponent_score}";
        }
        return null;
    }

    /**
     * Automatically calculate result based on scores
     */
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($match) {
            if ($match->npsc_score !== null && $match->opponent_score !== null) {
                if ($match->npsc_score > $match->opponent_score) {
                    $match->result = 'win';
                } elseif ($match->npsc_score < $match->opponent_score) {
                    $match->result = 'loss';
                } else {
                    $match->result = 'draw';
                }
            }
        });
    }
}
