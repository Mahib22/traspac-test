<?php

namespace Database\Seeders;

use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\Pegawai;
use App\Models\UnitKerja;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Golongan::factory(10)->create();
        Jabatan::factory(10)->create();
        UnitKerja::factory(10)->create();
        Pegawai::factory(20)->create();
    }
}
