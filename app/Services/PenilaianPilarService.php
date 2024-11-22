<?php

namespace App\Services;

use App\Models\Criterion;

class PenilaianPilarService
{
    public function getPenilaianData()
    {
        $pillars = [
            [
                'pilar' => 'Manajemen Perubahan',
                'categories' => [
                    ['penilaian' => 'Penyusunan Tim Kerja', 'bobot' => 0.50, 'selectedCategory' => 'Penyusunan Tim Kerja'],
                    ['penilaian' => 'Rencana Pembangunan Zona Integritas', 'bobot' => 1.00, 'selectedCategory' => 'Rencana Pembangunan Zona Integritas'],
                    ['penilaian' => 'Pemantauan dan Evaluasi Pembangunan WBK/WBBM', 'bobot' => 1.00, 'selectedCategory' => 'Pemantauan dan Evaluasi Pembangunan WBK/WBBM'],
                    ['penilaian' => 'Perubahan pola pikir dan budaya kerja', 'bobot' => 1.50, 'selectedCategory' => 'Perubahan Pola Pikir dan Budaya Kerja'],
                ],
            ],
            [
                'pilar' => 'Penataan Tatalaksana',
                'categories' => [
                    ['penilaian' => 'Prosedur Operasional Tetap (SOP) Kegiatan Utama', 'bobot' => 1.00, 'selectedCategory' => 'Prosedur Operasional Tetap (SOP) Kegiatan Utama'],
                    ['penilaian' => 'Sistem Pemerintahan Berbasis Elektronik (SPBE)', 'bobot' => 2.00, 'selectedCategory' => 'Sistem Pemerintahan Berbasis Elektronik (SPBE)'],
                    ['penilaian' => 'Keterbukaan Informasi Publik', 'bobot' => 0.50, 'selectedCategory' => 'Keterbukaan Informasi Publik'],
                ],
            ],
            [
                'pilar' => 'Penataan Sistem Manajemen SDM Aparatur',
                'categories' => [
                    ['penilaian' => 'Perencanaan Kebutuhan Pegawai', 'bobot' => 0.25, 'selectedCategory' => 'Perencanaan Kebutuhan Pegawai'],
                    ['penilaian' => 'Pola Mutasi Internal', 'bobot' => 0.50, 'selectedCategory' => 'Pola Mutasi Internal'],
                    ['penilaian' => 'Pengembangan Pegawai', 'bobot' => 1.25, 'selectedCategory' => 'Pengembangan Pegawai'],
                    ['penilaian' => 'Penetapan Kinerja Individu', 'bobot' => 2.00, 'selectedCategory' => 'Penetapan Kinerja Individu'],
                    ['penilaian' => 'Penegakan Aturan', 'bobot' => 0.75, 'selectedCategory' => 'Penegakan Aturan'],
                    ['penilaian' => 'Sistem Informasi Kepegawaian', 'bobot' => 0.25, 'selectedCategory' => 'Sistem Informasi Kepegawaian'],
                ],
            ],
            [
                'pilar' => 'Penguatan Akuntabilitas',
                'categories' => [
                    ['penilaian' => 'Keterlibatan Pimpinan', 'bobot' => 2.50, 'selectedCategory' => 'Keterlibatan Pimpinan'],
                    ['penilaian' => 'Pengelolaan Akuntabilitas Kinerja', 'bobot' => 2.50, 'selectedCategory' => 'Pengelolaan Akuntabilitas Kinerja'],
                ],
            ],
            [
                'pilar' => 'Penguatan Pengawasan',
                'categories' => [
                    ['penilaian' => 'Pengendalian Gratifikasi', 'bobot' => 1.50, 'selectedCategory' => 'Pengendalian Gratifikasi'],
                    ['penilaian' => 'Penerapan Sistem Pengendalian Intern Pemerintah (SPIP)', 'bobot' => 1.50, 'selectedCategory' => 'Penerapan SPIP'],
                    ['penilaian' => 'Pengaduan Masyarakat', 'bobot' => 1.50, 'selectedCategory' => 'Pengaduan Masyarakat'],
                    ['penilaian' => 'Whistle-Blowing System', 'bobot' => 1.50, 'selectedCategory' => 'Whistle-Blowing System'],
                    ['penilaian' => 'Penanganan Benturan Kepentingan', 'bobot' => 1.50, 'selectedCategory' => 'Penanganan Benturan Kepentingan'],
                ],
            ],
            [
                'pilar' => 'Peningkatan Kualitas Pelayanan Publik',
                'categories' => [
                    ['penilaian' => 'Standar Pelayanan', 'bobot' => 1.00, 'selectedCategory' => 'Standar Pelayanan'],
                    ['penilaian' => 'Budaya Pelayanan Prima', 'bobot' => 1.00, 'selectedCategory' => 'Budaya Pelayanan Prima'],
                    ['penilaian' => 'Pengelolaan Pengaduan', 'bobot' => 1.00, 'selectedCategory' => 'Pengelolaan Pengaduan'],
                    ['penilaian' => 'Penilaian Kepuasan terhadap Pelayanan', 'bobot' => 1.00, 'selectedCategory' => 'Penilaian Kepuasan'],
                    ['penilaian' => 'Pemanfaatan Teknologi Informasi', 'bobot' => 1.00, 'selectedCategory' => 'Pemanfaatan Teknologi Informasi'],
                ],
            ],
        ];
        // Process each pillar and calculate values
        return collect($pillars)->map(function ($pilar) {
            $totalBobot = 0;
            $totalNilaiUnit = 0;
            $totalNilaiTpi = 0;
    
            $categories = collect($pilar['categories'])->map(function ($category) use (&$totalBobot, &$totalNilaiUnit, &$totalNilaiTpi) {
                $avgNilaiUnit = Criterion::where('category', $category['selectedCategory'])
                    ->pluck('nilai_unit')
                    ->map(fn($value) => $value ?? 0) // Replace null with 0
                    ->average();

                $avgNilaiTpi = Criterion::where('category', $category['selectedCategory'])
                    ->pluck('nilai_tpi')
                    ->map(fn($value) => $value ?? 0) // Replace null with 0
                    ->average();
    
                $nilaiUnitWeighted = $avgNilaiUnit * $category['bobot'];
                $nilaiTpiWeighted = $avgNilaiTpi * $category['bobot'];
    
                $totalBobot += $category['bobot'];
                $totalNilaiUnit += $nilaiUnitWeighted;
                $totalNilaiTpi += $nilaiTpiWeighted;
    
                return [
                    'penilaian' => $category['penilaian'],
                    'bobot' => $category['bobot'],
                    'nilai_unit' => number_format($nilaiUnitWeighted, 2),
                    'nilai_tpi' => number_format($nilaiTpiWeighted, 2),
                ];
            });
    
            return [
                'pilar' => $pilar['pilar'],
                'categories' => $categories,
                'total_bobot' => number_format($totalBobot, 2),
                'total_nilai_unit' => number_format($totalNilaiUnit, 2),
                'total_nilai_tpi' => number_format($totalNilaiTpi, 2),
            ];
        });
    }
}
