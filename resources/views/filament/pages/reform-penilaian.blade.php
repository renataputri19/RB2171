<x-filament::page>
    <div class="space-y-6">
        @foreach ($data['data'] as $pilar)
            <div class="shadow rounded p-6 mb-6 bg-white dark:bg-gray-800">
                <h2 class="text-xl font-bold text-gray-900 dark:text-gray-100">{{ $pilar['pilar'] }}</h2>
                <table class="table-auto w-full mt-4 border-collapse border border-gray-300 dark:border-gray-700">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100">Penilaian</th>
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100">Bobot</th>
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100">Nilai Unit</th>
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100">Nilai TPI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pilar['categories'] as $category)
                            <tr>
                                <td class="border border-gray-300 dark:border-gray-700 px-4 py-2 text-gray-800 dark:text-gray-200">{{ $category['penilaian'] }}</td>
                                <td class="border border-gray-300 dark:border-gray-700 px-4 py-2 text-gray-800 dark:text-gray-200">{{ $category['bobot'] }}</td>
                                <td class="border border-gray-300 dark:border-gray-700 px-4 py-2 text-gray-800 dark:text-gray-200">{{ $category['nilai_unit'] }}</td>
                                <td class="border border-gray-300 dark:border-gray-700 px-4 py-2 text-gray-800 dark:text-gray-200">{{ $category['nilai_tpi'] }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="border border-gray-300 dark:border-gray-700 px-4 py-2 font-bold bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100">Total</td>
                            <td class="border border-gray-300 dark:border-gray-700 px-4 py-2 font-bold text-gray-800 dark:text-gray-200">{{ $pilar['total_bobot'] }}</td>
                            <td class="border border-gray-300 dark:border-gray-700 px-4 py-2 font-bold text-gray-800 dark:text-gray-200">{{ $pilar['total_nilai_unit'] }}</td>
                            <td class="border border-gray-300 dark:border-gray-700 px-4 py-2 font-bold text-gray-800 dark:text-gray-200">{{ $pilar['total_nilai_tpi'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endforeach

        <!-- Grand Total -->
        <div class="shadow rounded p-6 bg-white dark:bg-gray-800">
            <h2 class="text-xl font-bold text-gray-900 dark:text-gray-100">Grand Total</h2>
            <table class="table-auto w-full mt-4 border-collapse border border-gray-300 dark:border-gray-700">
                <thead>
                    <tr>
                        <th class="border border-gray-300 dark:border-gray-700 px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100">Total Bobot</th>
                        <th class="border border-gray-300 dark:border-gray-700 px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100">Total Nilai Unit</th>
                        <th class="border border-gray-300 dark:border-gray-700 px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100">Total Nilai TPI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 dark:border-gray-700 px-4 py-2 font-bold text-gray-800 dark:text-gray-200">{{ $data['summary']['total_bobot'] }}</td>
                        <td class="border border-gray-300 dark:border-gray-700 px-4 py-2 font-bold text-gray-800 dark:text-gray-200">{{ $data['summary']['total_nilai_unit'] }}</td>
                        <td class="border border-gray-300 dark:border-gray-700 px-4 py-2 font-bold text-gray-800 dark:text-gray-200">{{ $data['summary']['total_nilai_tpi'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-filament::page>
