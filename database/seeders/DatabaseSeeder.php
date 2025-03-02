<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Departement;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Division;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'KKN INTERNASIONAL',
            'email' => 'kkninter@gmail.com',
            'password' => bcrypt('bismillah'), // Enkripsi password
        ]);
        Division::create([
            'id' => Str::uuid(),
            'nama' => 'Sanggar Bimbingan',
            'urutan' => 1
        ]);
        // Division::create([
        //     'id' => Str::uuid(),
        //     'nama' => 'Lainnya',
        //     'urutan' => 2
        // ]);
        $this->call([
            BlogSeeder::class,
            DepartementSeeder::class,
        ]);
    }
}