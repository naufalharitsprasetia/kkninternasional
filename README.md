<!-- @format -->

# KKN INTERNASIONAL MALAYSIA A - UNIDA GONTOR

**KKN (Kuliah Kerja Nyata)** adalah sebuah kegiatan yang melatih mahasiswa untuk terjun di masyarakat. Aplikasi ini dikembangkan menggunakan **Laravel** sebagai framework backend.

## Persyaratan

Sebelum memulai, pastikan perangkat Anda memiliki:

- PHP >= 8.0
- Composer
- MySQL atau PostgreSQL (untuk database)

## Cara Menginstal Aplikasi

Berikut adalah langkah-langkah untuk menginstal dan menjalankan **Tafsil.id** di perangkat Anda.

### 1. Clone Repository

Mulai dengan meng-clone repository aplikasi ini:

```bash
git clone https://github.com/naufalharitsprasetia/kkninternasional.git
```

Ganti username dengan nama pengguna GitHub Anda (atau tempat repository disimpan).

### 2. Masuk ke Direktori Proyek

```bash
cd kkninternasional
```

### 3. Install Dependency Composer

Jalankan perintah berikut untuk mengunduh dan menginstal dependency PHP melalui Composer:

```bash
composer install
```

### 4. Konfigurasi File .env

Salin file .env.example menjadi .env dan sesuaikan konfigurasi sesuai dengan kebutuhan sistem Anda:

```bash
cp .env.example .env
```

Edit file .env dan atur koneksi database sesuai konfigurasi database lokal Anda:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kkninter
DB_USERNAME=root
DB_PASSWORD=your_password
```

Sesuaikan DB_DATABASE, DB_USERNAME, dan DB_PASSWORD dengan informasi database Anda.

### 5. Generate Application Key

Jalankan perintah berikut untuk menghasilkan kunci aplikasi Laravel:

```bash
php artisan key:generate
```

### 6. Migrasi dan Seed Database

Jalankan migrasi untuk membuat tabel di database dan, jika perlu, jalankan seeder untuk memasukkan data awal:

```bash
php artisan migrate:fresh --seed
```

### 7. Jalankan Aplikasi

Sekarang, jalankan server lokal Laravel:

```bash
php artisan serve
```

Aplikasi akan berjalan di http://localhost:8000.

### Troubleshooting

Jika Anda menghadapi masalah selama instalasi, pastikan untuk:

Mengecek versi PHP dan Composer.
Memastikan composer install berjalan tanpa kesalahan.
Memastikan konfigurasi .env benar, khususnya bagian database.

README ini sepenuhnya dalam format **Markdown** yang siap diimplementasikan ke proyek **KKN INTERNASIONAL**.
