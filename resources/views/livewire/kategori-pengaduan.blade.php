<div id="kategori-pengaduan-section">
    <label for="kategori-pengaduan" class="block text-sm font-semibold leading-6 text-gray-900">
        Kategori Pengaduan <span class="text-red-600">*</span>
    </label>
    <div class="relative mt-3">
        <select id="kategori-pengaduan" name="kategori-pengaduan" wire:model="selectedKategori"
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:max-w-xs sm:text-sm sm:leading-6">
            <option value="">Pilih Kategori</option>
            @foreach ($kategoriPengaduan as $kategori)
                <option value="{{ $kategori->kategori_id }}">{{ $kategori->nama_kategori }}</option>
            @endforeach
        </select>
    </div>
    @if ($errors->has('selectedKategori'))
        <p class="mt-2 text-xs text-red-600 dark:text-red-400">
            <span class="font-medium">Perhatian!</span> {{ $errors->first('selectedKategori') }}
        </p>
    @endif
</div>
