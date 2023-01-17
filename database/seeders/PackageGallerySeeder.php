<?php

namespace Database\Seeders;

use App\Models\PackageGallery;
use Illuminate\Database\Seeder;

class PackageGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PackageGallery::create(['package_id' => 1, 'url' => 'PATAMUAN.JPG']);
        PackageGallery::create(['package_id' => 1, 'url' => 'PATAMUAN.JPG']);
        PackageGallery::create(['package_id' => 2, 'url' => 'PATAMUAN.JPG']);
        PackageGallery::create(['package_id' => 3, 'url' => 'PATAMUAN.JPG']);
    }
}
