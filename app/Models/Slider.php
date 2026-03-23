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
        'status'
    ];
    protected $casts = [
        'status' => PublishStatus::class
    ];
}
