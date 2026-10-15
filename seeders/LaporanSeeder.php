<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laporan;
use Faker\Factory as Faker;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $daftarKecamatan = [
            'Dayeuhkolot',
            'Baleendah',
            'Bojongsoang',
            'Rancaekek',
            'Majalaya',
        ];

        // Menghasilkan minimal 15 data laporan dummy (dibuat 20 data)
        for ($i = 0; $i < 20; $i++) {
            Laporan::create([
                'nama_pelapor'     => $faker->name,
                'lokasi'           => $faker->randomElement($daftarKecamatan),
                'tinggi_genangan'  => $faker->numberBetween(10, 150),
                'tanggal_kejadian' => $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
            ]);
        }
    }
}
