<?php

namespace App\Models;

use App\PublishStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'phone_number',
        'alternative_phone',
        'email',
        'facebook',
        'instagram',
        'tiktok',
        'address',
        'status'
    ];
    protected $casts = [
    'status' => PublishStatus::class
];
}
