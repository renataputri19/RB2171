<x-filament::page>
    <div class="overflow-hidden shadow rounded-lg bg-white dark:bg-gray-800 p-4">
        <h2 class="text-xl font-bold mb-4 text-gray-900 dark:text-gray-200">Rekapitulasi Nilai Pilar</h2>
        <table class="table-auto w-full text-left border-collapse border border-gray-300 dark:border-gray-600">
            <thead>
                <tr class="bg-gray-200 dark:bg-gray-700">
                    <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">Pilar</th>
                    <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">Total Bobot</th>
                    <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">Total Nilai Unit</th>
                    <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">Total Nilai TPI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['pillars'] as $pillar)
                    <tr>
                        <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-800 dark:text-gray-300">{{ $pillar['pilar'] }}</td>
                        <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-800 dark:text-gray-300">{{ $pillar['total_bobot'] }}</td>
                        <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-800 dark:text-gray-300">{{ $pillar['total_nilai_unit'] }}</td>
                        <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-800 dark:text-gray-300">{{ $pillar['total_nilai_tpi'] }}</td>
                    </tr>
                @endforeach
                <tr class="bg-gray-100 dark:bg-gray-700 font-bold">
                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">Total</td>
                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">{{ $data['summary']['total_bobot'] }}</td>
                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">{{ $data['summary']['total_nilai_unit'] }}</td>
                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-gray-900 dark:text-gray-200">{{ $data['summary']['total_nilai_tpi'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-filament::page>
