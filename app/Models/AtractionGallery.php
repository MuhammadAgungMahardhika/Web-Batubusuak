<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtractionGallery extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function atraction()
    {
        return $this->belongsTo(Atraction::class, 'atraction_id');
    }
}
