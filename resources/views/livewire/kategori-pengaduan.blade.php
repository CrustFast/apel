<div id="kategori-pengaduan-section" class="hidden">
    <label for="kategori-pengaduan" class="block text-sm font-semibold leading-6 text-gray-900">Kategori Pengaduan</label>
    <div class="mt-2.5">
        <select id="kategori-pengaduan" name="kategori-pengaduan" autocomplete="kategori-name"
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:max-w-xs sm:text-sm sm:leading-6">
            <option value="" disabled selected>Pilih Kategori</option>
            @foreach ($kategoriPengaduan as $id => $nama_kategori)
                <option value="{{ $id }}">{{ $nama_kategori }}</option>
            @endforeach
        </select>
    </div>
</div>
