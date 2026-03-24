<?php

namespace App\Models;

use App\PublishStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'title',
        'slug',
        'subtitle',
        'description',
        'image',
        'category_id',
        'status',
        'order',
        'bg_color'
    ];
    public function category() {
        return $this->belongsTo(Category::class);
    }
    protected $casts = [
        'status' => PublishStatus::class
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
}
