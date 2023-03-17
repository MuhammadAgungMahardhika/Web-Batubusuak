<?php

namespace Database\Seeders;

use App\Models\ProductGallery;
use Illuminate\Database\Seeder;

class ProductGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductGallery::create([
            'product_id' => 1,
            'url' => 'LUBUAK-BIRU.JPG'
        ]);
    }
}
