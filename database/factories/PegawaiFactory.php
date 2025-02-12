<?php

namespace Database\Factories;

use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\UnitKerja;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nip' => $this->faker->unique()->numerify('##############'),
            'nama' => $this->faker->name,
            'tempat_lahir' => $this->faker->city,
            'alamat' => $this->faker->address,
            'tgl_lahir' => $this->faker->date,
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'eselon' => $this->faker->randomElement(['I', 'II', 'III', 'IV']),
            'tempat_tugas' => $this->faker->company,
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu']),
            'no_hp' => $this->faker->numerify('##############'),
            'npwp' => $this->faker->numerify('###############'),
            'foto' => 'https://i.pravatar.cc/300',
            'golongan_id' => Golongan::inRandomOrder()->first()->id,
            'jabatan_id' => Jabatan::inRandomOrder()->first()->id,
            'unit_kerja_id' => UnitKerja::inRandomOrder()->first()->id,
        ];
    }
}
