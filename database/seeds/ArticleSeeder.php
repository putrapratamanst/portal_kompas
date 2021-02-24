<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();
        DB::table('articles')->insert([
            'author_id'      => 1,
            'title'          => "Suatu Sore di Pelabuhan Sunda Kelapa",
            'body'           => "Suatu sore yang terik pada pertengahan Februari 2019, sejumlah remaja naik ke atas kapal layar motor Sinar Keluarga yang bersandar di Pelabuhan Sunda Kelapa, Jakarta Utara. Sesampainya di anjong (segitiga penyeimbang) yang berada di bagian depan kapal, mereka bergantian melompat. Byur, byur, prakk suara tubuh bertemu dengan air laut, susul menyusul. Sementara buruh bongkar muat di sebelahnya terus bekerja, mengangkut muatan, memindahkan barang dari truk ke kapal.",
            'page_view'      => 100000,
            'photo'          => "https://upload.wikimedia.org/wikipedia/commons/7/76/Pinisi_Sunda_Kelapa.jpg",
            'status'         => 1,
            'published_date' => Carbon::parse("2020-01-02"),
            'created_at'     => Carbon::now()
        ]);

        DB::table('articles')->insert([
            'author_id'      => 2,
            'title'          => "Gosip Merger Perusahaan Teknologi di Sekitar Kita",
            'body'           => "Kabar rencana merger antara Gojek dan Grab serta Gojek dan Tokopedia menarik dicermati karena melibatkan dana yang sangat besar dan dapat mengubah dominasi bisnis berbasis daring.",
            'page_view'      => 150000,
            'photo'          => "https://www.senayanpost.com/uploads/images/2021/01/image_750x_5ffd21316fbae.jpg",
            'status'         => 1,
            'published_date' => Carbon::parse("2020-01-04"),
            'created_at'     => Carbon::now()
        ]);

        DB::table('articles')->insert([
            'author_id'      => 3,
            'title'          => "Universitas Lampung KKN Tatap Muka, 4.300 Mahasiswa Wajib Tes Cepat",
            'body'           => "Sebanyak 4.300 mahasiswa Universitas Lampung akan mengikuti kegiatan Kuliah Kerja Nyata (KKN) tatap muka mulai 26 Januari 2021. Sebelum diterjunkan ke desa-desa, para mahasiswa itu wajib menjalani tes cepat Covid-19.",
            'page_view'      => 300000,
            'photo'          => "https://i0.wp.com/quipperhome.wpcomstaging.com/wp-content/uploads/2017/01/9d13f-1.1-1-min.jpg?fit=4000%2C3000&ssl=1",
            'status'         => 1,
            'published_date' => Carbon::parse("2020-01-04"),
            'created_at'     => Carbon::now()
        ]);

        DB::table('articles')->insert([
            'author_id'      => 4,
            'title'          => "Kisah Berulang Penguasaan Partai di Sumatera Barat",
            'body'           => "Meski memiliki modal penguasaan hingga dua pertiga wilayah di Sumbar dalam Pemilu 2019, mesin partai dari Gerindra kesulitan untuk mengulang dominasi serupa dalam Pilkada 2020.",
            'page_view'      => 300000,
            'photo'          => "https://asset.kompas.com/data/photo/2014/08/10/1818017painann780x390.jpg",
            'status'         => 1,
            'published_date' => Carbon::parse("2020-09-20"),
            'created_at'     => Carbon::now()
        ]);

        DB::table('articles')->insert([
            'author_id'      => 5,
            'title'          => "Kapolda Metro Jaya Beri Tugas Penanganan Covid-19 kepada 15 Pejabat Baru",
            'body'           => "nspektur Jenderal M Fadil Imran meminta para pejabat baru segera melakukan langkah-langkah taktis yang tidak tanggung-tanggung di lapangan guna turut mengendalikan wabah Covid-19.",
            'page_view'      => 300000,
            'photo'          => "https://images.bisnis-cdn.com/posts/2020/01/15/1190697/promoter-polda.jpg",
            'status'         => 1,
            'published_date' => Carbon::parse("2020-12-31"),
            'created_at'     => Carbon::now()
        ]);

    }
}
