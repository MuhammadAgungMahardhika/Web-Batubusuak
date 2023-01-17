<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtractionCategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function atraction()
    {
        return $this->hasMany(Atraction::class);
    }
}
