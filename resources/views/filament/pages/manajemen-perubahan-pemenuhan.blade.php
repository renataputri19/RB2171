<x-filament::page>
    <div class="space-y-4">
        <!-- Title -->
        <h1 class="text-2xl font-bold">1. Manajemen Perubahan - Pemenuhan</h1>

    <!-- Dropdown -->
    <label for="section-select" class="block text-sm font-medium text-gray-900 dark:text-white">Select Section</label>
    <select id="section-select" 
            class="block w-full mt-2 p-2 border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-white rounded-md shadow-sm" 
            onchange="showSection(this.value)">
        <option value="penyusunan-tim-kerja">i. Penyusunan Tim Kerja</option>
        <option value="rencana-pembangunan-zi">ii. Rencana Pembangunan Zona Integritas</option>
        <option value="pemantauan-evaluasi">iii. Pemantauan dan Evaluasi Pembangunan WBK/WBBM</option>
        <option value="perubahan-budaya-kerja">iv. Perubahan Pola Pikir dan Budaya Kerja</option>
    </select>


        


        <!-- Sections -->
        <div id="penyusunan-tim-kerja" class="section hidden">
            <h2 class="text-xl font-semibold mt-4">i. Penyusunan Tim Kerja</h2>
            <livewire:manage-criteria />
        </div>

        <div id="rencana-pembangunan-zi" class="section hidden">
            <h2 class="text-xl font-semibold mt-4">ii. Rencana Pembangunan Zona Integritas</h2>
            <table class="table-auto border-collapse border border-gray-300 w-full text-sm text-left">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Kriteria Nilai</th>
                        <th class="border border-gray-300 px-4 py-2">Pilihan Jawaban</th>
                        <th class="border border-gray-300 px-4 py-2">Catatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">a. Terdapat dokumen rencana kerja pembangunan Zona Integritas menuju WBK/WBBM</td>
                        <td class="border border-gray-300 px-4 py-2">Ya/Tidak</td>
                        <td class="border border-gray-300 px-4 py-2">Ya, jika memiliki rencana kerja pembangunan Zona Integritas.</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">b. Dalam dokumen pembangunan terdapat target-target prioritas yang relevan</td>
                        <td class="border border-gray-300 px-4 py-2">A/B/C</td>
                        <td class="border border-gray-300 px-4 py-2">
                            a. Jika semua target-target prioritas relevan<br>
                            b. Jika sebagian target-target prioritas relevan<br>
                            c. Jika tidak ada target-target prioritas yang relevan
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="pemantauan-evaluasi" class="section hidden">
            <h2 class="text-xl font-semibold mt-4">iii. Pemantauan dan Evaluasi Pembangunan WBK/WBBM</h2>
            <p>... Add content here ...</p>
        </div>

        <div id="perubahan-budaya-kerja" class="section hidden">
            <h2 class="text-xl font-semibold mt-4">iv. Perubahan Pola Pikir dan Budaya Kerja</h2>
            <p>... Add content here ...</p>
        </div>
    </div>

    <!-- JavaScript to toggle sections -->
    <script>
        function showSection(sectionId) {
            document.querySelectorAll('.section').forEach(section => {
                section.classList.add('hidden');
            });
            document.getElementById(sectionId).classList.remove('hidden');
        }

        // Set default visible section
        document.getElementById('penyusunan-tim-kerja').classList.remove('hidden');
    </script>
</x-filament::page>
