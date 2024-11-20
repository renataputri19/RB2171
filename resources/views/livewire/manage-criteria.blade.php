<div>
    <!-- Flash Message -->
    @if (session()->has('message'))
        <div class="bg-green-500 text-white text-center py-2 mb-4 rounded">
            {{ session('message') }}
        </div>
    @endif

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="table-auto w-full border border-gray-200 dark:border-gray-700">
            <thead class="bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-200">
                <tr>
                    <th class="border px-4 py-2 dark:border-gray-700">Kriteria Nilai</th>
                    <th class="border px-4 py-2 dark:border-gray-700">Pilihan Jawaban</th>
                    <th class="border px-4 py-2 dark:border-gray-700">Jawaban Unit</th>
                    <th class="border px-4 py-2 dark:border-gray-700">Nilai Unit</th>
                    <th class="border px-4 py-2 dark:border-gray-700">Catatan Unit</th>
                    <th class="border px-4 py-2 dark:border-gray-700">Bukti Dukung</th>
                    <th class="border px-4 py-2 dark:border-gray-700">URL Bukti Dukung</th>
                    <th class="border px-4 py-2 dark:border-gray-700">Jawaban TPI</th>
                    <th class="border px-4 py-2 dark:border-gray-700">Nilai TPI</th>
                    <th class="border px-4 py-2 dark:border-gray-700">Catatan Reviu TPI</th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-200">
                @foreach ($criteria as $criterion)
                <tr class="border-t dark:border-gray-700">
                    <td class="border px-4 py-2 dark:border-gray-700">{{ $criterion['kriteria_nilai'] }}</td>
                    <td class="border px-4 py-2 dark:border-gray-700">{{ $criterion['pilihan_jawaban'] }}</td>
                    <td class="border px-4 py-2 dark:border-gray-700">
                        <input type="text" value="{{ $criterion['jawaban_unit'] }}"
                               class="w-full border border-gray-300 dark:border-gray-600 rounded p-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200"
                               wire:change="updateRow({{ $criterion['id'] }}, 'jawaban_unit', $event.target.value)">
                    </td>
                    <td class="border px-4 py-2 dark:border-gray-700">{{ $criterion['nilai_unit'] }}</td>
                    <td class="border px-4 py-2 dark:border-gray-700">
                        <input type="text" value="{{ $criterion['catatan_unit'] }}"
                               class="w-full border border-gray-300 dark:border-gray-600 rounded p-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200"
                               wire:change="updateRow({{ $criterion['id'] }}, 'catatan_unit', $event.target.value)">
                    </td>
                    <td class="border px-4 py-2 dark:border-gray-700">
                        <input type="text" value="{{ $criterion['bukti_dukung_unit'] }}"
                               class="w-full border border-gray-300 dark:border-gray-600 rounded p-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200"
                               wire:change="updateRow({{ $criterion['id'] }}, 'bukti_dukung_unit', $event.target.value)">
                    </td>
                    <td class="border px-4 py-2 dark:border-gray-700">
                        <input type="text" value="{{ $criterion['url_bukti_dukung'] }}"
                               class="w-full border border-gray-300 dark:border-gray-600 rounded p-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200"
                               wire:change="updateRow({{ $criterion['id'] }}, 'url_bukti_dukung', $event.target.value)">
                    </td>
                    <td class="border px-4 py-2 dark:border-gray-700">
                        <input type="text" value="{{ $criterion['jawaban_tpi'] }}"
                               class="w-full border border-gray-300 dark:border-gray-600 rounded p-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200"
                               wire:change="updateRow({{ $criterion['id'] }}, 'jawaban_tpi', $event.target.value)">
                    </td>
                    <td class="border px-4 py-2 dark:border-gray-700">{{ $criterion['nilai_tpi'] }}</td>
                    <td class="border px-4 py-2 dark:border-gray-700">
                        <input type="text" value="{{ $criterion['catatan_reviu_tpi'] }}"
                               class="w-full border border-gray-300 dark:border-gray-600 rounded p-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200"
                               wire:change="updateRow({{ $criterion['id'] }}, 'catatan_reviu_tpi', $event.target.value)">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
