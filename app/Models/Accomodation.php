<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AccomodationGallery;

class Accomodation extends Model
{
    use HasFactory;
    public function accomodation_gallery()
    {
        return $this->hasMany(AccomodationGallery::class, 'accomodation_id', 'id');
    }
}
