<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Criterion;

class CriterionSeeder extends Seeder
{
    public function run()
    {
        Criterion::create([
            'kriteria_nilai' => 'a. Unit kerja telah membentuk tim untuk melakukan pembangunan Zona Integritas',
            'pilihan_jawaban' => 'Ya/Tidak',
            'category' => 'Manajemen Perubahan - Pemenuhan',
        ]);

        Criterion::create([
            'kriteria_nilai' => 'b. Penentuan anggota Tim dipilih melalui prosedur/mekanisme yang jelas',
            'pilihan_jawaban' => 'A/B/C',
            'category' => 'Manajemen Perubahan - Pemenuhan',
        ]);
    }
}
