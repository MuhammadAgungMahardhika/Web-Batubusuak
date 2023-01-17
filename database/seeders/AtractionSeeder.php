<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Atraction;

class AtractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Atraction::create(
            [
                'name' => 'Patamuan',
                'atraction_category_id' => 1,
                'price' => 'GRATIS',
                'open' => '08:00:00',
                'close' => '17:00:00',
                'description' => 'Patamuan salah satu objek wisata batu busuk yang sangat terkenal. Keunikan dari patamuan ini yaitu bertemunya 2 aliran sungai, di mana satu aliran sungai keruh dan satu aliran lagi jernih. Oleh karena itu, tempat ini dinamai patamuan oleh masyarakat yang artinya pertemuan.  Selain itu, di sini terdapat bendungan Pembangkit Listrik Tenaga Air (PLTA) peninggalan Belanda. Objek wisata ini berjarak ± 6,5 km dari gerbang utama Universitas Andalas, atau ± 17,5 km dari pusat kota Padang dan hanya bisa ditempuh dengan menggunakan kendaraan roda dua. Masuk objek wisata ini tidak dipungut biaya, kita hanya perlu membayar biaya parkir sebesar Rp. 2000.- per kendaraan.'
            ]
        );
        Atraction::create(
            [
                'name' => 'Saringan',
                'atraction_category_id' => 1,
                'price' => 'GRATIS',
                'open' => '08:00:00',
                'close' => '17:00:00',
                'description' => 'Objek wisata yang satu ini salah satu objek wisata yang cukup ramai di datangi oleh pengunjung. Di sini kalian dapat menikmati mengalir di atas saluran saringan PLTA dengan menggunakan ban. Sensasi yang di dapatkan seperti menaiki seluncuran di wahana waterpark. Objek wisata  ini berjarak ± 15,3 km dari pusat kota Padang atau ± 4,3 km dari gerbang Universitas Andalas, dan dapat ditempuh menggunakan kendaraan roda dua. Kalian hanya perlu membayar sewa ban sebesar Rp. 10.000.- dan biaya parkir sebesar Rp. 2000.- per kendaraan.'
            ]
        );
        Atraction::create(
            [
                'name' => 'Lubuk Biru',
                'atraction_category_id' => 1,
                'price' => 'GRATIS',
                'open' => '08:00:00',
                'close' => '17:00:00',
                'description' => 'Objek wisata satu ini dinamai lubuk biru karena air pada tempat ini berwarna biru yang membuat kita ingin segera masuk ke dalam air. Objek wisata ini berjarak ± 17 km dari pusat kota Padang  atau 6 km dari gerbang utama Universitas Andalas, dan hanya bisa ditempuh dengan kendaraan roda dua. Untuk masuk objek wisata ini tidak di pungut biaya hanya perlu membayar parkir sebesar Rp. 2000.- per kendaraan. '
            ]
        );
        Atraction::create(
            [
                'name' => 'Jembatan Kuning',
                'atraction_category_id' => 1,
                'price' => 'GRATIS',
                'open' => '08:00:00',
                'close' => '17:00:00',
                'description' => 'Bagi kamu suka bersua foto, jembatan ini tidak kalah estetik untuk bersua foto. Jembatan ini memiliki keindahan tersendiri jika dilihat dari bawah. Dari atas jembatan kita disuguhkan dengan pemandangan alam yang luar biasa. Jarak jembatan ini ± 16 km dari pusat kota Padang atau 5 km dari gerbang Universitas Andalas. Akses ke jembatan ini bisa ditempuh dengan menggunakan kendaraan roda dua. Namun, sayangya tidak dapat lahan parkir yang luas.'
            ]
        );
        Atraction::create(
            [
                'name' => 'Lubuk Mande Rubiah',
                'atraction_category_id' => 1,
                'price' => 'GRATIS',
                'open' => '08:00:00',
                'close' => '17:00:00',
                'description' => 'Tempat pemandian satu ini memiliki ciri khas yang unik yaitu terdapat ikan-ikan yang dapat dilihat dari permukaan air, hal ini dikarenakan air pada tempat ini berwarna biru dan jernih sehingga ikan-ikan dapat terlihat dengan jelas. Selain itu, kita dapat melihat keindahan jembatan gantung dari tempat pemandian. Objek wisata ini berjarak ± 15,5 km dari pusat kota Padang atau 4,5 km dari gerbang utama Universitas Andalas dan dapat diakses menggunakan kendaraan roda dua. Kalian hanya perlu membayar parkir sebesar Rp. 2000.- per kendaraan.'
            ]
        );
        Atraction::create(
            [
                'name' => 'Jembatan Gantung',
                'atraction_category_id' => 1,
                'price' => 'GRATIS',
                'open' => '08:00:00',
                'close' => '17:00:00',
                'description' => 'Jembatan gantung ini berada satu kawasan Pemandian Lubuk Mande Rubiah. Jembatan ini menghubungkan jalan utama batu busuk dengan bagian batu busuk yang berada di seberang sungai. Di atas jembatan ini kalian bisa melihat jernihnya air sungai dan ikan-ikan yang hidup di dalamnya. Jarak jembatan ini dari pusat kota Padang ± 15,5 km atau ± 4,5 km dari gerbang utama Universitas Andalas. Jembatan ini hanya bisa diakses dengan menggunakan kendaraan roda dua. Dan hanya perlu membayar parkir sebesar Rp. 2000.- per kendaraan.'
            ]
        );
        Atraction::create(
            [
                'name' => 'Mushalla Gerbang Langit',
                'atraction_category_id' => 3,
                'price' => 'GRATIS',
                'open' => '08:00:00',
                'close' => '17:00:00',
                'description' => 'Mushalla ini berada di dekat Pemandian Mande Rubiah, mushalla ini diresmikan oleh langsung oleh Wakil Gubenur Sumatera Barat Nasrul Abit pada tahun 2018. Mushalla ini terletak lebih tinggi di bandingkan dengan bangunan lain sehingga apabila kita berada di mushalla ini disuguhkan dengan pemandangan alam yang sangat indah. Dari mushalla ini kita bisa melihat hamparan sawah yang mengelilingi mushalla, sungai yang sangat indah dan di belakangnya terdapat pemandangan bukit  barisan yang tidak kalah menarik. Musholla ini berjarak ±15,5 km dari pusat Kota Padang dan 4,5 km dari  gerbang utama Universitas Andalas dan dapat diakses menggunakan kendaraan roda dua dengan biaya parkir sebesar Rp. 2000.-'
            ]
        );
        Atraction::create(
            [
                'name' => 'Eduagrowisata galo-galo',
                'atraction_category_id' => 1,
                'price' => 'GRATIS',
                'open' => '08:00:00',
                'close' => '17:00:00',
                'description' => 'Desa batu busuk ini bukan hanya indah akan alamnya tapi di batu busuk ini terdapat objek wisata untuk menambah pengetahuan kita semua, salah satunya Eduagrowisata Galo-Galo ini. Di sini kita dapat belajar langsung dari ahlinya mengenai lebah galo-galo ini, tak hanya itu kita juga bisa mencicipi madu lebah galo-galo secara langsung. Jarak tempat ini ± 15,2 km dari pusat Kota Padang atau ±4,2 km dari gerbang utama Universitas Andalas. Tempat ini dapat diakses menggunakan kendaraan roda dua dan roda empat. Harga tiket masuk ke eduagrowisata galo-galo ini gratis  dan biaya parkir sebesar Rp. 2000.- untuk kendaraan roda dua dan Rp. 5000.- untuk kendaraan roda empat. '
            ]
        );
        Atraction::create(
            [
                'name' => 'PLTA Kuranji',
                'atraction_category_id' => 2,
                'price' => 'GRATIS',
                'open' => '08:00:00',
                'close' => '17:00:00',
                'description' => 'Di tempat ini kita dapat belajar dan melihat alat pembangkit listrik tenaga air sudah ada sejak tahun 1938. Masuk ke PLTA ini tidak dipungut biaya, namun kalian perlu meminta izin untuk dapat melihat alat pembangkit listrik ini. Jarak PLTA ini dari pusat Kota Padang ± 14,5 km atau ± 3,5 km dari gerbang utama Universitas Andalas. PLTA ini dapat diakses dengan menggunakan kendaraan roda dua dan kendaraan roda 4. hanya biaya parkir sebesar Rp. 2000.- untuk kendaraan roda dua dan Rp. 5000.- untuk kendaraan roda 4.'
            ]
        );
        Atraction::create(
            [
                'name' => 'Pipa Besar Peninggalan Belanda',
                'atraction_category_id' => 2,
                'price' => 'GRATIS',
                'open' => '08:00:00',
                'close' => '17:00:00',
                'description' => 'Pipa besar ini dulunya digunakan untuk mengaliri air dari saringan ke PLTA dengan kemiringan tertentu. Uniknya pipa ini berada di atas jalan utama desa batu busuk sehingga seperti gapura selamat datang. Pipa besar ini tak kalah estetik untuk kita bersua foto. Pipa besar ini berjarak ± 3,5 km dari gerbang utama Universitas Andalas atau ± 14,5 km dari pusat Kota Padang. Tempat ini dapat diakses dengan kendaraan roda dua dan roda empat dan kalian hanya perlu membayar biaya parkir kalau berkunjung ke tempat ini. Biaya parkir sebesar Rp. 2000.- untuk kendaraan roda dua dan Rp. 5000.- untuk kendaraan roda empat.'
            ]
        );
    }
}
