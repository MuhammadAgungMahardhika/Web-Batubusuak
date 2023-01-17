<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AtractionGallery;

class AtractionGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AtractionGallery::create(
            [
                'atraction_id' => 1,
                'url' => 'PATAMUAN.JPG'
            ]
        );
        AtractionGallery::create(
            [
                'atraction_id' => 1,
                'url' => 'PATAMUAN-3.JPG'
            ]
        );
        AtractionGallery::create(
            [
                'atraction_id' => 2,
                'url' => ''
            ]
        );
        AtractionGallery::create(
            [
                'atraction_id' => 2,
                'url' => ''
            ]
        );
        AtractionGallery::create(
            [
                'atraction_id' => 3,
                'url' => 'LUBUAK-BIRU.JPG'
            ]
        );
        AtractionGallery::create(
            [
                'atraction_id' => 3,
                'url' => 'LUBUAK-BIRU-2.JPG'
            ]
        );
        AtractionGallery::create(
            [
                'atraction_id' => 4,
                'url' => 'JEMBATAN-SARINGAN.JPG'
            ]
        );
        AtractionGallery::create(
            [
                'atraction_id' => 4,
                'url' => 'JEMBATAN-SARINGAN-2.JPG'
            ]
        );
        AtractionGallery::create(
            [
                'atraction_id' => 5,
                'url' => 'LUBUAK-MANDE-RUBIAH.JPG'
            ]
        );
        AtractionGallery::create(
            [
                'atraction_id' => 6,
                'url' => 'JEMBATAN-LAYANG.JPG'
            ]
        );
        AtractionGallery::create(
            [
                'atraction_id' => 6,
                'url' => 'JEMBATAN-LAYANG-2.JPG'
            ]
        );
        AtractionGallery::create(
            [
                'atraction_id' => 6,
                'url' => 'JEMBATAN-LAYANG-3.JPG'
            ]
        );
        AtractionGallery::create(
            [
                'atraction_id' => 7,
                'url' => 'MUSHALLA-GERBANG-LANGIT.JPG'
            ]
        );
        AtractionGallery::create(
            [
                'atraction_id' => 8,
                'url' => ''
            ]
        );
        AtractionGallery::create(
            [
                'atraction_id' => 9,
                'url' => 'MUSEUM-SEJARAH.JPG'
            ]
        );
        AtractionGallery::create(
            [
                'atraction_id' => 9,
                'url' => 'MUSEUM-SEJARAH-2.JPG'
            ]
        );
        AtractionGallery::create(
            [
                'atraction_id' => 9,
                'url' => 'MUSEUM-SEJARAH-3.JPG'
            ]
        );
        AtractionGallery::create(
            [
                'atraction_id' => 9,
                'url' => 'MUSEUM-SEJARAH-4.JPG'
            ]
        );
        AtractionGallery::create(
            [
                'atraction_id' => 9,
                'url' => 'MUSEUM-SEJARAH-5.JPG'
            ]
        );
        AtractionGallery::create(
            [
                'atraction_id' => 9,
                'url' => 'MUSEUM-SEJARAH-6.JPG'
            ]
        );
    }
}
