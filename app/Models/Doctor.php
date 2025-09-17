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

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }

    // Accessor for name via user relationship
    public function getNameAttribute(): string
    {
        return $this->user->name ?? '';
    }

    // Accessor for email via user relationship
    public function getEmailAttribute(): string
    {
        return $this->user->email ?? '';
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($doctor) {
            if ($doctor->user && !$doctor->slug) {
                $doctor->slug = static::generateUniqueSlug($doctor->user->name);
            }
        });

        static::updating(function ($doctor) {
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
}
