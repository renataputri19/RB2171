<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Title -->
                    <h3 class="text-2xl font-bold">Pemenuhan</h3>
                    <p class="text-lg font-medium">MANAJEMEN PERUBAHAN</p>

                    <!-- Summary Table -->
                    <table class="w-full table-auto border-collapse border border-gray-300 dark:border-gray-600 mt-6">
                        <thead>
                            <tr class="bg-gray-100 dark:bg-gray-700">
                                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-left">Penilaian</th>
                                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-center">Bobot</th>
                                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-center">Nilai Unit</th>
                                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-center">Nilai TPI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $category['category'] }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-center">{{ number_format($category['bobot'], 2) }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-center">{{ number_format($category['nilai_unit'], 2) }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-center">{{ number_format($category['nilai_tpi'], 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="bg-gray-100 dark:bg-gray-700 font-bold">
                                <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-right">Total</td>
                                <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-center">{{ number_format($totalBobot, 2) }}</td>
                                <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-center">{{ number_format($totalNilaiUnit, 2) }}</td>
                                <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-center">{{ number_format($totalNilaiTpi, 2) }}</td>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
