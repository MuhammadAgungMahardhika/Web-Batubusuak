<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccomodationGallery extends Model
{
    use HasFactory;

    /**
     * Get the accomodation that owns the accomodation_galleries
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function accomodation()
    {
        return $this->belongsTo(Accomodation::class);
    }
}
