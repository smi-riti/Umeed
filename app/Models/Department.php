<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Department extends Model
{
    protected $fillable = ['name', 'slug', 'status'];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function doctors(): HasMany
    {
        return $this->hasMany(Doctor::class);
    }

    public function getDoctorsCountAttribute(): int
    {
        return $this->doctors()->count();
    }

    public function canBeDeleted(): bool
    {
        return !$this->doctors()->exists();
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($department) {
            $department->slug = static::generateUniqueSlug($department->name);
        });

        static::updating(function ($department) {
            if ($department->isDirty('name')) {
                $department->slug = static::generateUniqueSlug($department->name, $department->id);
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