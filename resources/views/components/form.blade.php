<div id="form">
  <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
      <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl inline-block relative">
        Lengkapi Data dan Tuliskan Pengaduan
      </h2>
    </div>
    <form wire:submit.prevent="submit"action="#" method="POST" class="mx-auto mt-3 max-w-xl sm:mt-20 bg-white shadow-xl rounded-lg p-6">
      <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
        <div class="sm:col-span-2">
          <label for="klasifikasi-laporan" class="block text-base font-bold leading-6 text-gray-900 text-center">Pilih Klasifikasi Laporan</label>
          <div class="mt-6 mb-8 space-y-6">
            <div class="flex justify-center">
              <div class="flex flex-col sm:flex-row items-start gap-x-3 gap-y-3">
                <div class="flex items-center">
                  <input wire:model="selectedOption" id="pengaduan" name="push-notifications" type="radio" wire:model="selectedOption" value="pengaduan" onclick="text(0)" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti">
                  <label for="pengaduan" class="block text-sm font-medium leading-6 text-gray-900 ml-2 text-left">Pengaduan</label>
                </div>
                <div class="flex items-center">
                  <input wire:model="selectedOption" id="permintaan-informasi" name="push-notifications" type="radio" wire:model="selectedOption" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti">
                  <label for="permintaan-informasi" class="block text-sm font-medium leading-6 text-gray-900 ml-2 text-left">Permintaan Informasi</label>
                </div>
                <div class="flex items-center">
                  <input wire:model="selectedOption" id="saran" name="push-notifications" type="radio" wire:model="selectedOption" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti">
                  <label for="saran" class="block text-sm font-medium leading-6 text-gray-900 ml-2 text-left">Saran</label>
                </div>
                <div class="flex items-center">
                  <input wire:model="selectedOption" id="kerusakan" name="push-notifications" type="radio" wire:model="selectedOption" onclick="text(1)" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti">
                  <label for="kerusakan" class="block text-sm font-medium leading-6 text-gray-900 ml-2 text-left">Kerusakan</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <label for="tanggal-pengaduan" class="block text-sm font-semibold leading-6 text-gray-900">Tanggal Pengaduan</label>
          <div class="mt-2.5 relative max-w-sm">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
              </svg>
            </div>
            <input datepicker datepicker-buttons datepicker-autoselect-today type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
          </div>
        </div>
        <div>
          <label for="jenis-layanan" class="block text-sm font-semibold leading-6 text-gray-900">Pilih Jenis Layanan</label>
          <div class="mt-2.5">
            <select id="jenis-layanan" name="jenis-layanan" autocomplete="jenis-layanan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:max-w-xs sm:text-sm sm:leading-6">
              <option value="" disabled selected>Pilih Jenis Layanan</option>
              <option>Diklat</option>
              <option>Non Diklat</option>
            </select>
          </div>
        </div>
        <div>
          <label for="tipe" class="block text-sm font-semibold leading-6 text-gray-900">Tipe</label>
          <div class="mt-2.5">
            <select id="tipe" name="tipe" autocomplete="tipe-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:max-w-xs sm:text-sm sm:leading-6">
              <option value="" disabled selected>Pilih Tipe</option>
              <option>Daring</option>
              <option>Luring</option>
              <option>Hybrid</option>
            </select>
          </div>
        </div>
        <div>
          <label for="kategori-pengaduan" class="block text-sm font-semibold leading-6 text-gray-900">Kategori Pengaduan</label>
          <div class="mt-2.5">
            <select id="kategori-pengaduan" name="kategori-pengaduan" autocomplete="kategori-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:max-w-xs sm:text-sm sm:leading-6">
              <option value="" disabled selected>Pilih Kategori</option>
              <option>Kesesuaian persyaratan pelayanan</option>
              <option>Kemudahan prosedur</option>
              <option>Kecepatan pelayanan</option>
              <option>Biaya/tarif pelayanan</option>
              <option>Kesesuaian produk</option>
              <option>Perilaku petugas</option>
              <option>Kompetensi/kemampuan petugas</option>
              <option>Penanganan pengaduan</option>
              <option>Kualitas sarana dan prasarana</option>
            </select>
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="identitas" class="block text-sm font-semibold leading-6 text-gray-900 text-center mt-6">Identitas</label>
          <div class="mt-3 space-y-6">
            <div class="flex justify-start">
              <div class="flex flex-col md:flex-row items-start gap-3">
                <div class="flex items-center gap-x-2">
                  <input id="identitas-lengkap" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti">
                  <label for="identitas-lengkap" class="block text-sm font-medium leading-6 text-gray-900">Lengkap</label>
                </div>
                <div class="flex items-center gap-x-2">
                  <input id="peserta-diklat" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti">
                  <label for="peserta-diklat" class="block text-sm font-medium leading-6 text-gray-900">Peserta Diklat</label>
                </div>
                <div class="flex items-center gap-x-2">
                  <input id="peserta-pkl" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti">
                  <label for="peserta-pkl" class="block text-sm font-medium leading-6 text-gray-900">Peserta PKL</label>
                </div>
                <div class="flex items-center gap-x-2">
                  <input id="pengguna-fasilitas" name="push-notifications" type="radio" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti">
                  <label for="pengguna-fasilitas" class="block text-sm font-medium leading-6 text-gray-900">Pengguna Fasilitas</label>
                </div>
              </div>
            </div>
          </div>          
        </div>

        <div class="sm:col-span-2 mt-6">
          <label for="isi-pengaduan" class="block text-sm font-semibold leading-6 text-gray-900">Isi Pengaduan</label>
          <div class="mt-2.5">
            <textarea placeholder="Ketik Isi Laporan Anda" id="isi-pengaduan" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>
        @if ($selectedOption === 'show')
        <div class="col-span-full">
          <label for="upload-foto" class="block text-sm font-medium leading-6 text-gray-900">Foto</label>
          <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
            <div class="text-center">
              <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
              </svg>
              <div class="mt-4 flex text-sm leading-6 text-gray-600">
                <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-blue-bmti focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-bmti focus-within:ring-offset-2 hover:text-[#9ca3af]">
                  <span>Upload a file</span>
                  <input id="file-upload" name="file-upload" type="file" class="sr-only">
                </label>
                <p class="pl-1">or drag and drop</p>
              </div>
              <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
            </div>
          </div>
        </div>
        @endif
      </div>
      <div class="mt-10">
        <button type="submit" class="block w-full rounded-md bg-blue-bmti px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-[#60a5fa] transition ease-in-out duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">ADUKAN!</button>
      </div>
    </form>
  </div>
</div>