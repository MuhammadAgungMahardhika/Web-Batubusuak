<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;


    public function event_gallery()
    {
        return $this->hasMany(EventGallery::class, 'event_id', 'id');
    }
}
