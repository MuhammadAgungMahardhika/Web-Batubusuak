<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AtractionCategory;

class AtractionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AtractionCategory::create(
            ['category' => 'alam']
        );
        AtractionCategory::create(
            ['category' => 'sejarah']
        );
        AtractionCategory::create(
            ['category' => 'religi']
        );
        AtractionCategory::create(
            ['category' => 'air-terjun']
        );
    }
}
