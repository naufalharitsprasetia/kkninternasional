<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'id' => '2c79a8f3-c344-4633-9de7-6555136bdba2',
            'user_id' => 1,
            'judul' => 'MUKER (Musyawarah Kerja)',
            'isi' => '

Halo Bumi Darussalam 👋

Pada tanggal 18 Agustus 2024 telah terlaksana \"Musyawarah Kerja Dewan Mahasiswa Kabinet Hadisatya 2024-2025\". Acara dibuka oleh Al-Ustadz Muhammad Wahyudi, M.Pd. Beliau menyampaikan \"Suatu organisasi itu harus 5T : Ter-ukur, Ter-arah, Ter-organisir, Ter-kawal, dan Ter-opini\". Musyawarah kerja ini sebagai pondasi awal acara-acara dan program kerja Dewan Mahasiswa untuk 1 tahun kedepan.

Semoga apa yang sudah direncakan bisa terealisasikan dan untuk semua Dewan Mahasiswa baru bisa istiqamah dalam menjalankan amanah ini.

',
            'image' => 'blogs/zPGoPldn0NfvQWGeU5vvb08cZMwF2VYvnCwEIAX1.jpg',
            'link_dokumentasi' => NULL,
            'created_at' => '2024-10-26 13:49:00',
            'updated_at' => NULL
        ]);


        Blog::create([
            'id' => '497d88db-3a02-45fe-aa33-7d01e7952cf3',
            'user_id' => 1,
            'judul' => 'Gebyar Kemerdekaan',
            'isi' => '

Halo Bumi Darussalam 👋

Masih dalam semarak Dirgahayu Kemerdekaan Republik Indonesia ke-79, di tanggal 30 Agustus 2024 UNIDA Gontor mengadakan Gebyar Kemerdekaan yang diikuti oleh seluruh civitas akademika. Acara ini dimulai dengan senam bersama, jalan sehat, dan pembagian doorprize bagi peserta yang beruntung.🏆

Semoga acara Gebyar Kemerdekaan kali ini dapat mempererat tali persaudaraan dan menyalakan semangat cinta tanah air dalam diri kita semua.

\"Dirgahayu Indonesiaku!\"

',
            'image' => 'blogs/bgDgO1A5J05ZJ1RoyVKC3ToQgIQFMeAfv1zTIX6U.jpg',
            'link_dokumentasi' => 'https://drive.google.com/drive/folders/18WGk9bvIrmYjjOeLWmMJumF3TU0ANRHf?usp=drive_link',
            'created_at' => '2024-10-26 14:48:14',
            'updated_at' => NULL
        ]);


        Blog::create([
            'id' => '4a945dfe-2a2b-4734-af66-52ed5ef61ed9',
            'user_id' => 1,
            'judul' => 'PERINGATAN G30S-PKI',
            'isi' => '

Halo Bumi Darussalam 👋

Di hari peringatan G30S-PKI, mari kita refleksikan perjalanan sejarah yang telah membentuk bangsa ini. Setiap detik yang berlalu adalah pengingat untuk kita menjaga keutuhan dan persatuan.

Kita adalah penjaga nilai-nilai Pancasila. Semoga semangat ini selalu membara, menghadapi tantangan demi masa depan yang lebih baik dan harmonis.

\"Jangan Lupa Sejarah,
Jaga Harmoni Bangsa\".

',
            'image' => 'blogs/HFMwqZLcReuc8dG12llXcSgZ5iSuOcIJddJH4dzf.jpg',
            'link_dokumentasi' => 'https://drive.google.com/drive/folders/19khQcbAno16RvDxfFRClUhAkGd-axuFD?usp=drive_link',
            'created_at' => '2024-10-26 14:52:55',
            'updated_at' => '2024-11-10 07:01:58'
        ]);


        Blog::create([
            'id' => '704461dd-4a15-4c24-9d1b-8bf31882a3dd',
            'user_id' => 1,
            'judul' => 'FUN RUN UNIDA GONTOR',
            'isi' => '

Halo Bumi Darussalam 👋

Pada Hari Jum\'at 6 Oktober 2024, Telah dilaksanakan Fun Run UNIDA Gontor. Acara ini bertujuan untuk membentuk mahasiswa yang Sehat dan Produktif. Acara dimulai dari depan Gedung Terpadu dan terus menggelilingi sekitar Desa Brahu

',
            'image' => 'blogs/QBkbRZcj6EEWWWMaBdGzbBjwMlpzVryIIchZtzAQ.jpg',
            'link_dokumentasi' => 'https://drive.google.com/drive/folders/1GF0jWAmh6V6sE-0DmHJ1bcQtV3CdHhYe?usp=drive_link',
            'created_at' => '2024-10-26 15:03:57',
            'updated_at' => NULL
        ]);


        Blog::create([
            'id' => '871809e4-90a7-47bb-a732-5c8fe8b577d0',
            'user_id' => 1,
            'judul' => 'Dirgahayu Kemerdekaan RI',
            'isi' => '

Halo Bumi Darussalam 👋

Pada tanggal 17 Agustus 2024 lalu seluruh Mahasiswa Universitas Darussalam Gontor telah melaksanakan upacara kemerdekaan Republik Indonesia yang ke 79. Acara berlangsung dengan khidmat yang dipimpin oleh Bapak Rektor Universitas Darussalam Gontor.

Di usia ke-79 Republik Indonesia! 79 tahun lalu, bangsa ini meraih kemerdekaan dengan tekad dan perjuangan. Kini, mari kita teruskan semangat itu dengan inovasi dan persatuan, membangun Indonesia yang lebih maju dan bersatu.



',
            'image' => 'blogs/iTTmDXcHf85EvivUE29BmdWvOOHDw8P2iBgQX8Xq.jpg',
            'link_dokumentasi' => 'https://drive.google.com/drive/folders/13Z6RfkmN81odo-6eatV3y1Epq0b9LIe8?usp=drive_link',
            'created_at' => '2024-10-26 14:01:13',
            'updated_at' => NULL
        ]);


        Blog::create([
            'id' => 'aa22d571-285f-49d1-9f13-d47882c23ed3',
            'user_id' => 1,
            'judul' => 'TABLIGH AKBAR HARI SANTRI NASIONAL',
            'isi' => '

Halo Bumi Darussalam 👋

Merajut kebersamaan dalam iman,
Tabligh Akbar, menguatkan langkah santri.
Menjadi cahaya di tengah kegelapan,
Dengan semangat, kita wujudkan perubahan.

Di hari santri, kita bersatu,
Mengangkat nilai-nilai luhur perjuangan.
Semoga setiap langkah membawa berkah,
Menuju masa depan yang lebih cerah.

',
            'image' => 'blogs/z157TEBaZ2g41C2vgd3kHY7XjfipIwjuJjZKFkds.jpg',
            'link_dokumentasi' => 'https://drive.google.com/drive/folders/1THI5LsdXIFTBcLUuyxtZiwZ5Zd-0vxcc?usp=drive_link',
            'created_at' => '2024-10-26 15:11:06',
            'updated_at' => NULL
        ]);
    }
}