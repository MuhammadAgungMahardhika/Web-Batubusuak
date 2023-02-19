<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'name' => 'Pulut durian',
            'product_category_id' => 1,
            'description' => 'Desa batu busuk merupakan desa yang banyak memproduksi buah durian, durian batu busuk memiliki rasa yang manis, cocok dimakan dengan beras ketan. Kuliner ini banyak di buru saat musim durian.'
        ]);
        Product::create([
            'name' => 'Teh gaharu plus ',
            'product_category_id' => 1,
            'contact_person' => '083114785257',
            'description' => 'Teh herbal gaharu plus merupakan teh herbal yang diproses dan dikemas dengan higenis. Teh herbal ini kaya antioksidan yang berfungsi sebagai pencegah radikal bebas di dalam tubuh. Tak hanya itu memiliki manfaat untuk kesehatan.
            Teh gaharu plus memiliki beberapa varian yaitu 
            1.	Teh gaharu plus original yang terbuat dari 100% daun gaharu pilihan dan berkualitas. 
            2.	Teh gaharu plus air mata pengantin yang terbuat dari kombinasi daun gaharu, daun teh, bunga air mata pengantin, dan daun stevia. 
            3.	Teh gaharu plus gambir. teh herbal ini terbuat dari kombinasi daun gaharu dan daun gambir pilihan, sereh, serta daun stevia.'
        ]);
        Product::create([
            'name' => 'Madu kelulut',
            'product_category_id' => 1,
            'contact_person' => '081268120449',
            'description' => 'Madu kelulut madu yang dihasilkan dari lebah galo galo. Madu ini diproses dan dikemas secara higenis. Madu ini mengandung anti oksidan, vitamin c, dan vitamin b yang baik untuk kesehatan seperti menjaga daya tahan tubuh, dan penyakit lainnya.'
        ]);
        Product::create([
            'name' => 'Kerajian tangan',
            'product_category_id' => 2,
            'contact_person' => '081218699290',
            'description' => 'Kerajinan tangan memiliki keunikan sendiri yaitu terbuat dari limbah plastik, dengan membeli ini kita sudah termasuk bagian dari penyelamatan bumi. Limbah plastik ini diubah menjadi kerajian tangan yang menarik seperti gantungan kunci, tempat tumblr, tas dan dompet yang tak kalah cantik.'
        ]);
        Product::create([
            'name' => 'Eco enzyme',
            'product_category_id' => 2,
            'contact_person' => '081218699290',
            'description' => 'Eco ezyme merupakan hasil fermentasi limbah sampah organik yang bisa digunakan sebagai cairan pembersih lantai pembersih kamar mandi, pembersih areal dapur, dan pupuk organik. Pengunaan eco enzyme merupakan langkah sederhana kita untuk melindungi bumi.'
        ]);
    }
}
