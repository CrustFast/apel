<div id="kategori-pengaduan-section">
    <label for="kategori-pengaduan" class="block text-sm font-semibold leading-6 text-gray-900">
        4. Kategori Pengaduan <span class="text-red-600">*</span>
    </label>
    <div class="relative mt-3">
        <select id="kategori-pengaduan" name="kategori-pengaduan" wire:model="kategori_pengaduan_id"
            class="block w-full rounded-lg border border-gray-300 py-2.5 px-2.5 text-gray-900 bg-transparent shadow-sm ring-0 focus:outline-none focus:ring-0 focus:border-blue-600 sm:text-sm sm:leading-6">
            <option value="">Pilih Kategori</option> <!-- Opsi default -->
            @foreach ($kategoriPengaduan as $id => $nama_kategori)
                <option value="{{ $id }}">{{ $nama_kategori }}</option>
            @endforeach
        </select>
    </div>
    @if ($errors->has('kategori_pengaduan_id'))
        <p class="mt-2 text-xs text-red-600 dark:text-red-400">
            <span class="font-medium">Perhatian!</span> {{ $errors->first('kategori_pengaduan_id') }}
        </p>
    @endif
</div>
