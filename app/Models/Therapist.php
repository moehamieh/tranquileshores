<?php

namespace App\Models;

use App\PublishStatus;
use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
    protected $fillable = [
        'name', 'slug', 'role', 'image', 'phone', 'office_phone', 'email', 'bio',
        'education', 'certification', 'expertise', 'practice_years',
        'social_links', 'tags', 'status', 'booking_url'
    ];

    protected static function booted()
    {
        static::saving(function ($therapist) {
            if ($therapist->isDirty('name')) {
                $therapist->slug = \Illuminate\Support\Str::slug($therapist->name);
            }
        });
    }
    protected $casts = [
        'education' => 'array',
        'social_links' => 'array',
        'tags' => 'array',
        'status' => PublishStatus::class,
    ];
    public function getImageUrlAttribute()
    {
        $value = $this->attributes['image'] ?? null;
        if (!$value) return null;
        if (str_starts_with($value, 'http') || str_starts_with($value, 'front/')) {
            return $value;
        }
        return 'storage/' . $value;
    }
    public function scopePublished($query) {
        return $query->where('status', PublishStatus::Published);
    }
    public function posts() {
        return $this->hasMany(Post::class, 'author_id');
    }
}
