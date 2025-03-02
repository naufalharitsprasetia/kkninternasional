<?php

namespace Database\Seeders;

use App\Models\Departement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Division;
use Illuminate\Support\Str;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisi1 = Division::where('nama', "Sanggar Bimbingan")->first();
        // $divisi2 = Division::where('nama', "Lainnya")->first();

        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi1->id,
            'nama' => 'SB Kampung Pandan',
            'singkatan' => '',
            'urutan' => 1
        ]);

        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi1->id,
            'nama' => 'SB Kampung Bharu',
            'singkatan' => '',
            'urutan' => 2
        ]);
        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi1->id,
            'nama' => 'SB Jalan Kebun',
            'singkatan' => '',
            'urutan' => 3
        ]);
        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi1->id,
            'nama' => 'SB Sentul',
            'singkatan' => '',
            'urutan' => 4
        ]);
        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi1->id,
            'nama' => 'SB Kepong',
            'singkatan' => '',
            'urutan' => 5
        ]);
        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi1->id,
            'nama' => 'SB Gombak Utara',
            'singkatan' => '',
            'urutan' => 6
        ]);
        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi1->id,
            'nama' => 'SB Beranang',
            'singkatan' => '',
            'urutan' => 7
        ]);
        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi1->id,
            'nama' => 'SB Hulu Klang',
            'singkatan' => '',
            'urutan' => 8
        ]);
        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi1->id,
            'nama' => 'PPWNI Klang',
            'singkatan' => '',
            'urutan' => 1
        ]);
        // Anggota Departement
    }
}