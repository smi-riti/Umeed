<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Doctor extends Model
{
    protected $fillable = [
        'user_id',
        'department_id',
        'slug',
        'fee',
        'status',
        'image',
        'image_file_id'
    ];

    protected $casts = [
        'status' => 'boolean',
        'fee' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
    public function profile()
{
    return $this->hasOne(DoctorProfile::class);
}


    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
    public function profiles(): HasMany
    {
        return $this->hasMany(DoctorProfile::class);
    }
    public function publications(): HasMany
    {
        return $this->hasMany(Publication::class);
    }
    // Accessor for name via user relationship
   
    // Accessor for email via user relationship
    // public function getEmailAttribute(): string
    // {
    //     return $this->user->email ?? '';
    // }

    // Get image URL or null
    public function getImageUrlAttribute(): ?string
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }

    // Get name initials for avatar
    public function getInitialsAttribute(): string
    {
        $name = $this->user->name ?? '';
        $words = explode(' ', trim($name));
        
        if (count($words) >= 2) {
            return strtoupper(substr($words[0], 0, 1) . substr($words[1], 0, 1));
        }
        
        return strtoupper(substr($name, 0, 2));
    }

    // Get background color for avatar based on name
    public function getAvatarColorAttribute(): string
    {
        $colors = [
            '#EF4444', '#F97316', '#F59E0B', '#EAB308', '#84CC16',
            '#22C55E', '#10B981', '#14B8A6', '#06B6D4', '#0EA5E9',
            '#3B82F6', '#6366F1', '#8B5CF6', '#A855F7', '#D946EF',
            '#EC4899', '#F43F5E'
        ];
        
        $name = $this->user->name ?? '';
        $index = strlen($name) % count($colors);
        
        return $colors[$index];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($doctor) {
            // Load the user relationship if not already loaded
            if (!$doctor->relationLoaded('user') && $doctor->user_id) {
                $doctor->load('user');
            }
            
            if ($doctor->user && !$doctor->slug) {
                $doctor->slug = static::generateUniqueSlug($doctor->user->name);
            }
        });

        static::updating(function ($doctor) {
            // Load the user relationship if not already loaded and user_id has changed
            if ($doctor->isDirty('user_id') && !$doctor->relationLoaded('user')) {
                $doctor->load('user');
            }
            
            if ($doctor->user && $doctor->isDirty('user_id')) {
                $doctor->slug = static::generateUniqueSlug($doctor->user->name, $doctor->id);
            }
        });
    }

    protected static function generateUniqueSlug($name, $excludeId = null)
    {
        $baseSlug = Str::slug($name);
        $slug = $baseSlug;
        $count = 1;

        while (static::where('slug', $slug)
            ->when($excludeId, function ($query) use ($excludeId) {
                return $query->where('id', '!=', $excludeId);
            })
            ->exists()) {
            $slug = $baseSlug . '-' . $count++;
        }

        return $slug;
    }
     // Relationship with DoctorProfile (one-to-one)
    public function doctorProfile()
    {
        return $this->hasOne(DoctorProfile::class);
    }
}
