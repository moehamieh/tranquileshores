<?php

namespace App\Models;

use App\PublishStatus;
use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{
    protected $fillable = [
        'title', 'price', 'unit', 'description', 'features', 'icon', 'order', 'status'
    ];
    protected $casts = [
        'features' => 'array',
        'status' => PublishStatus::class,
    ];
    public function scopePublished($query) {
        return $query->where('status', PublishStatus::Published);
    }
}
