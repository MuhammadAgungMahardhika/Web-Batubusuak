<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atraction extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function atraction_category()
    {
        return $this->belongsTo(AtractionCategory::class, 'atraction_category_id');
    }

    public function atraction_gallery()
    {
        return $this->hasMany(AtractionGallery::class, 'atraction_id');
    }
}
