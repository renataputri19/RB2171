<x-filament::page>
    <div class="space-y-6">
        @foreach ($data as $pilar)
        <div class="bg-white shadow rounded p-6 mb-6">
            <h2 class="text-xl font-bold">{{ $pilar['pilar'] }}</h2>
            <table class="table-auto w-full mt-4 border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Penilaian</th>
                        <th class="border border-gray-300 px-4 py-2">Bobot</th>
                        <th class="border border-gray-300 px-4 py-2">Nilai Unit</th>
                        <th class="border border-gray-300 px-4 py-2">Nilai TPI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pilar['categories'] as $category)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $category['penilaian'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $category['bobot'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $category['nilai_unit'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $category['nilai_tpi'] }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 font-bold">Total</td>
                        <td class="border border-gray-300 px-4 py-2 font-bold">{{ $pilar['total_bobot'] }}</td>
                        <td class="border border-gray-300 px-4 py-2 font-bold">{{ $pilar['total_nilai_unit'] }}</td>
                        <td class="border border-gray-300 px-4 py-2 font-bold">{{ $pilar['total_nilai_tpi'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endforeach
    
    </div>
</x-filament::page>
