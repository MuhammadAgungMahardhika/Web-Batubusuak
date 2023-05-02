<?php

namespace Database\Seeders;

use App\Models\Accomodation;
use Illuminate\Database\Seeder;

class AccomodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Accomodation::create([
            'name' => 'Rumah Da Harmen',
            'price' => '100000/malam',
            'description' => 'Rumah Da Harmen salah satu penginapan di Kampung Batu Busuk'
        ]);
    }
}
