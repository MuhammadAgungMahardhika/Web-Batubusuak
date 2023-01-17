<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\EventGallery;
use Illuminate\Database\Seeder;

class EventGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EventGallery::create(['event_id' => 1, 'url' => 'PATAMUAN.JPG']);
    }
}
