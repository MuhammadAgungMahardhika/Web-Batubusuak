<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AtractionGalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'atraction_id' => 1,
            'url' => 'PATAMUAN.JPG'
        ];
    }
}
