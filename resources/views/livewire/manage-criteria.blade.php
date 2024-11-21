<div>
    <!-- Flash Message -->
    @if (session()->has('message'))
        <div class="bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200 text-center py-2 mb-4 rounded shadow-md">
            {{ session('message') }}
        </div>
    @endif



    <div class="space-y-6">
        @foreach ($criteria as $criterion)
            <div class="p-4 border rounded-lg bg-gray-100 dark:bg-gray-800">
                <h4 class="font-bold mb-4 text-gray-800 dark:text-gray-200">
                    {{ $criterion['kriteria_nilai'] }}
                </h4>
    
                <!-- Pilihan Jawaban -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-800 dark:text-gray-200">Pilihan Jawaban</label>
                    <p class="block w-full border border-gray-300 dark:border-gray-600 rounded-md p-2 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-200">
                        {{ $criterion['pilihan_jawaban'] }}
                    </p>
                </div>
    
                <!-- Jawaban Unit & Nilai Unit -->
                <div class="flex space-x-4 mb-4">
                    <div class="flex-1" >
                        <label class="block text-sm font-medium text-gray-800 dark:text-gray-200">Jawaban Unit</label>
                        <input type="text" value="{{ $criterion['jawaban_unit'] }}"
                               class="block w-full border border-gray-300 dark:border-gray-600 rounded-md p-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200"
                               wire:change="updateRow({{ $criterion['id'] }}, 'jawaban_unit', $event.target.value)">
                    </div>
                    <div class="flex-1">
                        <label class="block text-sm font-medium text-gray-800 dark:text-gray-200">Nilai Unit</label>
                        <input type="text" value="{{ $criterion['nilai_unit'] }}"
                               class="block w-full border border-gray-300 dark:border-gray-600 rounded-md p-2 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-200"
                               readonly>
                    </div>
                </div>
    
                <!-- Catatan Unit & Bukti Dukung -->
                <div class="flex space-x-4 mb-4">
                    <div class="flex-1">
                        <label class="block text-sm font-medium text-gray-800 dark:text-gray-200">Catatan Unit</label>
                        <textarea
                            class="block w-full border border-gray-300 dark:border-gray-600 rounded-md p-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200"
                            wire:change="updateRow({{ $criterion['id'] }}, 'catatan_unit', $event.target.value)"
                            rows="3">{{ $criterion['catatan_unit'] }}</textarea>
                    </div>
                    <div class="flex-1">
                        <label class="block text-sm font-medium text-gray-800 dark:text-gray-200">Bukti Dukung</label>
                        <textarea
                            class="block w-full border border-gray-300 dark:border-gray-600 rounded-md p-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200"
                            wire:change="updateRow({{ $criterion['id'] }}, 'bukti_dukung_unit', $event.target.value)"
                            rows="3">{{ $criterion['bukti_dukung_unit'] }}</textarea>
                    </div>
                </div>
    
                <!-- URL Bukti Dukung -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-800 dark:text-gray-200">URL Bukti Dukung</label>
                    <input type="text" value="{{ $criterion['url_bukti_dukung'] }}"
                           class="block w-full border border-gray-300 dark:border-gray-600 rounded-md p-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200"
                           wire:change="updateRow({{ $criterion['id'] }}, 'url_bukti_dukung', $event.target.value)">
                </div>
    
                <!-- Jawaban TPI & Nilai TPI -->
                <div class="flex space-x-4 mb-4">
                    <div class="flex-1">
                        <label class="block text-sm font-medium text-gray-800 dark:text-gray-200">Jawaban TPI</label>
                        <input type="text" value="{{ $criterion['jawaban_tpi'] }}"
                               class="block w-full border border-gray-300 dark:border-gray-600 rounded-md p-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200"
                               wire:change="updateRow({{ $criterion['id'] }}, 'jawaban_tpi', $event.target.value)">
                    </div>
                    <div class="flex-1">
                        <label class="block text-sm font-medium text-gray-800 dark:text-gray-200">Nilai TPI</label>
                        <input type="text" value="{{ $criterion['nilai_tpi'] }}"
                               class="block w-full border border-gray-300 dark:border-gray-600 rounded-md p-2 bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-200"
                               readonly>
                    </div>
                </div>
    
                <!-- Catatan Reviu TPI -->
                <div>
                    <label class="block text-sm font-medium text-gray-800 dark:text-gray-200">Catatan Reviu TPI</label>
                    <textarea
                        class="block w-full border border-gray-300 dark:border-gray-600 rounded-md p-2 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200"
                        wire:change="updateRow({{ $criterion['id'] }}, 'catatan_reviu_tpi', $event.target.value)"
                        rows="3">{{ $criterion['catatan_reviu_tpi'] }}</textarea>
                </div>
            </div>
        @endforeach
    </div>
    
    
</div>