<x-filament::page>
    <div class="overflow-hidden shadow rounded-lg bg-white p-4">
        <h2 class="text-xl font-bold mb-4">Rekapitulasi Nilai Pilar</h2>
        <table class="table-auto w-full text-left border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">Pilar</th>
                    <th class="border border-gray-300 px-4 py-2">Total Bobot</th>
                    <th class="border border-gray-300 px-4 py-2">Total Nilai Unit</th>
                    <th class="border border-gray-300 px-4 py-2">Total Nilai TPI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $pillar)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $pillar['pilar'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ number_format($pillar['total_bobot'], 2) }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ number_format($pillar['total_nilai_unit'], 2) }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ number_format($pillar['total_nilai_tpi'], 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-filament::page>
