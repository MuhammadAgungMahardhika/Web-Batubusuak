<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Event::create(['name' => 'Kontest Durian', 'price' => 15000, 'date_start' => '2023:08:01', 'description' => 'tes']);
    }
}
