<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DoctorProfile extends Model
{
    protected $fillable = [
        
        'doctor_id',
        'qualification',
        'professional_bio',
        'membership',
        'social_media_link',
        'special_interest',
        'achievements',
        'language_spoken'
    ];

    protected $casts = [
        'achievements' => 'array',
        'language_spoken' => 'array'
    ];

    public function publications(): HasMany
    {
        return $this->hasMany(Publication::class, 'doctor_id');
    }

    // Get formatted achievements
    public function getFormattedAchievementsAttribute(): string
    {
        if (is_array($this->achievements)) {
            return implode(', ', $this->achievements);
        }
        return $this->achievements ?? '';
    }

    // Get formatted languages
    public function getFormattedLanguagesAttribute(): string
    {
        if (is_array($this->language_spoken)) {
            return implode(', ', $this->language_spoken);
        }
        return $this->language_spoken ?? '';
    }
}
