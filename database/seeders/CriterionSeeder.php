<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Criterion;

class CriterionSeeder extends Seeder
{
    public function run()
    {
        $criteria = [
            // Penyusunan Tim Kerja
            [
                'penilaian' => 'a. Unit kerja telah membentuk tim untuk melakukan pembangunan Zona Integritas',
                'kriteria_nilai' => 'Ya, jika Tim telah dibentuk di dalam unit kerja.',
                'pilihan_jawaban' => 'Ya/Tidak',
                'category' => 'Penyusunan Tim Kerja',
            ],
            [
                'penilaian' => 'b. Penentuan anggota Tim dipilih melalui prosedur/mekanisme yang jelas',
                'kriteria_nilai' => 'a. Jika dengan prosedur/mekanisme yang jelas dan mewakili seluruh unsur dalam unit kerja
b. Jika sebagian menggunakan prosedur yang mewakili sebagian besar unsur dalam unit kerja
c. Jika tidak di seleksi.',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Penyusunan Tim Kerja',
            ],
            // Rencana Pembangunan Zona Integritas
            [
                'penilaian' => 'a. Terdapat dokumen rencana kerja pembangunan Zona Integritas menuju WBK/WBBM',
                'kriteria_nilai' => 'Ya, jika memiliki rencana kerja pembangunan Zona Integritas.',
                'pilihan_jawaban' => 'Ya/Tidak',
                'category' => 'Rencana Pembangunan Zona Integritas',
            ],
            [
                'penilaian' => 'b. Dalam dokumen pembangunan terdapat target-target prioritas yang relevan dengan tujuan pembangunan WBK/WBBM',
                'kriteria_nilai' => 'a. Jika semua target-target prioritas relevan dengan tujuanpembangunan WBK/WBBM
b. Jika sebagian target-target prioritas relevan dengan tujuan pembangunan WBK/WBBM
c. Jika tidak ada target-target prioritas yang relevan dengan tujuan pembangunan WBK/WBBM',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Rencana Pembangunan Zona Integritas',
            ],
            [
                'penilaian' => 'c. Terdapat mekanisme atau media untuk mensosialisasikan pembangunan WBK/WBBM',
                'kriteria_nilai' => 'a. Jika telah dilakukan pengelolaan media/aktivitas interaktif yang efektif untuk menginformasikan pembangunan ZI kepada internal dan stakeholder secara berkala
b. Jika pengelolaan media/aktivitas interaktif dilakukan secara terbatas dan tidak secara berkala
c. Jika pengelolaan media/aktivitas interaktif belum dilakukan',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Rencana Pembangunan Zona Integritas',
            ],
            
            // Pemantauan dan Evaluasi
            [
                'penilaian' => 'a. Seluruh kegiatan pembangunan sudah dilaksanakan sesuai dengan rencana',
                'kriteria_nilai' => 'a. Jika semua kegiatan pembangunan telah dilaksanakan sesuai dengan rencana
b. Jika sebagian besar kegiatan pembangunan telah dilaksanakan sesuai dengan rencana
c. Jika sebagian kecil kegiatan pembangunan telah dilaksanakan sesuai dengan rencana
d. Jika belum ada kegiatan pembangunan yang dilakukan sesuai dengan rencana',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Pemantauan dan Evaluasi Pembangunan WBK/WBBM',
            ],
            [
                'penilaian' => 'b. Terdapat monitoring dan evaluasi terhadap pembangunan Zona Integritas',
                'kriteria_nilai' => 'a. Jika monitoring dan evaluasi melibatkan pimpinan dan dilakukan secara berkala
b. Jika monitoring dan evaluasi melibatkan pimpinan tetapi tidak secara berkala
c. Jika monitoring dan evaluasi tidak melibatkan pimpinan dan tidak secara berkala
d. Jika tidak terdapat monitoring dan evaluasi terhadap pembangunan zona integritas',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Pemantauan dan Evaluasi Pembangunan WBK/WBBM',
            ],

            [
                'penilaian' => 'c. Hasil Monitoring dan Evaluasi telah ditindaklanjuti',
                'kriteria_nilai' => 'a. Jika semua catatan/rekomendasi hasil  monitoring dan evaluasi tim internal atas persiapan dan pelaksanaan kegiatan Unit WBK/WBBM telah ditindaklanjuti
b. Jika sebagian besar catatan/rekomendasi hasil monitoring danevaluasi tim internal atas persiapan dan pelaksanaan kegiatanUnit WBK/WBBM telah ditindaklanjuti
c. Jika sebagian kecil catatan/rekomendasi hasil monitoring dan evaluasi tim internal atas persiapan dan pelaksanaan kegiatan Unit WBK/WBBM telah ditindaklanjuti
d. Jika catatan/rekomendasi hasil monitoring dan evaluasi tim internal atas persiapan dan pelaksanaan kegiatan Unit WBK/WBBM belum ditindaklanjuti',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Pemantauan dan Evaluasi Pembangunan WBK/WBBM',
            ],

            // Perubahan pola pikir dan budaya kerja 
            [
                'penilaian' => 'a. Pimpinan berperan sebagai role model dalam pelaksanaan Pembangunan WBK/WBBM',
                'kriteria_nilai' => 'Ya, jika pimpinan menjadi contoh pelaksanaan nilai-nilai organisasi.',
                'pilihan_jawaban' => 'Ya/Tidak',
                'category' => 'Perubahan Pola Pikir dan Budaya Kerja',
            ],
            [
                'penilaian' => 'b. Sudah ditetapkan agen perubahan',
                'kriteria_nilai' => 'a. Jika agen perubahan telah ditetapkan dan  berkontribusi terhadap perubahan pada unit kerjanya
b. Jika agen perubahan telah ditetapkan namun belum berkontribusi terhadap perubahan pada unit kerjanya
c. Jika belum terdapat agen perubahan',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Perubahan Pola Pikir dan Budaya Kerja',
            ],
            [
                'penilaian' => 'c. Telah dibangun budaya kerja dan pola pikir di lingkungan organisasi',
                'kriteria_nilai' => 'a. Jika telah dilakukan upaya pembangunan budaya kerja dan pola pikir dan mampu mengurangi resistensi atas perubahan
b. Jika telah dilakukan upaya pembangunan budaya kerja dan pola pikir tapi masih terdapat resistensi atas perubahan
c. Jika belum terdapat upaya pembangunan budaya kerja dan pola pikir',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Perubahan Pola Pikir dan Budaya Kerja',
            ],
            [
                'penilaian' => 'd. Anggota organisasi terlibat dalam pembangunan Zona Integritas menuju WBK/WBBM',
                'kriteria_nilai' => 'a. Jika semua anggota terlibat dalam pembangunan Zona Integritas menuju WBK/WBBM dan usulan-usulan dari anggota diakomodasikan dalam keputusan
b. Jika sebagian besar anggota terlibat dalam pembangunan Zona Integritas menuju WBK/WBBM
c. Jika sebagian kecil anggota terlibat dalam pembangunan Zona Integritas menuju WBK/WBBM
d. Jika belum ada anggota terlibat dalam pembangunan Zona Integritas menuju WBK/WBBM',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Perubahan Pola Pikir dan Budaya Kerja',
            ],
            
        ];

        foreach ($criteria as $criterion) {
            Criterion::create($criterion);
        }
    }
}
