<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Atraction;
use App\Models\AtractionCategory;
use App\Models\AtractionGallery;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AtractionCategorySeeder::class,
            AtractionGallerySeeder::class,
            AtractionSeeder::class,
            EventGallerySeeder::class,
            EventSeeder::class,
            PackageSeeder::class,
            PackageGallerySeeder::class,
            PackageFacilitySeeder::class,
            ProductCategorySeeder::class,
            ProductSeeder::class
        ]);
        User::factory(2)->create();
    }
}
