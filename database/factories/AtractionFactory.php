<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AtractionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'PATAMUAN',
            'atraction_category_id' => 1,
            'price' => 'GRATIS',
            'open' => '08:00:00',
            'close' => '17:00:00',
            'description' => 'Patamuan salah satu objek wisata batu busuk yang sangat terkenal. Keunikan dari patamuan ini yaitu bertemunya 2 aliran sungai, di mana satu aliran sungai keruh dan satu aliran lagi jernih. Oleh karena itu, tempat ini dinamai patamuan oleh masyarakat yang artinya pertemuan.  Selain itu, di sini terdapat bendungan Pembangkit Listrik Tenaga Air (PLTA) peninggalan Belanda. Objek wisata ini berjarak ± 6,5 km dari gerbang utama Universitas Andalas, atau ± 17,5 km dari pusat kota Padang dan hanya bisa ditempuh dengan menggunakan kendaraan roda dua. Masuk objek wisata ini tidak dipungut biaya, kita hanya perlu membayar biaya parkir sebesar Rp. 2000.- per kendaraan'

        ];
    }
}
