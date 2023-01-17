<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public function package_facilities()
    {
        return $this->hasMany(PackageFacility::class, 'package_id', 'id');
    }

    public function package_galleries()
    {
        return $this->hasMany(PackageGallery::class, 'package_id', 'id');
    }
}
