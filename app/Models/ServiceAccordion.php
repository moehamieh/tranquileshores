<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceAccordion extends Model
{
    protected $fillable = ['service_id', 'title', 'content', 'order'];
    public function service() {
        return $this->belongsTo(Service::class);
    }
}
