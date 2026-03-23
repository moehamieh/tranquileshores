<?php

namespace App\Models;

use App\PublishStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'title',
        'image',
        'description',
        'status',
        'order'
    ];
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
