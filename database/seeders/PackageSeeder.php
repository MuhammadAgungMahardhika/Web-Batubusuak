<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Package::create([
            'name' => 'Outing class (Paud/SD)',
            'price' => '410000',
            'contact_person' => '082286328917',
            'description' => 'Outing class sangat cocok ni buat anak anak, karena pada paket ini kita dapat bermain sambil belajar. Dengan metode ini membuat lebih mudah diingat dan mudah di pahami karena melihat langsung di lapangan. Pada paket ini kalian hanya perlu membayar RP 410.000.- untuk 20 anak dengan fasilitas pemandu, kunjungan ke PLTA, kunjungan ke agroeduwisata lebah galo-galo, mencicipi madu dan teh gaharu, snack, free produk kreatif khas batu busuk, tiket masuk pemandian mande rubiah, dan parkir.'

        ]);
        Package::create([
            'name' => 'Camping',
            'price' => '185000',
            'contact_person' => '082283171954/082214175837',
            'description' => 'Kegiatan camping sangat cocok buat kamu yang mencari hiburan dengan suasana alam yang indah dan asri. Paket indian glamping di ekowisata padang janiah menjadi salah satu solusinya cukup membayar Rp. 185.000.-  sudah termasuk tenda dan fasilitas tidur untuk tiga orang, sarapan, wahana Spot Forest Healing, Ayunan Aesthetic, Jogging Track, dan pemandangan berbagai spot seperti Panorama Bukit Tabuk, Panorama Puncak Ubi, Panorama Lubuk Gadang Jembatan Kanal PLTA Peninggalan Belanda.'
        ]);
        Package::create([
            'name' => 'Paket makan durian kamek  sepuasnya di ladang nan janiah',
            'price' => '97500',
            'contact_person' => '082283171954/082214175837',
            'description' => 'Kegiatan makan Durian sepuasnya di Kampung Batu Busuk.'
        ]);
    }
}
