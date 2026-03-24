<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'type'];

    protected static function booted()
    {
        static::saving(function ($model) {
            if ($model->isDirty('name') || !$model->slug) {
                $model->slug = Str::slug($model->name);
            }
        });
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }
    public function services() {
        return $this->hasMany(Service::class);
    }
}
