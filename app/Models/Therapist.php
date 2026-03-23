<?php

namespace App\Models;

use App\PublishStatus;
use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
    protected $fillable = [
        'name', 'slug', 'role', 'image', 'phone', 'office_phone', 'email', 'bio',
        'education', 'certification', 'expertise', 'practice_years', 'min_price',
        'social_links', 'tags', 'status'
    ];
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
