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

            // Penataan Tatalaksana

                // Prosedur Operasional Tetap (SOP) Kegiatan Utama
            [
                'penilaian' => 'a. SOP mengacu pada peta proses bisnis instansi',
                'kriteria_nilai' => 'a. Jika semua SOP unit telah mengacu peta proses bisnis dan juga melakukan inovasi yang selaras
b. Jika semua SOP unit telah mengacu peta proses bisnis
c. Jika sebagian SOP unit telah mengacu peta proses bisnis
d. Jika belum terdapat SOP unit yang mengacu peta proses bisnis.',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Prosedur Operasional Tetap (SOP) Kegiatan Utama',
            ],
            [
                'penilaian' => 'b. Prosedur operasional tetap (SOP) telah diterapkan',
                'kriteria_nilai' => 'a. Jika unit telah menerapkan seluruh SOP yang ditetapkan organisasi dan juga melakukan inovasi pada SOP yang diterapkan
b. Jika unit telah menerapkan seluruh SOP yang ditetapkan organisasi
c. Jika unit telah menerapkan sebagian besar SOP yang ditetapkan organisasi
d. Jika unit telah menerapkan sebagian kecil SOP yang ditetapkan organisasi
e. Jika unit belum menerapkan SOP yang telah ditetapkan organisasi',
                'pilihan_jawaban' => 'A/B/C/D/E',
                'category' => 'Prosedur Operasional Tetap (SOP) Kegiatan Utama',
            ],

            [
                'penilaian' => 'c. Prosedur operasional tetap (SOP) telah dievaluasi',
                'kriteria_nilai' => 'a. Jika seluruh SOP utama telah dievaluasi dan telah ditindaklanjuti berupa perbaikan SOP atau usulan perbaikan SOP
b. Jika sebagian besar SOP utama telah dievaluasi dan telah ditindaklanjuti berupa perbaikan SOP atau usulan perbaikan SOP
c. Jika sebagian besar SOP utama telah dievaluasi tetapi belum ditindaklanjuti
d. Jika sebagian kecil SOP utama telah dievaluasi
e. Jika SOP belum pernah dievaluasi',
                'pilihan_jawaban' => 'A/B/C/D/E',
                'category' => 'Prosedur Operasional Tetap (SOP) Kegiatan Utama',
            ],

            // Sistem Pemerintahan Berbasis Elektronik (SPBE)
            [
                'penilaian' => 'a. Sistem pengukuran kinerja unit sudah menggunakan teknologi informasi',
                'kriteria_nilai' => 'a. Jika unit memiliki sistem pengukuran kinerja (e-performance/e-sakip) yang menggunakan teknologi informasi dan juga melakukan inovasi
b. Jika unit memiliki sistem pengukuran kinerja (e-performance/e-sakip) yang menggunakan teknologi informasi
c. Jika belum memiliki sistem pengukuran kinerja (e-performance/e-sakip) yang menggunakan teknologi informasi',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Sistem Pemerintahan Berbasis Elektronik (SPBE)',
            ],
            [
                'penilaian' => 'b. Operasionalisasi manajemen SDM sudah menggunakan teknologi informasi',
                'kriteria_nilai' => 'Jika sistem e-performance sudah diterapkan.',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Sistem Pemerintahan Berbasis Elektronik (SPBE)',
            ],
            [
                'penilaian' => 'c. Pemberian pelayanan kepada publik sudah menggunakan teknologi informasi',
                'kriteria_nilai' => 'a. Jika unit memberikan pelayanan kepada publik dengan menggunakan teknologi informasi terpusat/unit sendiri dan terdapat inovasi
b. Jika unit memberikan pelayanan kepada publik dengan menggunakan teknologi informasi secara terpusat
c. Jika belum memberikan pelayanan kepada publik dengan menggunakan teknologi informasi',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Sistem Pemerintahan Berbasis Elektronik (SPBE)',
            ],
            [
                'penilaian' => 'd. Telah dilakukan monitoring dan dan evaluasi terhadap pemanfaatan teknologi informasi dalam pengukuran kinerja unit, operasionalisasi SDM, dan pemberian layanan kepada publik',
                'kriteria_nilai' => 'a. Jika laporan monitoring dan evaluasi terhadap pemanfaatan teknologi informasi dalam pengukuran kinerja unit, operasionalisasi SDM, dan pemberian layanan kepada publik sudah dilakukan secara berkala
b. Jika laporan monitoring dan evaluasi terhadap pemanfaatan teknologi informasi dalam pengukuran kinerja unit, operasionalisasi SDM, dan pemberian layanan kepada publik sudah dilakukan tetapi tidak secara berkala
c. Jika tidak terdapat monitoring dan evaluasi terhadap pemanfaatan teknologi informasi dalam pengukuran kinerja unit, operasionalisasi SDM, dan pemberian layanan kepada publik',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Sistem Pemerintahan Berbasis Elektronik (SPBE)',
            ],
            
            
            // Keterbukaan Informasi Publik
            [
                'penilaian' => 'a. Kebijakan tentang  keterbukaan informasi publik telah diterapkan',
                'kriteria_nilai' => 'a. Jika sudah terdapat Pejabat Pengelola Informasi Publik (PPID) yang menyebarkan seluruh informasi yang dapat diakses secara mutakhir dan lengkap
b. Jika sudah terdapat PPID yang menyebarkan sebagian informasi yang dapat diakses secara mutakhir dan lengkap
c. Jika belum ada PPID dan belum melakukan penyebaran informasi publik',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Keterbukaan Informasi Publik',
            ],
            [
                'penilaian' => 'b. Telah dilakukan monitoring dan evaluasi pelaksanaan kebijakan keterbukaan informasi publik',
                'kriteria_nilai' => 'a. Jika dilakukan monitoring dan evaluasi pelaksanaan kebijakan keterbukaan informasi publik dan telah ditindaklanjuti
b. Jika monitoring dan evaluasi pelaksanaan kebijakan keterbukaan informasi publik telah dilakukan tetapi belum ditindaklanjuti
c. Jika monitoring dan evaluasi pelaksanaan kebijakan keterbukaan informasi publik belum dilakukan',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Keterbukaan Informasi Publik',
            ],


            // PENATAAN SISTEM MANAJEMEN SDM APARATUR

                // i. Perencanaan Kebutuhan Pegawai sesuai dengan Kebutuhan Organisasi
            [
                'penilaian' => 'a. Kebutuhan pegawai yang disusun oleh unit kerja mengacu kepada peta jabatan dan hasil analisis beban kerja untuk masing-masing jabatan',
                'kriteria_nilai' => 'Ya, jika kebutuhan pegawai yang disusun oleh unit kerja mengacu kepada peta jabatan dan hasil analisis beban kerja untuk masing-masing jabatan.',
                'pilihan_jawaban' => 'Ya/Tidak',
                'category' => 'Perencanaan Kebutuhan Pegawai',
            ],

            [
                'penilaian' => 'b. Penempatan pegawai hasil rekrutmen murni mengacu kepada kebutuhan pegawai yang telah disusun per jabatan',
                'kriteria_nilai' => 'a. Jika semua penempatan pegawai hasil rekrutmen murni mengacu kepada kebutuhan pegawai yang telah disusun per jabatan
b. Jika sebagian besar penempatan pegawai hasil rekrutmen murni mengacu kepada kebutuhan pegawai yang telah disusun per jabatan
c. Jika sebagian kecil penempatan pegawai hasil rekrutmen murni mengacu kepada kebutuhan pegawai yang telah disusun per jabatan
d. Jika penempatan pegawai hasil rekrutmen murni tidak mengacu kepada kebutuhan pegawai yang telah disusun per jabatan',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Perencanaan Kebutuhan Pegawai',
            ],

            [
                'penilaian' => 'c. Telah dilakukan monitoring dan dan evaluasi terhadap penempatan pegawai rekrutmen untuk memenuhi kebutuhan jabatan dalam organisasi telah memberikan perbaikan terhadap kinerja unit kerja',
                'kriteria_nilai' => 'Ya, jika sudah dilakukan monitoring dan evaluasi terhadap penempatan pegawai hasil rekrutmen untuk memenuhi kebutuhan jabatan dalam organisasi telah memberikan perbaikan terhadap kinerja unit kerja.',
                'pilihan_jawaban' => 'Ya/Tidak',
                'category' => 'Perencanaan Kebutuhan Pegawai',
            ],
            // ii. Pola Mutasi Internal
            [
                'penilaian' => 'a.	Dalam melakukan pengembangan karier pegawai, telah dilakukan mutasi pegawai antar jabatan',
                'kriteria_nilai' => 'Ya, jika dilakukan mutasi pegawai antar jabatan sebagai wujud dari pengembangan karier pegawai.',
                'pilihan_jawaban' => 'Ya/Tidak',
                'category' => 'Pola Mutasi Internal',
            ],
            [
                'penilaian' => 'b.	Dalam melakukan mutasi pegawai antar jabatan telah memperhatikan kompetensi jabatan dan mengikuti pola mutasi yang telah ditetapkan',
                'kriteria_nilai' => 'a. Jika semua mutasi pegawai antar jabatan telah memperhatikan kompetensi jabatan dan mengikuti pola mutasi yang telah ditetapkan organisasi dan juga unit kerja memberikan pertimbangan terkait hal ini
b. Jika semua mutasi pegawai antar jabatan telah memperhatikan kompetensi jabatan dan mengikuti pola mutasi yang telah ditetapkan organisasi
c. Jika sebagian besar mutasi pegawai antar jabatan telah memperhatikan kompetensi jabatan dan mengikuti pola mutasi yang telah ditetapkan organisasi
d. Jika sebagian kecil semua mutasi pegawai antar jabatan telah memperhatikan kompetensi jabatan dan mengikuti pola mutasi yang telah ditetapkan organisasi
e. Jika mutasi pegawai antar jabatan belum memperhatikan kompetensi jabatan dan mengikuti pola mutasi yang telah ditetapkan organisasi',
                'pilihan_jawaban' => 'A/B/C/D/E',
                'category' => 'Pola Mutasi Internal',
            ],
            [
                'penilaian' => 'c.	Telah dilakukan monitoring dan evaluasi terhadap kegiatan mutasi yang telah dilakukan dalam kaitannya dengan perbaikan kinerja',
                'kriteria_nilai' => 'Ya, jika sudah dilakukan monitoring dan evaluasi terhadap kegiatan mutasi yang telah dilakukan dalam kaitannya dengan perbaikan kinerja.',
                'pilihan_jawaban' => 'Ya/Tidak',
                'category' => 'Pola Mutasi Internal',
            ],
            // iii. Pengembangan Pegawai Berbasis Kompetensi
            [
                'penilaian' => 'a.	Unit Kerja melakukan Training Need Analysis Untuk pengembangan kompetensi',
                'kriteria_nilai' => 'Ya, jika sudah dilakukan Training Need Analysis Untuk pengembangan kompetensi.',
                'pilihan_jawaban' => 'Ya/Tidak',
                'category' => 'Pengembangan Pegawai',
            ],

            [
                'penilaian' => 'b.	Dalam menyusun rencana pengembangan kompetensi pegawai, telah mempertimbangkan hasil pengelolaan kinerja pegawai',
                'kriteria_nilai' => 'a. Jika semua rencana pengembangan kompetensi pegawai mempertimbangkan hasil pengelolaan kinerja pegawai
b. Jika sebagian besar rencana pengembangan kompetensi pegawai mempertimbangkan hasil pengelolaan kinerja pegawai
c. Jika sebagian kecil rencana pengembangan kompetensi pegawai mempertimbangkan hasil pengelolaan kinerja pegawai
d. Jika belum ada rencana pengembangan kompetensi pegawai yang mempertimbangkan hasil pengelolaan kinerja pegawai',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Pengembangan Pegawai',
            ],

            [
                'penilaian' => 'c.	 Tingkat kesenjangan kompetensi pegawai yang ada dengan standar kompetensi yang ditetapkan untuk masing-masing jabatan',
                'kriteria_nilai' => 'a. Jika persentase kesenjangan kompetensi pegawai dengan standar kompetensi yang ditetapkan sebesar <25%
b. Jika persentase kesenjangan kompetensi pegawai dengan standar kompetensi yang ditetapkan sebesar >25%-50%
c. Jika  sebagian besar kompetensi pegawai dengan standar kompetensi yang ditetapkan untuk masing-masing jabatan >50% -75%
d. Jika persentase kesenjangan kompetensi pegawai dengan standar kompetensi yang ditetapkan sebesar >75%-100%',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Pengembangan Pegawai',
            ],

            [
                'penilaian' => 'd.	Pegawai di Unit Kerja telah memperoleh kesempatan/hak untuk mengikuti diklat maupun pengembangan kompetensi lainnya',
                'kriteria_nilai' => 'a. Jika seluruh pegawai di Unit Kerja telah memperoleh kesempatan/hak untuk mengikuti diklat maupun pengembangan kompetensi lainnya
b. Jika sebagian besar pegawai di Unit Kerja telah memperoleh kesempatan/hak untuk mengikuti diklat maupun pengembangan kompetensi lainnya
c. Jika sebagian kecil pegawai di Unit Kerja telah memperoleh kesempatan/hak untuk mengikuti diklat maupun pengembangan kompetensi lainnya
d. Jika belum ada pegawai di Unit Kerja telah memperoleh kesempatan/hak untuk mengikuti diklat maupun pengembangan kompetensi lainnya',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Pengembangan Pegawai',
            ],

            [
                'penilaian' => 'e.	Dalam pelaksanaan pengembangan kompetensi, unit kerja melakukan upaya pengembangan kompetensi kepada pegawai (seperti pengikutsertaan pada lembaga pelatihan, in-house training, coaching, atau mentoring)',
                'kriteria_nilai' => 'a. Jika unit kerja melakukan upaya pengembangan kompetensi kepada seluruh pegawai
b. Jika unit kerja melakukan upaya pengembangan kompetensi kepada sebagian besar pegawai
c. Jika unit kerja melakukan upaya pengembangan kompetensi kepada sebagian kecil pegawai
d. Jika unit kerja belum melakukan upaya pengembangan kompetensi kepada pegawai',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Pengembangan Pegawai',
            ],

            [
                'penilaian' => 'f.	Telah dilakukan monitoring dan evaluasi terhadap hasil pengembangan kompetensi dalam kaitannya dengan perbaikan kinerja',
                'kriteria_nilai' => 'a. Jika monitoring dan evaluasi terhadap hasil pengembangan kompetensi dalam kaitannya dengan perbaikan kinerja telah dilakukan secara berkala
b. Jika monitoring dan evaluasi terhadap hasil pengembangan kompetensi dalam kaitannya dengan perbaikan kinerja telah dilakukan namun tidak secara berkala
c. Jika monitoring dan evaluasi terhadap hasil pengembangan kompetensi dalam kaitannya dengan perbaikan kinerja belum dilakukan',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Pengembangan Pegawai',
            ],

            // iv. Penetapan Kinerja Individu 
            [
                'penilaian' => 'a.	Terdapat penetapan kinerja individu yang terkait dengan perjanjian kinerja organisasi',
                'kriteria_nilai' => 'a. Jika seluruh penetapan kinerja individu terkait dengan kinerja organisasi serta perjanjian kinerja selaras dengan sasaran kinerja pegawai (SKP)
b. Jika sebagian besar penetapan kinerja individu terkait dengan kinerja organisasi
c. Jika sebagian kecil penetapan kinerja individu terkait dengan kinerja organisasi
d. Jika belum ada penetapan kinerja individu terkait dengan kinerja organisasi',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Penetapan Kinerja Individu',
            ],

            [
                'penilaian' => 'b.	Ukuran kinerja individu telah memiliki kesesuaian dengan indikator kinerja individu level diatasnya',
                'kriteria_nilai' => 'a. Jika seluruh ukuran kinerja individu telah memiliki kesesuaian dengan indikator kinerja individu level diatasnya serta menggambarkan logic model
b. Jika sebagian besar ukuran kinerja individu telah memiliki kesesuaian dengan indikator kinerja individu level diatasnya
c. Jika sebagian kecil ukuran kinerja individu telah memiliki kesesuaian dengan indikator kinerja individu level diatasnya
d. Jika ukuran kinerja individu belum memiliki kesesuaian dengan indikator kinerja individu level diatasnya',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Penetapan Kinerja Individu',
            ],

            [
                'penilaian' => 'c.	Pengukuran kinerja individu dilakukan secara periodik',
                'kriteria_nilai' => 'a. Jika pengukuran kinerja individu dilakukan secara bulanan
b. Jika pengukuran kinerja individu dilakukan secara triwulanan
c. Jika pengukuran kinerja individu dilakukan secara semesteran
d. Jika pengukuran kinerja individu dilakukan secara tahunan
e. Jika pengukuran kinerja individu belum dilakukan.',
                'pilihan_jawaban' => 'A/B/C/D/E',
                'category' => 'Penetapan Kinerja Individu',
            ],

            [
                'penilaian' => 'd.	Hasil penilaian kinerja individu telah dijadikan dasar untuk pemberian reward',
                'kriteria_nilai' => 'Ya, jika hasil hasil penilaian kinerja individu telah dijadikan dasar untuk pemberian reward (Seperti: pengembangan karir individu, atau penghargaan)',
                'pilihan_jawaban' => 'Ya/Tidak',
                'category' => 'Penetapan Kinerja Individu',
            ],
            // v. Penegakan Aturan Disiplin/Kode Etik/Kode Perilaku Pegawai 
            [
                'penilaian' => 'a.	Aturan disiplin/kode etik/kode perilaku telah dilaksanakan/diimplementasikan',
                'kriteria_nilai' => 'a. Jika unit kerja telah mengimplementasikan seluruh aturan disiplin/kode etik/kode perilaku yang ditetapkan organisasi dan juga membuat inovasi terkait aturan disiplin/kode etik/kode perilaku yang sesuai dengan karakteristik unit kerja
b. Jika unit kerja telah mengimplementasikan seluruh aturan disiplin/kode etik/kode perilaku yang ditetapkan organisasi
c. Jika unit kerja telah mengimplementasikan sebagian aturan disiplin/kode etik/kode perilaku yang ditetapkan organisasi
d. Jika unit kerja belum mengimplementasikan aturan disiplin/kode etik/kode perilaku yang ditetapkan organisasi',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Penegakan Aturan',
            ],
            // vi. Sistem Informasi Kepegawaian 
            [
                'penilaian' => 'a.	Data informasi kepegawaian unit kerja telah dimutakhirkan secara berkala',
                'kriteria_nilai' => 'a. Jika data informasi kepegawaian unit kerja dapat diakses oleh pegawai dan dimutakhirkan setiap ada perubahan data pegawai
b. Jika data informasi kepegawaian unit kerja dapat diakses oleh pegawai dan  dimutakhirkan namun secara berkala
c. Jika data informasi kepegawaian unit kerja belum dimutakhirkan',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Sistem Informasi Kepegawaian',
            ],


            // PENGUATAN AKUNTABILITAS


                // i. Keterlibatan Pimpinan
            [
                'penilaian' => 'a. Unit kerja telah melibatkan pimpinan secara langsung pada saat penyusunan perencanaan',
                'kriteria_nilai' => 'a. Jika pimpinan selalu terlibat dalam seluruh tahapan penyusunan perencanaan
b. Jika pimpinan ikut terlibat dalam sebagian tahapan penyusunan perencanaan
c. Jika tidak ada keterlibatan pimpinan dalam penyusunan perencanaan (hanya menandatangani)',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Keterlibatan Pimpinan',
            ],
            [
                'penilaian' => 'b. Unit kerja telah melibatkan secara langsung pimpinan saat penyusunan penetapan kinerja',
                'kriteria_nilai' => 'a. Jika pimpinan selalu terlibat dalam seluruh tahapan penyusunan perjanjian kinerja
b. Jika pimpinan terlibat dalam sebagian tahapan penyusunan perjanjian kinerja
c. Jika tidak ada keterlibatan pimpinan dalam penyusunan perjanjian kinerja',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Keterlibatan Pimpinan',
            ],
            [
                'penilaian' => 'c. Pimpinan memantau pencapaian kinerja secara berkala',
                'kriteria_nilai' => 'a. Jika pimpinan selalu terlibat dalam seluruh pemantauan pencapaian kinerja dan menindaklanjuti hasil pemantauan
b. Jika pimpinan unit kerja terlibat dalam seluruh pemantauan pencapaian kinerja tetapi tidak ada tindak lanjut hasil pemantauan
c. Jika pimpinan unit kerja terlibat dalam sebagian pemantauan pencapaian kinerja
d. Jika tidak ada keterlibatan pimpinan dalam pemantauan pencapaian kinerja',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Keterlibatan Pimpinan',
            ],

            // ii. Pengelolaan Akuntabilitas Kinerja
            [
                'penilaian' => 'a. Dokumen perencanaan kinerja sudah ada',
                'kriteria_nilai' => 'Ya, jika unit kerja memiliki dokumen perencanaan kinerja lengkap.',
                'pilihan_jawaban' => 'Ya/Tidak',
                'category' => 'Pengelolaan Akuntabilitas Kinerja',
            ],
            [
                'penilaian' => 'b. Perencanaan kinerja telah berorientasi hasil',
                'kriteria_nilai' => 'Ya, jika perencanaan kinerja telah berorientasi hasil.',
                'pilihan_jawaban' => 'Ya/Tidak',
                'category' => 'Pengelolaan Akuntabilitas Kinerja',
            ],

            [
                'penilaian' => 'c.	Terdapat penetapan Indikator Kinerja Utama (IKU)',
                'kriteria_nilai' => 'Ya, jika unit kerja memiliki IKU',
                'pilihan_jawaban' => 'Ya/Tidak',
                'category' => 'Pengelolaan Akuntabilitas Kinerja',
            ],
            [
                'penilaian' => 'd.	Indikator kinerja telah telah memenuhi kriteria SMART',
                'kriteria_nilai' => 'a. Jika seluruh indikator kinerja telah SMART
b. Jika sebagian besar indikator kinerja telah SMART
c. Jika sebagian kecil indikator kinerja telah SMART
d. Jika belum ada indikator kinerja yang SMART',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Pengelolaan Akuntabilitas Kinerja',
            ],

            [
                'penilaian' => 'e.	Laporan kinerja telah disusun tepat waktu',
                'kriteria_nilai' => 'Ya, jika unit kerja telah menyusun laporan kinerja tepat waktu',
                'pilihan_jawaban' => 'Ya/Tidak',
                'category' => 'Pengelolaan Akuntabilitas Kinerja',
            ],
            [
                'penilaian' => 'f.	Laporan kinerja telah memberikan informasi tentang kinerja',
                'kriteria_nilai' => 'a. Jika seluruh pelaporan kinerja telah memberikan informasi tentang kinerja
b. Jika sebagian pelaporan kinerja belum memberikan informasi tentang kinerja
c. Jika seluruh pelaporan kinerja belum memberikan informasi tentang kinerja',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Pengelolaan Akuntabilitas Kinerja',
            ],

            [
                'penilaian' => 'g.	Terdapat sistem informasi/mekanisme informasi kinerja',
                'kriteria_nilai' => 'Ya, jika terdapat sistem informasi/mekanisme informasi kinerja',
                'pilihan_jawaban' => 'Ya/Tidak',
                'category' => 'Pengelolaan Akuntabilitas Kinerja',
            ],
            [
                'penilaian' => 'h	Unit kerja telah berupaya meningkatkan kapasitas SDM yang menangangi akuntabilitas kinerja',
                'kriteria_nilai' => 'a. Jika seluruh SDM pengelola akuntabilitas kinerja kompeten
b. Jika sebagian SDM pengelola akuntabilitas kinerja kompeten
c. Jika seluruh SDM pengelola akuntabilitas kinerja belum ada yang kompeten',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Pengelolaan Akuntabilitas Kinerja',
            ],




            // PENGUATAN PENGAWASAN


                // i. Pengendalian Gratifikasi
            [
                'penilaian' => 'a. Telah dilakukan public campaign tentang pengendalian gratifikasi',
                'kriteria_nilai' => 'a. Jika public campaign telah dilakukan secara berkala
b. Jika public campaign dilakukan tidak secara berkala
c. Jika belum dilakukan public campaign',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Pengendalian Gratifikasi',
            ],
            [
                'penilaian' => 'b. Pengendalian gratifikasi telah diimplementasikan',
                'kriteria_nilai' => 'a. Jika Unit Pengendalian Gratifikasi, pengendalian gratifikasi telahmenjadi bagian dari prosedur
b. Jika Unit Pengendalian Gratifikasi, upaya pengendalian gratifikasi telah mulai dilakukan
c. Jika telah membentuk Unit Pengendalian Gratifikasi tetapi belum terdapat prosedur pengendalian
d. Jika belum memiliki Unit Pengendalian Gratifikasi',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Pengendalian Gratifikasi',
            ],

            // ii. Penerapan Sistem Pengendalian Intern Pemerintah (SPIP)
            [
                'penilaian' => 'a. Telah dibangun lingkungan pengendalian',
                'kriteria_nilai' => 'a. Jika unit kerja membangun seluruh lingkungan pengendalian sesuai dengan yang ditetapkan organisasi dan juga membuat inovasi terkait lingkungan pengendalian yang sesuai dengan karakteristik unit kerja
b. Jika unit kerja membangun seluruh lingkungan pengendalian sesuai dengan yang ditetapkan organisasi
c. Jika unit kerja membangun sebagian besar lingkungan pengendalian sesuai dengan yang ditetapkan organisasi
d. Jika unit kerja membangun sebagian kecil lingkungan pengendalian sesuai dengan yang ditetapkan organisasi
e. Jika unit kerja belum membangun lingkungan pengendalian',
                'pilihan_jawaban' => 'A/B/C/D/E',
                'category' => 'Penerapan SPIP',
            ],

            [
                'penilaian' => 'b.	Telah dilakukan penilaian risiko atas pelaksanaan kebijakan',
                'kriteria_nilai' => 'a. Jika unit kerja melakukan penilaian risiko atas seluruh pelaksanaan kebijakan sesuai dengan yang ditetapkan organisasi dan juga membuat inovasi terkait lingkungan pengendalian yang sesuai dengan karakteristik unit kerja; 
b. Jika unit kerja melakukan penilaian risiko atas seluruh pelaksanaan kebijakan sesuai dengan yang ditetapkan organisasi
c. Jika melakukan penilaian risiko atas sebagian besar pelaksanaan kebijakan sesuai dengan yang ditetapkan organisasi
d. Jika melakukan penilaian risiko atas sebagian kecil pelaksanaan kebijakan sesuai dengan yang ditetapkan organisasi
e. Jika unit kerja belum melakukan penilaian resiko',
                'pilihan_jawaban' => 'A/B/C/D/E',
                'category' => 'Penerapan SPIP',
            ],

            [
                'penilaian' => 'c.	Telah dilakukan kegiatan pengendalian untuk meminimalisir risiko yang telah diidentifikasi',
                'kriteria_nilai' => 'a. Jika unit kerja melakukan kegiatan pengendalian untuk meminimalisir resiko sesuai dengan yang ditetapkan organisasi dan juga membuat inovasi terkait kegiatan pengendalian untuk meminimalisir resiko yang sesuai dengan karakteristik unit kerja
b. Jika unit kerja melakukan kegiatan pengendalian untuk meminimalisir resiko sesuai dengan yang ditetapkan organisasi
c. Jika unit kerja belum melakukan kegiatan pengendalian untuk meminimalisir resiko',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Penerapan SPIP',
            ],

            [
                'penilaian' => 'd.	SPI telah diinformasikan dan dikomunikasikan kepada seluruh pihak terkait',
                'kriteria_nilai' => 'a. Jika SPI telah diinformasikan dan dikomunikasikan kepada seluruh pihak terkait
b. Jika SPI telah diinformasikan dan dikomunikasikan kepada sebagian pihak terkait
c. Jika SPI belum diinformasikan dan dikomunikasikan kepada pihak terkait
',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Penerapan SPIP',
            ],

            // iii. Pengaduan Masyarakat
            [
                'penilaian' => 'a.	Kebijakan Pengaduan masyarakat telah diimplementasikan',
                'kriteria_nilai' => 'a. Jika unit kerja mengimplementasikan seluruh kebijakan pengaduan masyarakat sesuai dengan yang ditetapkan organisasi dan juga membuat inovasi terkait pengaduan masyarakat yang sesuai dengan karakteristik unit kerja
b. Jika unit kerja telah mengimplementasikan seluruh kebijakan pengaduan masyarakat sesuai dengan yang ditetapkan organisasi 
c. Jika unit kerja belum mengimplementasikan kebijakan pengaduan masyarakat',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Pengaduan Masyarakat',
            ],

            [
                'penilaian' => 'b.	pengaduan masyarakat dtindaklanjuti',
                'kriteria_nilai' => 'Ya, pengaduan masyaakat ditindaklanjuti',
                'pilihan_jawaban' => 'Ya/Tidak',
                'category' => 'Pengaduan Masyarakat',
            ],

            [
                'penilaian' => 'c.	Telah dilakukan monitoring dan evaluasi atas penanganan pengaduan masyarakat',
                'kriteria_nilai' => 'a. Jika penanganan pengaduan masyarakat dimonitoring dan evaluasi secara berkala
b. Jika penanganan pengaduan masyarakat dimonitoring dan evaluasi tetapi tidak secara berkala
c. Jika penanganan pengaduan masyarakat belum di monitoring dan evaluasi',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Pengaduan Masyarakat',
            ],

            [
                'penilaian' => 'd.	Hasil evaluasi atas penanganan pengaduan masyarakat telah ditindaklanjuti',
                'kriteria_nilai' => 'a. Jika seluruh hasil evaluasi atas penanganan pengaduan telah ditindaklanjuti oleh unit kerja
b. Jika sebagian hasil evaluasi atas penanganan pengaduan telah ditindaklanjuti oleh unit kerja
c. Jika hasil evaluasi atas penanganan pengaduan belum ditindaklanjuti',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Pengaduan Masyarakat',
            ],

            // iv. Whistle-Blowing System
            [
                'penilaian' => 'a.	Whistle Blowing System telah diterapkan',
                'kriteria_nilai' => 'a. Jika unit kerja menerapkan seluruh kebijakan Whistle Blowing System sesuai dengan yang ditetapkan organisasi dan juga membuat inovasi terkait pelaksanaan Whistle Blowing System yang sesuai dengan karakteristik unit kerja
b. Jika unit kerja menerapkan kebijakan Whistle Blowing System sesuai dengan yang ditetapkan organisasi
c. Jika unit kerja belum menerapkan kebijakan Whistle Blowing System',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Whistle-Blowing System',
            ],

            [
                'penilaian' => 'b.	Telah dilakukan evaluasi atas penerapan Whistle Blowing System',
                'kriteria_nilai' => 'a. Jika penerapan Whistle Blowing System dimonitoring dan evaluasi secara berkala
b. Jika penerapan Whistle Blowing System dimonitoring dan evaluasi tidak secara berkala
c. Jika penerapan Whistle Blowing System belum di monitoring dan evaluasi',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Whistle-Blowing System',
            ],

            [
                'penilaian' => 'c.	Hasil evaluasi atas penerapan Whistle Blowing System telah ditindaklanjuti',
                'kriteria_nilai' => 'a. Jika seluruh hasil evaluasi atas penerapan Whistle Blowing System telah ditindaklanjuti oleh unit kerja
b. Jika sebagian hasil evaluasi atas penerapan Whistle Blowing System telah ditindaklanjuti oleh unit kerja
c. Jika hasil evaluasi atas penerapan Whistle Blowing System belum ditindaklanjuti',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Whistle-Blowing System',
            ],

            // v. Penanganan Benturan Kepentingan
            [
                'penilaian' => 'a.	Telah terdapat identifikasi/pemetaan benturan kepentingan dalam tugas fungsi utama',
                'kriteria_nilai' => 'a. Jika terdapat  identifikasi/pemetaan benturan kepentingan pada seluruh tugas fungsi utama
b. Jika terdapat  identifikasi/pemetaan benturan kepentingan tetapi pada sebagian besar tugas fungsi utama
c. Jika terdapat  identifikasi/pemetaan benturan kepentingan tetapi pada sebagian kecil tugas fungsi utama
d. Jika belum terdapat  identifikasi/pemetaan benturan kepentingan dalam tugas fungsi utama',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Penanganan Benturan Kepentingan',
            ],

            [
                'penilaian' => 'b.	Penanganan Benturan Kepentingan telah disosialisasikan/internalisasi',
                'kriteria_nilai' => 'a. Jika penanganan Benturan Kepentingan disosialiasikan/diinternalisasikan ke seluruh layanan
b. Jika penanganan Benturan Kepentingan disosialiasikan/diinternalisasikan ke sebagian besar layanan
c.  Jika penanganan Benturan Kepentingan disosialiasikan/diinternalisasikan ke sebagian kecil layanan
d.  Jika penanganan Benturan Kepentingan belum disosialiasikan/diinternalisasikan ke seluruh layanan',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Penanganan Benturan Kepentingan',
            ],

            [
                'penilaian' => 'c.	Penanganan Benturan Kepentingan telah diimplementasikan',
                'kriteria_nilai' => 'a. Jika penanganan Benturan Kepentingan diimplementasikan ke seluruh layanan
b. Jika penanganan Benturan Kepentingan diimplementasikan ke sebagian besar layanan
c. Jika penanganan Benturan Kepentingan diimplementasikan ke sebagian kecil layanan
d. Jika penanganan Benturan Kepentingan belum diimplementasikan ke seluruh layanan',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Penanganan Benturan Kepentingan',
            ],

            [
                'penilaian' => 'd.	Telah dilakukan evaluasi atas Penanganan Benturan Kepentingan',
                'kriteria_nilai' => 'a. Jika penanganan Benturan Kepentingan dievaluasi secara berkala oleh unit kerja
b. Jika penanganan Benturan Kepentingan dievaluasi tetapi tidak secara berkala oleh unit kerja
c. Jika penanganan Benturan Kepentingan belum dievaluasi oleh unit kerja',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Penanganan Benturan Kepentingan',
            ],

            [
                'penilaian' => 'e.	Hasil evaluasi atas Penanganan Benturan Kepentingan telah ditindaklanjuti',
                'kriteria_nilai' => 'a. Jika seluruh hasil evaluasi atas Penanganan Benturan Kepentingan telah ditindaklanjuti oleh unit kerja
b. Jika sebagian hasil evaluasi atas Penanganan Benturan Kepentingan telah ditindaklanjuti oleh unit kerja
c. Jika belum ada hasil evaluasi atas Penanganan Benturan Kepentingan yang ditindaklanjuti unit kerja',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Penanganan Benturan Kepentingan',
            ],


            // PENINGKATAN KUALITAS PELAYANAN PUBLIK

                // i. Standar Pelayanan
            [
                'penilaian' => 'a. Terdapat kebijakan standar pelayanan',
                'kriteria_nilai' => 'a. Terdapat penetapan Standar Pelayanan terhadap seluruh jenis pelayanan, dan sesuai asas serta komponen standar pelayanan publik yang berlaku
b. Terdapat penetapan Standar Pelayanan terhadap sebagian jenis pelayanan, dan sesuai asas serta komponen standar pelayanan publik yang berlaku
c. Terdapat penetapan Standar Pelayanan terhadap seluruh jenis pelayanan, namun tidak sesuai asas serta komponen standar pelayanan publik yang berlaku
d. Terdapat penetapan Standar Pelayanan terhadap sebagian jenis pelayanan, namun tidak sesuai asas serta komponen standar pelayanan publik yang berlaku
e. Standar Pelayanan belum ditetapkan',
                'pilihan_jawaban' => 'A/B/C/D/E',
                'category' => 'Standar Pelayanan',
            ],
            [
                'penilaian' => 'b. Standar pelayanan telah dimaklumatkan',
                'kriteria_nilai' => 'a. Standar pelayanan telah dimaklumatkan pada seluruh jenis pelayanan dan dipublikasikan di website dan media lainnya
b. Standar pelayanan telah dimaklumatkan pada sebagian besar jenis pelayanan dan dipublikasikan minimal di website
c. Standar pelayanan telah dimaklumatkan pada sebagian kecil  jenis pelayanan dan belum dipublikasikan
d. Standar pelayanan belum dimaklumatkan pada seluruh jenis pelayanan dan belum dipublikasikan',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Standar Pelayanan',
            ],
            [
                'penilaian' => 'c. Dilakukan reviu dan perbaikan atas standar pelayanan',
                'kriteria_nilai' => 'a. Dilakukan reviu dan perbaikan atas standar pelayanan dan dilakukan dengan melibatkan stakeholders (antara lain : tokoh masyarakat,  akademisi, dunia usaha, dan lembaga swadaya masyarakat), serta memanfaatkan masukan hasil SKM dan pengaduan masyarakat
b. Dilakukan reviu dan perbaikan atas standar pelayanan dan dilakukan dengan memanfaatkan masukan hasil SKM dan pengaduan masyarakat, namun tanpa melibatkan stakeholders
c. Dilakukan reviu dan perbaikan atas standar pelayanan, namun  dilakukan tanpa memanfaatkan masukan hasil SKM dan pengaduan masyarakat, serta tanpa melibatkan stakeholders
d. Belum dilakukan reviu dan perbaikan atas standar pelayanan',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Standar Pelayanan',
            ],
            [
                'penilaian' => 'd.	telah melakukan publikasi atas standar pelayanan dan maklumat pelayanan',
                'kriteria_nilai' => 'Ya,telah melakukan publikasi atas tandar pelayanan dan maklumat pelayanan',
                'pilihan_jawaban' => 'Ya/Tidak',
                'category' => 'Standar Pelayanan',
            ],

            // ii. Budaya Pelayanan Prima
            [
                'penilaian' => 'a.	Telah dilakukan berbagai upaya peningkatan kemampuan dan/atau kompetensi tentang penerapan budaya pelayanan prima',
                'kriteria_nilai' => 'a. Telah dilakukan pelatihan/sosialisasi pelayanan prima secara berkelanjutan dan terjadwal, sehingga seluruh petugas/pelaksana layanan memiliki kompetensi sesuai kebutuhan jenis layanan serta telah dan terdapat monev yang melihat kemampuan/kecakapan petugas/pelaksana layanan
b. Telah dilakukan pelatihan/sosialisasi pelayanan prima, dan  seluruh petugas/pelaksana layanan memiliki kompetensi sesuai kebutuhan jenis layanan
c. Telah dilakukan pelatihan/sosialisasi pelayanan prima, akan tetapi baru sebagian besar petugas/pelaksana layanan memiliki kompetensi sesuai kebutuhan jenis layanan 
d. Telah dilakukan pelatihan/sosialisasi pelayanan prima namun secara terbatas, sehingga hanya sebagian kecil petugas/pelaksana layanan yang memiliki kompetensi sesuai kebutuhan jenis layanan 
e. Belum dilakukan pelatihan/sosialisasi pelayanan prima, dan seluruh petugas/pelaksana layanan belum memiliki kompetensi sesuai kebutuhan jenis layanan',
                'pilihan_jawaban' => 'A/B/C/D/E',
                'category' => 'Budaya Pelayanan Prima',
            ],
            [
                'penilaian' => 'b.	Informasi tentang pelayanan mudah diakses melalui berbagai media',
                'kriteria_nilai' => 'a. Seluruh Informasi tentang pelayanan dapat diakses secara online (website/media sosial) dan terhubung dengan sistem informasi pelayanan publik nasional
b. Seluruh Informasi tentang pelayanan dapat diakses secara online (website/media sosial), namun belum terhubung dengan sistem informasi pelayanan publik nasional
c. Seluruh Informasi tentang pelayanan belum online, hanya dapat diakses di tempat layanan (intranet dan non elektronik)
d. Informasi tentang pelayanan sulit diakses',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Budaya Pelayanan Prima',
            ],
            [
                'penilaian' => 'c.	Telah terdapat sistem pemberian penghargaan dan sanksi bagi petugas pemberi pelayanan',
                'kriteria_nilai' => 'a. Telah terdapat kebijakan pemberian penghargaan dan sanksi yang minimal memenuhi unsur penilaian: disiplin, kinerja, dan hasil penilaian pengguna layanan, dan telah diterapkan secara rutin/berkelanjutan
b. Telah terdapat kebijakan pemberian penghargaan dan sanksi yang minimal memenuhi unsur penilaian: disiplin, kinerja, dan hasil penilaian pengguna layanan, namun belum diterapkan secara rutin/berkelanjutan
c. Telah terdapat kebijakan pemberian penghargaan dan sanksi, namun belum memenuhi unsur penilaian minimal : disiplin, kinerja, dan hasil penilaian pengguna layanan
d. Belum terdapat kebijakan pemberian penghargaan dan sanksi',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Budaya Pelayanan Prima',
            ],
            [
                'penilaian' => 'd.	Telah terdapat sistem pemberian kompensasi kepada penerima layanan bila layanan tidak sesuai standar',
                'kriteria_nilai' => 'a. Telah terdapat sistem pemberian kompensasi bila layanan tidak sesuai standar bagi penerima layanan di seluruh jenis layanan
b. Telah terdapat sistem pemberian kompensasi bila layanan tidak sesuai standar bagi penerima layanan di sebagian besar jenis layanan 
c. Telah terdapat sistem pemberian kompensasi bila layanan tidak sesuai standar bagi penerima layanan di sebagian kecil jenis layanan 
d. Belum terdapat sistem pemberian kompensasi bila layanan tidak sesuai standar',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Budaya Pelayanan Prima',
            ],
            [
                'penilaian' => 'e.	Terdapat sarana layanan terpadu/terintegrasi',
                'kriteria_nilai' => 'a. Jika seluruh pelayanan sudah dilakukan secara terpadu/terintegrasi
b. Jika sebagian besar pelayanan sudah dilakukan secara terpadu/terintegrasi
c. Jika sebagian kecil pelayanan sudah dilakukan secara terpadu/terintegrasi
d. Jika tidak ada pelayanan yang dilakukan secara terpadu/terintegrasi',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Budaya Pelayanan Prima',
            ],
            [
                'penilaian' => 'f.	Terdapat inovasi pelayanan',
                'kriteria_nilai' => 'a. Jika unit kerja telah memiliki inovasi pelayanan yang  berbeda dengan unit kerja lain dan mendekatkan pelayanan dengan masyarakat serta telah direplikasi
b. Jika unit kerja telah memiliki inovasi pelayanan yang  berbeda dengan unit kerja lain dan mendekatkan pelayanan dengan masyarakat
c. Jika unit kerja memiliki inovasi yang merupakan replikasi dan pengembangan dari inovasi yang sudah ada 
d. Jika unit kerja telah memiliki inovasi akan tetapi merupakan pelaksanaan inovasi dari instansi pemerintah 
e. Jika  unit kerja belum memiliki inovasi pelayanan',
                'pilihan_jawaban' => 'A/B/C/D/E',
                'category' => 'Budaya Pelayanan Prima',
            ],

            // iii. Pengelolaan Pengaduan
            [
                'penilaian' => 'a.	Terdapat media pengaduan dan konsultasi pelayanan yang terintegrasi dengan SP4N-Lapor!',
                'kriteria_nilai' => 'a. Terdapat media konsultasi dan pengaduan secara offline dan online, tersedia petugas khusus yang menangani, dan terintegrasi dengan SP4N-LAPOR!
b. Terdapat media konsultasi dan pengaduan secara offline dan online, tersedia petugas khusus yang menangani namun belum terintegrasi dengan SP4N-LAPOR!
c. Terdapat media konsultasi dan pengaduan secara offline dan online, namun belum tersedia petugas khusus yang menangani
d. Hanya terdapat media konsultasi dan pengaduan secara offline
e. Tidak terdapat media konsultasi dan pengaduan',
                'pilihan_jawaban' => 'A/B/C/D/E',
                'category' => 'Pengelolaan Pengaduan',
            ],
            [
                'penilaian' => 'b.	Terdapat unit yang mengelola pengaduan dan konsultasi pelayanan',
                'kriteria_nilai' => 'a. Terdapat unit pengelola khusus untuk konsultasi dan pengaduan, serta surat penugasan pengelola SP4N-LAPOR! di level unit kerja
b. Terdapat SK pengelola SP4N-LAPOR! di level instansi dan/atau surat penugasan pengelola SP4N-LAPOR! di level unit kerja, namun unit pengelola khusus untuk konsultasi dan pengaduan belum ada
c. Belum terdapat unit pengelola khusus untuk konsultasi dan pengaduan, serta belum terdapat SK pengelola SP4N-LAPOR! di level instansi dan/atau surat penugasan pengelola SP4N-LAPOR! di level unit kerja',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Pengelolaan Pengaduan',
            ],
            [
                'penilaian' => 'c.	Telah dilakukan evaluasi atas penanganan keluhan/masukan dan konsultasi',
                'kriteria_nilai' => 'a. Evaluasi atas penanganan keluhan/masukan dan konsultasi dilakukan secara berkala
b. Evaluasi  atas penanganan keluhan/masukan dan konsultasi dilakukan  tidak berkala
c. Belum dilakukan evaluasi penanganan keluhan/masukan dan konsultasi',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Pengelolaan Pengaduan',
            ],

            // iv. Penilaian Kepuasan terhadap Pelayanan
            [
                'penilaian' => 'a.	Telah dilakukan survey kepuasan masyarakat terhadap pelayanan',
                'kriteria_nilai' => 'a. Survei kepuasan masyarakat terhadap pelayanan dilakukan minimal 4 kali dalam setahun
b. Survei kepuasan masyarakat terhadap pelayanan dilakukan minimal 3 kali dalam setahun
c. Survei kepuasan masyarakat terhadap pelayanan dilakukan minimal 2 kali dalam setahun
d. Survei kepuasan masyarakat terhadap pelayanan dilakukan minimal 1 kali dalam setahun
e. Belum dilakukan survei kepuasan masyarakat terhadap pelayanan',
                'pilihan_jawaban' => 'A/B/C/D/E',
                'category' => 'Penilaian Kepuasan',
            ],
            [
                'penilaian' => 'b.	Hasil survei kepuasan masyarakat dapat diakses secara terbuka',
                'kriteria_nilai' => 'a. Hasil survei kepuasan masyarakat dapat diakses secara  online (website, media sosial, dll) dan offline
b. Hasil survei kepuasan masyarakat hanya dapat diakses secara offline di tempat layanan
c. Hasil survei kepuasan masyarakat tidak dipublikasi',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Penilaian Kepuasan',
            ],
            [
                'penilaian' => 'c.	Dilakukan tindak lanjut atas hasil survei kepuasan masyarakat',
                'kriteria_nilai' => 'a. Jika dilakukan tindak lanjut atas seluruh hasil survei kepuasan masyarakat
b. Jika dilakukan tindak lanjut atas sebagian besar hasil survei kepuasan masyarakat
c. Jika dilakukan tindak lanjut atas sebagian kecil hasil survei kepuasan masyarakat
d. Jika belum dilakukan tindak lanjut atas hasil survei kepuasan masyarakat',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Penilaian Kepuasan',
            ],

            // v. Pemanfaatan Teknologi Informasi
            [
                'penilaian' => 'a.	Telah menerapkan teknologi informasi dalam memberikan pelayanan',
                'kriteria_nilai' => 'a. Terdapat pelayanan yang menggunakan teknologi informasi pada seluruh proses pemberian layanan
b. Terdapat pelayanan yang menggunakan teknologi informasi pada sebagian besar proses pemberian layanan
c. Terdapat pelayanan yang menggunakan teknologi informasi pada sebagian kecil proses pemberian layanan
d. Terdapat pelayanan yang belum menggunakan teknologi informasi pada proses pemberian pelayanan',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Pemanfaatan Teknologi Informasi',
            ],
            [
                'penilaian' => 'b. Telah membangun database pelayanan yang terintegrasi',
                'kriteria_nilai' => 'Ya, jika tela membangun database pelayanan yang terintegrasi',
                'pilihan_jawaban' => 'Ya/Tidak',
                'category' => 'Pemanfaatan Teknologi Informasi',
            ],
            [
                'penilaian' => 'c. Telah dilakukan perbaikan secara terus menerus',
                'kriteria_nilai' => 'a. Perbaikan dilakukan secara terus-menerus
b. Perbaikan dilakukan tidak secara terus menerus
c. Belum dilakukan perbaikan ',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Pemanfaatan Teknologi Informasi',
            ],


            // REFORM

            // MANAJEMEN PERUBAHAN

            // i. Komitmen dalam perubahan

            [
                'penilaian' => 'a. Agen perubahan telah membuat perubahan yang konkret di Instansi (dalam 1 tahun)',
                'kriteria_nilai' => 'Misalkan dengan kebijakan 1 Agen 1 Perubahan. Persentase diperoleh dari Jumlah Perubahan yang dibuat dibagi dengan Jumlah Agen Perubahan.',
                'pilihan_jawaban' => '%',
                'category' => 'Komitmen dalam Perubahan',
            ],
            [
                'penilaian' => '- Jumlah Agen Perubahan',
                'kriteria_nilai' => '',
                'pilihan_jawaban' => 'Jumlah',
                'category' => 'Komitmen dalam Perubahan',
            ],
            [
                'penilaian' => '- Jumlah Perubahan yang dibuat',
                'kriteria_nilai' => '',
                'pilihan_jawaban' => 'Jumlah',
                'category' => 'Komitmen dalam Perubahan',
            ],
            [
                'penilaian' => 'b. Perubahan yang dibuat Agen Perubahan telah terintegrasi dalam sistem manajemen',
                'kriteria_nilai' => '',
                'pilihan_jawaban' => '%',
                'category' => 'Komitmen dalam Perubahan',
            ],
            [
                'penilaian' => '- Jumlah Perubahan yang dibuat Agen Perubahan',
                'kriteria_nilai' => '',
                'pilihan_jawaban' => 'Jumlah',
                'category' => 'Komitmen dalam Perubahan',
            ],
            [
                'penilaian' => '- Jumlah Perubahan yang telah diintegrasikan dalam sistem manajemen',
                'kriteria_nilai' => '',
                'pilihan_jawaban' => 'Jumlah',
                'category' => 'Komitmen dalam Perubahan',
            ],

            
            // ii. Komitmen Pimpinan

            [
                'penilaian' => 'a. Pimpinan memiliki komitmen terhadap pelaksanaan reformasi birokrasi, dengan adanya target capaian reformasi yang jelas di dokumen perencanaan',
                'kriteria_nilai' => 'a. Target capaian zona integritas sudah ada di dokumen perencanaan unit kerja dan sebagian besar (diatas 80%) sudah tercapai
b. Target capaian zona integritas sudah ada di dokumen perencanaan unit kerja dan sebagian (diatas 50%) sudah tercapai
c. Target capaian zona integritas sudah ada di dokumen perencanaan unit kerja dan sebagian kecil (dibawah 50%) sudah tercapai
d. Target capaian zona integritassudah ada di dokumen perencanaan unit kerja, namun belum ada yang tercapai (masih dalam tahap pembangunan)
e. Tidak ada target capaian zona integritasdi dokumen perencanaan unit kerja',
                'pilihan_jawaban' => 'A/B/C/D/E',
                'category' => 'Komitmen Pimpinan',
            ],



            // iii. Membangun Budaya Kerja

            [
                'penilaian' => 'a. Instansi membangun budaya kerja positif dan menerapkan nilai-nilai organisasi dalam pelaksanaan tugas sehari-hari',
                'kriteria_nilai' => 'a. Budaya kerja dan nilai-nilai organisasi telah dinternalisasi ke seluruh anggota organisasi, dan penerapannya dituangkan dalam standar operasional pelaksanaan kegiatan/tugas 
b. Budaya kerja dan nilai-nilai organisasi telah dinternalisasi ke seluruh anggota organisasi, namun belum dituangkan dalam standar operasional pelaksanaan kegiatan/tugas
c. Budaya kerja dan nilai-nilai organisasi telah disusun, namun belum dinternalisasi ke seluruh anggota organisasi
d. Belum menyusun budaya kerja dan nilai-nilai organisasi',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Membangun Budaya Kerja',
            ],


            // PENATAAN TATALAKSANA

            // i. Peta Proses Bisnis Mempengaruhi Penyederhanaan Jabatan


            [
                'penilaian' => 'a. Telah disusun peta proses bisnis dengan adanya penyederhanaan jabatan',
                'kriteria_nilai' => 'a. Peta proses bisnis telah disusun dan mempengaruhi penyederhanaan seluruh jabatan
b. Peta proses bisnis telah disusun dan mempengaruhi penyederhanaan sebagian besar (lebih dari 50%) jabatan
c. Peta proses bisnis telah disusun dan mempengaruhi penyederhanaan sebagian kecil (kurang dari 50%)  jabatan
d. Peta proses bisnis telah disusun dan belum mempengaruhi penyederhanaan jabatan',
                'pilihan_jawaban' => 'A/B/C/D',
                'category' => 'Peta Proses Bisnis Mempengaruhi Penyederhanaan Jabatan',
            ],



            // ii. Sistem Pemerintahan Berbasis Elektronik (SPBE) yang Terintegrasi

            [
                'penilaian' => 'a. Implementasi SPBE telah terintegrasi dan mampu mendorong pelaksanaan pelayanan publik yang lebih cepat dan efisien',
                'kriteria_nilai' => 'a. Implementasi SPBE telah terintegrasi dan mampu mendorong pelaksanaan pelayanan publik yang lebih cepat dan efisien 
b. Implementasi SPBE telah mampu mendorong pelaksanaan pelayanan publik yang lebih cepat dan efisien, namun belum terintegrasi (parsial)
c. Implementasi SPBE belum mendorong pelaksanaan pelayanan publik yang lebih cepat dan efisien',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Sistem Pemerintahan Berbasis Elektronik (SPBE) yang Terintegrasi',
            ],
            [
                'penilaian' => 'b. Implementasi SPBE telah terintegrasi dan mampu mendorong pelaksanaan pelayanan internal organisasi yang lebih cepat dan efisien',
                'kriteria_nilai' => 'a. Implementasi SPBE telah terintegrasi dan mampu mendorong pelaksanaan pelayanan internal unit kerja yang lebih cepat dan efisien 
b. Implementasi SPBE telah mampu mendorong pelaksanaan pelayanan internal unit kerja yang lebih cepat dan efisien, namun belum terintegrasi (parsial)
c. Implementasi SPBE belum mendorong pelaksanaan pelayanan internal unit kerja yang lebih cepat dan efisien',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Sistem Pemerintahan Berbasis Elektronik (SPBE) yang Terintegrasi',
            ],


            // iii. Transformasi Digital Memberikan Nilai Manfaat
            
            [
                'penilaian' => 'a.	Transformasi digital pada bidang proses bisnis utama telah mampu memberikan nilai manfaat bagi unit kerja secara optimal',
                'kriteria_nilai' => 'a. Kriteria huruf b telah terpenuhi dan penerapan atau penggunaan dari manfaat/dampak dari transformasi digital pada bidang proses bisnis utama bagi unit kerja telah dilakukan validasi dan evaluasi serta ditindaklanjuti secara berkelanjutan
b. Kriteria huruf c telah terpenuhi dan manfaat/dampak dari transformasi digital pada bidang proses bisnis utama telah diterapkan/digunakan oleh unit kerja sesuai dengan sasaran dan target manfaat/dampak
c. Kriteria huruf d telah terpenuhi dan manfaat/dampak dari transformasi digital pada bidang proses bisnis utama telah mampu direalisasikan pada unit kerja sesuai dengan sasaran dan target manfaat/dampak
d. Kriteria huruf e telah terpenuhi dan kapabilitas prakiraan dan pelacakan terhadap sasaran dan target manfaat/dampak dari transformasi digital pada bidang proses bisnis utama
e. Sasaran dan target manfaat/dampak dari transformasi digital pada bidang proses bisnis utama telah direncanakan, didefinisikan, dan ditetapkan',
                'pilihan_jawaban' => 'A/B/C/D/E',
                'category' => 'Transformasi Digital Memberikan Nilai Manfaat',
            ],

            [
                'penilaian' => 'b.	Transformasi digital pada bidang administrasi pemerintahan telah mampu memberikan nilai manfaat bagi unit kerja secara optimal',
                'kriteria_nilai' => 'a. Kriteria huruf b telah terpenuhi dan penerapan atau penggunaan dari manfaat/dampak dari transformasi digital pada bidang administrasi pemerintahan bagi unit kerja telah dilakukan validasi dan evaluasi serta ditindaklanjuti secara berkelanjutan
b. Kriteria huruf c telah terpenuhi dan manfaat/dampak dari transformasi digital pada bidang administrasi pemerintahan telah diterapkan/digunakan oleh unit kerja sesuai dengan sasaran dan target manfaat/dampak
c. Kriteria huruf d telah terpenuhi dan manfaat/dampak dari transformasi digital pada bidang administrasi pemerintahan telah mampu direalisasikan pada unit kerja sesuai dengan sasaran dan target manfaat/dampak
d. Kriteria huruf e telah terpenuhi dan kapabilitas prakiraan dan pelacakan terhadap sasaran dan target manfaat/dampak dari transformasi digital pada bidang administrasi pemerintahan
e. Sasaran dan target manfaat/dampak dari transformasi digital pada bidang administrasi pemerintahan telah direncanakan, didefinisikan, dan ditetapkan',
                'pilihan_jawaban' => 'A/B/C/D/E',
                'category' => 'Transformasi Digital Memberikan Nilai Manfaat',
            ],

            [
                'penilaian' => 'c.	Transformasi digital pada bidang pelayanan publik telah mampu memberikan nilai manfaat bagi unit kerja secara optimal',
                'kriteria_nilai' => 'a. Kriteria huruf b telah terpenuhi dan penerapan atau penggunaan dari manfaat/dampak dari transformasi digital pada bidang pelayanan publik bagi unit kerja telah dilakukan validasi dan evaluasi serta ditindaklanjuti secara berkelanjutan
b. Kriteria huruf c telah terpenuhi dan manfaat/dampak dari transformasi digital pada bidang pelayanan publik telah diterapkan/digunakan oleh unit kerja sesuai dengan sasaran dan target manfaat/dampak
c. Kriteria huruf d telah terpenuhi dan manfaat/dampak dari transformasi digital pada bidang pelayanan publik telah mampu direalisasikan pada unit kerja sesuai dengan sasaran dan target manfaat/dampak
d. Kriteria huruf e telah terpenuhi dan kapabilitas prakiraan dan pelacakan terhadap sasaran dan target manfaat/dampak dari transformasi digital pada bidang pelayanan publik
e. Sasaran dan target manfaat/dampak dari transformasi digital pada bidang pelayanan publik telah direncanakan, didefinisikan, dan ditetapkan',
                'pilihan_jawaban' => 'A/B/C/D/E',
                'category' => 'Transformasi Digital Memberikan Nilai Manfaat',
            ],
            

            // PENATAAN SISTEM MANAJEMEN SDM APARATUR

            // i. Kinerja Individu


            [
                'penilaian' => 'a. Ukuran kinerja individu telah berorientasi hasil (outcome) sesuai pada levelnya',
                'kriteria_nilai' => 'a. Seluruh ukuran kinerja individu telah berorientasi hasil (outcome) sesuai pada levelnya
b. Sebagian ukuran kinerja individu telah berorientasi hasil (outcome) sesuai pada levelnya
c. Tidak ada ukuran kinerja individu yang berorientasi hasil (outcome)',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Kinerja Individu',
            ],


            // ii. Assessment Pegawai
            
            [
                'penilaian' => 'a. Hasil assement telah dijadikan pertimbangan untuk mutasi dan pengembangan karir pegawai',
                'kriteria_nilai' => 'a. Seluruh hasil assessment dijadikan dasar mutasi internal dan pengembangan kompetensi pegawai
b. Hasil assessment belum seluruhnya dijadikan mutasi internal dan pengembangan kompetensi pegawai
c. Hasil assessment belum dijadikan dasar mutasi internal dan pengembangan kompetensi pegawai',
                'pilihan_jawaban' => 'A/B/C',
                'category' => 'Assessment Pegawai',
            ],

            

            // iii. Pelanggaran Disiplin Pegawai

            [
                'penilaian' => 'a. Penurunan pelanggaran disiplin pegawai',
                'kriteria_nilai' => 'Persentase pernurunan pelanggaran disiplin pegawai diperoleh dari Jumlah pelanggaran tahun sebelumnya dikurangi Jumlah pelanggaran tahun ini kemudian dibagi dengan Jumlah pelanggaran tahun sebelumnya',
                'pilihan_jawaban' => '%',
                'category' => 'Pelanggaran Disiplin Pegawai',
            ],
            [
                'penilaian' => '- Jumlah pelanggaran tahun sebelumnya',
                'kriteria_nilai' => '',
                'pilihan_jawaban' => 'Jumlah',
                'category' => 'Pelanggaran Disiplin Pegawai',
            ],
            [
                'penilaian' => '- Jumlah pelanggaran tahun ini',
                'kriteria_nilai' => '',
                'pilihan_jawaban' => 'Jumlah',
                'category' => 'Pelanggaran Disiplin Pegawai',
            ],
            [
                'penilaian' => '- Jumlah pelanggaran yang telah diberikan sanksi/hukuman',
                'kriteria_nilai' => '',
                'pilihan_jawaban' => 'Jumlah',
                'category' => 'Pelanggaran Disiplin Pegawai',
            ],
            









            
        ];



        

        foreach ($criteria as $criterion) {
            Criterion::create($criterion);
        }
    }
}
