<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'language_spoken' => 'array',
        'social_media_link' => 'array'
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
    
    // Get formatted social media links
    public function getFormattedSocialMediaAttribute(): array
    {
        if (is_array($this->social_media_link)) {
            return $this->social_media_link;
        }
        return [];
    }
    
    // Get social media links as structured data (platform => url)
    public function getSocialLinksAttribute(): array
    {
        $result = [];
        if (!is_array($this->social_media_link)) {
            return $result;
        }
        
        foreach ($this->social_media_link as $item) {
            // Check if the item is already in platform:url format
            if (is_string($item) && strpos($item, ':') !== false) {
                [$platform, $url] = explode(':', $item, 2);
                $result[trim($platform)] = trim($url);
            } else {
                // For backwards compatibility with plain URLs
                $platform = $this->detectPlatform($item);
                $result[$platform] = $item;
            }
        }
        
        return $result;
    }
    
    // Detect social media platform from URL
    protected function detectPlatform(string $url): string
    {
        $url = strtolower($url);
        if (strpos($url, 'instagram') !== false || strpos($url, 'insta') !== false) {
            return 'instagram';
        } elseif (strpos($url, 'facebook') !== false || strpos($url, 'fb.com') !== false) {
            return 'facebook';
        } elseif (strpos($url, 'twitter') !== false || strpos($url, 'x.com') !== false) {
            return 'twitter';
        } elseif (strpos($url, 'linkedin') !== false) {
            return 'linkedin';
        } elseif (strpos($url, 'youtube') !== false) {
            return 'youtube';
        }
        return 'website';
    }
    
    // Get doctor name from relation
    public function getNameAttribute(): string
    {
        return $this->doctor->name ?? '';
    }
    
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }
}
