<?php

namespace App\Models;

use App\PublishStatus;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'slug', 'main_image', 'additional_images', 'summary', 'content',
        'author_id', 'category_id', 'status', 'published_at'
    ];

    protected static function booted()
    {
        static::saving(function ($post) {
            if ($post->isDirty('title')) {
                $post->slug = \Illuminate\Support\Str::slug($post->title);
            }
        });
    }
    protected $casts = [
        'additional_images' => 'array',
        'published_at' => 'datetime',
        'status' => PublishStatus::class,
    ];
    public function author() {
        return $this->belongsTo(Therapist::class, 'author_id');
    }
    public function getMainImageUrlAttribute()
    {
        $value = $this->attributes['main_image'] ?? null;
        if (!$value) return null;
        if (str_starts_with($value, 'http') || str_starts_with($value, 'front/')) {
            return $value;
        }
        return 'storage/' . $value;
    }

    public function getAdditionalImagesUrlsAttribute()
    {
        $value = $this->attributes['additional_images'] ?? null;
        if (!$value) return [];
        $images = is_string($value) ? json_decode($value, true) : $value;
        if (!is_array($images)) return [];

        return array_map(function ($img) {
            if (str_starts_with($img, 'http') || str_starts_with($img, 'front/')) {
                return $img;
            }
            return 'storage/' . $img;
        }, $images);
    }
    public function scopePublished($query) {
        return $query->where('status', PublishStatus::Published);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
