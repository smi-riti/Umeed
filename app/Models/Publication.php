<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Publication extends Model
{
    protected $fillable = [
        'doctor_id',
        'title',
        'authors',
        'journal',
        'publication_year',
        'link'
    ];

    protected $casts = [
        'publication_year' => 'integer'
    ];

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    // Get formatted link with validation
    public function getFormattedLinkAttribute(): ?string
    {
        if ($this->link && filter_var($this->link, FILTER_VALIDATE_URL)) {
            return $this->link;
        }
        return null;
    }

    // Scope for recent publications
    public function scopeRecent($query, $years = 5)
    {
        return $query->where('publication_year', '>=', now()->year - $years);
    }
}
