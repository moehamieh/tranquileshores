<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'type'];

    protected static function booted()
    {
        static::saving(function ($category) {
            if ($category->isDirty('name')) {
                $category->slug = \Illuminate\Support\Str::slug($category->name);
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
