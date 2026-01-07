<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'type',
        'subject',
        'message',
        'status',
        'admin_notes',
    ];

    /**
     * Scopes
     */
    public function scopeNew($query)
    {
        return $query->where('status', 'new')->orderBy('created_at', 'desc');
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function scopeUnread($query)
    {
        return $query->whereIn('status', ['new']);
    }

    /**
     * Mark as read
     */
    public function markAsRead()
    {
        $this->update(['status' => 'read']);
    }

    /**
     * Mark as replied
     */
    public function markAsReplied()
    {
        $this->update(['status' => 'replied']);
    }

    /**
     * Archive inquiry
     */
    public function archive()
    {
        $this->update(['status' => 'archived']);
    }
}
