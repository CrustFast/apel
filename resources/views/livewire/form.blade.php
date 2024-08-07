<div id="form">
  <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
      <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
      </div>
    </div>
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl inline-block relative">Lengkapi Data dan Tuliskan Pengaduan</h2>
    </div>
    <form wire:submit.prevent="submit" class="mx-auto mt-3 max-w-xl sm:mt-20 bg-white shadow-xl rounded-lg p-6">
      <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
        <div class="sm:col-span-2">
          <label for="klasifikasi-laporan" class="block text-base font-bold leading-6 text-gray-900 text-center">Pilih Klasifikasi Laporan</label>
          <div class="mt-6 mb-8 space-y-6">
            <div class="flex justify-center">
              <div class="flex flex-col sm:flex-row items-start gap-x-3 gap-y-3">
                <div class="flex items-center">
                  <input id="pengaduan" wire:model="klasifikasiLaporan" name="klasifikasiLaporan" type="radio" value="pengaduan" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti" onclick="toggleElements()">
                  <label for="pengaduan" class="block text-sm font-medium leading-6 text-gray-900 ml-2 text-left">Pengaduan</label>
                </div>
                <div class="flex items-center">
                  <input id="permintaan-informasi" wire:model="klasifikasiLaporan" name="klasifikasiLaporan" type="radio" value="permintaan-informasi" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti" onclick="toggleElements()">
                  <label for="permintaan-informasi" class="block text-sm font-medium leading-6 text-gray-900 ml-2 text-left">Permintaan Informasi</label>
                </div>
                <div class="flex items-center">
                  <input id="saran" wire:model="klasifikasiLaporan" name="klasifikasiLaporan" type="radio" value="saran" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti" onclick="toggleElements()">
                  <label for="saran" class="block text-sm font-medium leading-6 text-gray-900 ml-2 text-left">Saran</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        @error('klasifikasiLaporan') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        <div id="tanggal-pengaduan-section" class="hidden">
          <label for="tanggal-pengaduan" class="block text-sm font-semibold leading-6 text-gray-900">Tanggal Pengaduan</label>
          <div class="mt-2.5 relative max-w-sm">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 1 0 0-2Z" />
              </svg>
            </div>
            <input datepicker datepicker-autohide datepicker-buttons datepicker-autoselect-today type="text" class="text-gray-900 text-sm rounded-lg shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
          </div>
        </div>
        <div id="jenis-layanan-section">
          <label for="jenis-layanan" class="block text-sm font-semibold leading-6 text-gray-900">Pilih Jenis Layanan</label>
          <div class="mt-2.5">
            <select id="jenis-layanan" name="jenis-layanan" autocomplete="jenis-layanan" class="block w-full rounded-md border-0 py-1.5 text-gray-800 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:max-w-xs sm:text-sm sm:leading-6" onchange="updateTipeOptions()">
              <option value="" disabled selected>Pilih Jenis Layanan</option>
              <option value="diklat">Diklat</option>
              <option value="non-diklat">Non Diklat</option>
            </select>
          </div>
        </div>
        <div id="tipe-section" class="hidden">
          <label for="tipe" class="block text-sm font-semibold leading-6 text-gray-900">Tipe</label>
          <div class="mt-2.5">
            <select id="tipe" name="tipe" autocomplete="tipe-name" class="block w-full rounded-md border-0 py-1.5 text-gray-800 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:max-w-xs sm:text-sm sm:leading-6" onchange="toggleFieldsBasedOnTipe()">
              <option value="" disabled selected>Pilih Tipe</option>
            </select>
          </div>
        </div>
        @livewire('kategori-pengaduan') {{-- Memanggil Komponen Livewire Kategori Pengaduan --}}
        
        {{-- Fields baru untuk Peserta Diklat --}}
        <div id="peserta-diklat-fields" class="hidden">
          <div class="sm:col-span-2 mt-6">
            <label for="periode-diklat" class="block text-sm font-semibold leading-6 text-gray-900">Periode Diklat</label>
            <div date-rangepicker class="flex items-center mt-2">
              <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                      <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 1 0 0-2Z"/>
                    </svg>
                </div>
                <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Mulai">
              </div>
              <span class="mx-4 text-gray-500">to</span>
              <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 1 0 0-2Z"/>
                    </svg>
                </div>
                <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Akhir">
            </div>
            </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="nama-diklat" class="block text-sm font-semibold leading-6 text-gray-900">Nama Diklat</label>
            <div class="relative mt-3">
              <input type="text" id="nama-diklat" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="nama-diklat" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Nama Diklat</label>
            </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="nama-peserta-diklat" class="block text-sm font-semibold leading-6 text-gray-900">Nama Peserta</label>
            <div class="relative mt-3">
              <input type="text" id="nama-peserta-diklat" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="nama-peserta-diklat" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Nama Peserta</label>
            </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="nomor-telepon-peserta-diklat" class="block text-sm font-semibold leading-6 text-gray-900">Nomor Telepon Peserta Diklat</label>
          <div class="relative mt-3">
            <input type="text" id="nomor-telepon" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="nomor-telepon" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">0812345678</label>
          </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="asal-smk-peserta-diklat" class="block text-sm font-semibold leading-6 text-gray-900">Asal SMK</label>
            <div class="relative mt-3">
              <input type="text" id="asal-smk-peserta-diklat" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="asal-smk-peserta-diklat" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Asal SMK</label>
            </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="program-keahlian" class="block text-sm font-semibold leading-6 text-gray-900">Program Keahlian</label>
            <div class="mt-2.5">
                <select id="program-keahlian" name="program-keahlian" autocomplete="program-keahlian-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:max-w-xs sm:text-sm sm:leading-6">
                    <option value="" disabled selected>Pilih Program Keahlian</option>
                    @foreach ($programKeahlianOptions as $option)
                        <option value="{{ $option->id }}">{{ $option->nama_program_keahlian }}</option>
                    @endforeach
                </select>
            </div>
          </div>        
        </div>

        {{-- Fields baru untuk Peserta PKL --}}
        <div id="peserta-pkl-fields" class="hidden">
          <div class="sm:col-span-2 mt-6">
            <label for="Tanggal-magang" class="block text-sm font-semibold leading-6 text-gray-900">Pilih Tanggal Magang</label>
            <div class="relative mt-3 max-w-sm">
              <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 1 0 0-2Z" />
              </svg>
              </div>
              <input datepicker datepicker-buttons datepicker-autoselect-today type="text" class="text-gray-900 text-sm rounded-lg shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select year">
            </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="nama-peserta-pkl" class="block text-sm font-semibold leading-6 text-gray-900">Nama Peserta PKL</label>
            <div class="relative mt-3">
              <input type="text" id="nama-peserta-pkl" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="nama-peserta-pkl" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Nama Peserta PKL</label>
            </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="asal-smk-peserta-pkl" class="block text-sm font-semibold leading-6 text-gray-900">Asal SMK</label>
            <div class="relative mt-3">
              <input type="text" id="asal-smk-peserta-pkl" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="asal-smk-peserta-pkl" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Asal SMK</label>
            </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="unit" class="block text-sm font-semibold leading-6 text-gray-900">Unit</label>
            <div class="relative mt-3">
              <input type="text" id="unit" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="unit" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Unit</label>
            </div>
          </div>
        </div>

        {{-- Fields baru untuk Pengguna Fasilitas --}}
        <div id="pengguna-fasilitas-fields" class="hidden">
          <div class="sm:col-span-2 mt-6">
            <label for="tanggal-penggunaan" class="block text-sm font-semibold leading-6 text-gray-900">Tanggal Penggunaan</label>
            <div date-rangepicker class="flex items-center mt-2">
              <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                      <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 1 0 0-2Z"/>
                    </svg>
                </div>
                <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Mulai">
              </div>
              <span class="mx-4 text-gray-500">to</span>
              <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 1 0 0-2Z"/>
                    </svg>
                </div>
                <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Akhir">
            </div>
            </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="nama-pengguna-fasilitas" class="block text-sm font-semibold leading-6 text-gray-900">Nama Pengguna Fasilitas</label>
            <div class="relative mt-3">
              <input type="text" id="nama-pengguna-fasilitas" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="nama-pengguna-fasilitas" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Nama Anda</label>
            </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="nomor-telepon-pengguna-fasilitas" class="block text-sm font-semibold leading-6 text-gray-900">Nomor Telepon Pengguna</label>
          <div class="relative mt-3">
            <input type="text" id="nomor-telepon-pengguna-fasilitas" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="nomor-telepon-pengguna-fasilitas" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">0812345678</label>
          </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="email-pengguna-fasilitas" class="block text-sm font-semibold leading-6 text-gray-900">Email Pengguna</label>
          <div class="relative mt-3">
            <input type="email" id="email-pengguna-fasilitas" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="email-pengguna-fasilitas" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">saya@gmail.com</label>
          </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="nama-fasilitas" class="block text-sm font-semibold leading-6 text-gray-900">Fasilitas yang digunakan</label>
            <div class="mt-2.5">
              <select id="nama-fasilitas" name="nama-fasilitas" autocomplete="nama-fasilitas" class="block w-full rounded-md border-0 py-1.5 text-gray-800 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:max-w-xs sm:text-sm sm:leading-6">
                <option value="" disabled selected>Pilih Fasilitas</option>
                <option value="kolam">Kolam</option>
                <option value="bale-pancaniti">Bale Pancaniti</option>
                <option value="bale-binangkit">Bale Binangkit</option>
              </select>
            </div>
          </div>
        </div>

        {{-- Fields baru untuk Masyarakat Umum --}}
        <div id="masyarakat-umum-fields" class="hidden">
          <div class="sm:col-span-2 mt-6">
            <label for="nama-masyarakat-umum" class="block text-sm font-semibold leading-6 text-gray-900">Nama</label>
            <div class="relative mt-3">
              <input type="text" id="nama-masyarakat-umum" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="nama-masyarakat-umum" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Nama</label>
            </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="nomor-telepon" class="block text-sm font-semibold leading-6 text-gray-900">Nomor Telepon</label>
          <div class="relative mt-3">
            <input type="text" id="nomor-telepon" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="nomor-telepon" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">0812345678</label>
          </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="email-masyarakat-umum" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
          <div class="relative mt-3">
            <input type="email" id="email-pengguna" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="email-masyarakat" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">saya@gmail.com</label>
          </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="alamat-masyarakat-umum" class="block text-sm font-semibold leading-6 text-gray-900">Alamat</label>
            <div class="relative mt-3">
              <input type="text" id="alamat-masyarakat-umum" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="alamat-masyarakat-umum" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Alamat</label>
            </div>
          </div>
          
        </div>

        {{-- Fields baru untuk Permintaan Informasi --}}
        <div id="permintaan-informasi-fields" class="hidden">
          <div class="sm:col-span-2 mt-6">
            <label for="nama-peminta-informasi" class="block text-sm font-semibold leading-6 text-gray-900">Nama</label>
            <div class="relative mt-3">
              <input type="text" id="nama-peminta-informasi" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="nama-peminta-informasi" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Nama</label>
            </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="nomor-telepon-peminta-informasi" class="block text-sm font-semibold leading-6 text-gray-900">Nomor Telepon</label>
          <div class="relative mt-3">
            <input type="text" id="nomor-telepon-peminta-informasi" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="nomor-telepon-peminta-informasi" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">0812345678</label>
          </div>
          </div>
        </div>

        <div class="sm:col-span-2 mt-6" id="isi-pengaduan-section">
          <label for="isi-pengaduan" class="block text-sm font-semibold leading-6 text-gray-900">Isi Pengaduan</label>
          <div class="mt-2.5">
            <textarea placeholder="Ketik Isi Laporan Anda" id="isi-pengaduan" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>

        <div class="col-span-full mt-4 hidden" id="upload-foto-section">
          <label for="upload-foto" class="block text-sm font-medium leading-6 text-gray-900">Foto Sebagai Bukti Pendukung</label>
          @livewire('file-upload')
        </div>

        <div id="anonim-section" class="sm:col-span-2 mt-6 flex gap-4 items-center hidden"> 
          <div class="flex items-center relative group">
            <input id="anonim" name="anonim" type="radio" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti">
            <label for="anonim" class="ml-2 block text-sm font-medium leading-6 text-gray-900">Anonim</label>
            <div class="absolute w-48 p-2 text-xs text-white bg-gray-900 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 bottom-full left-1/2 transform -translate-x-1/2 mb-1">
              Nama Anda tidak akan terpublikasi pada laporan
            </div>
          </div>
          <div class="flex items-center relative group">
            <input id="rahasia" name="anonim" type="radio" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti">
            <label for="rahasia" class="ml-2 block text-sm font-medium leading-6 text-gray-900">Rahasia</label>
            <div class="absolute w-48 p-2 text-xs text-white bg-gray-900 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 bottom-full left-1/2 transform -translate-x-1/2 mb-1">
              Nama Anda hanya akan diketahui oleh petugas terkait
            </div>
          </div>
        </div>

      </div>
      <div class="mt-10">
        <button wire:click="submit" type="submit" class="block w-full rounded-md bg-blue-bmti px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-[#60a5fa] transition ease-in-out duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">ADUKAN!</button>
      </div>
    </form>
  </div>
</div>

<script>
  function toggleElements() {
    const pengaduan = document.getElementById('pengaduan').checked;
    const permintaanInformasi = document.getElementById('permintaan-informasi').checked;
    const saran = document.getElementById('saran').checked;

    const uploadFotoSection = document.getElementById('upload-foto-section');
    const tanggalPengaduanSection = document.getElementById('tanggal-pengaduan-section');
    const jenisLayananSection = document.getElementById('jenis-layanan-section');
    const tipeSection = document.getElementById('tipe-section');
    const kategoriPengaduanSection = document.getElementById('kategori-pengaduan-section');
    const isiPengaduanSection = document.getElementById('isi-pengaduan-section');
    const permintaanInformasiFields = document.getElementById('permintaan-informasi-fields');
    const isiPengaduanLabel = document.querySelector('label[for="isi-pengaduan"]');
    const isiPengaduanTextarea = document.getElementById('isi-pengaduan');

    // Pengaduan Fields
    const pesertaDiklatFields = document.getElementById('peserta-diklat-fields');
    const pesertaPklFields = document.getElementById('peserta-pkl-fields');
    const penggunaFasilitasFields = document.getElementById('pengguna-fasilitas-fields');
    const masyarakatUmumFields = document.getElementById('masyarakat-umum-fields');
    const anonimSection = document.getElementById('anonim-section');

    // Hide all sections initially
    hideSection(tanggalPengaduanSection);
    hideSection(jenisLayananSection);
    hideSection(tipeSection);
    hideSection(kategoriPengaduanSection);
    hideSection(isiPengaduanSection);
    hideSection(uploadFotoSection);
    hideSection(permintaanInformasiFields);
    hideSection(pesertaDiklatFields);
    hideSection(pesertaPklFields);
    hideSection(penggunaFasilitasFields);
    hideSection(masyarakatUmumFields);
    hideSection(anonimSection);

    if (permintaanInformasi || saran) {
      showSection(permintaanInformasiFields);
      showSection(isiPengaduanSection);
      isiPengaduanLabel.textContent = permintaanInformasi ? 'Isi Permintaan Informasi' : 'Isi Saran';
      isiPengaduanTextarea.placeholder = permintaanInformasi ? 'Ketik Isi Permintaan Informasi Anda' : 'Ketik Isi Saran Anda';
    } else if (pengaduan) {
      showSection(tanggalPengaduanSection);
      showSection(jenisLayananSection);
      showSection(tipeSection);
      showSection(kategoriPengaduanSection);
      showSection(isiPengaduanSection);
      showSection(uploadFotoSection);
      isiPengaduanLabel.textContent = 'Isi Pengaduan';
      isiPengaduanTextarea.placeholder = 'Ketik Isi Pengaduan Anda';
    } else {
      showSection(isiPengaduanSection);
      isiPengaduanLabel.textContent = 'Isi Pengaduan';
      isiPengaduanTextarea.placeholder = 'Ketik Isi Pengaduan Anda';
    }
  }

  function updateTipeOptions() {
    const jenisLayanan = document.getElementById('jenis-layanan').value;
    const tipeDropdown = document.getElementById('tipe');
    const tipeSection = document.getElementById('tipe-section');

    hideSection(document.getElementById('peserta-diklat-fields'));
    hideSection(document.getElementById('peserta-pkl-fields'));
    hideSection(document.getElementById('pengguna-fasilitas-fields'));
    hideSection(document.getElementById('masyarakat-umum-fields'));
    hideSection(document.getElementById('anonim-section'));

    if (jenisLayanan === 'diklat') {
      tipeDropdown.innerHTML = `
        <option value="" disabled selected>Pilih Tipe</option>
        <option value="daring">Daring</option>
        <option value="luring">Luring</option>
        <option value="hybrid">Hybrid</option>
      `;
    } else if (jenisLayanan === 'non-diklat') {
      tipeDropdown.innerHTML = `
        <option value="" disabled selected>Pilih Tipe</option>
        <option value="pkl">PKL</option>
        <option value="pengguna-fasilitas">Pengguna Fasilitas</option>
        <option value="kunjungan">Masyarakat Umum</option>
      `;
    }
    showSection(tipeSection);
  }

  function toggleFieldsBasedOnTipe() {
    const tipe = document.getElementById('tipe').value;

    hideSection(document.getElementById('peserta-diklat-fields'));
    hideSection(document.getElementById('peserta-pkl-fields'));
    hideSection(document.getElementById('pengguna-fasilitas-fields'));
    hideSection(document.getElementById('masyarakat-umum-fields'));
    hideSection(document.getElementById('anonim-section'));

    if (tipe === 'daring' || tipe === 'luring' || tipe === 'hybrid') {
      showSection(document.getElementById('peserta-diklat-fields'));
    } else if (tipe === 'pkl') {
      showSection(document.getElementById('peserta-pkl-fields'));
    } else if (tipe === 'pengguna-fasilitas') {
      showSection(document.getElementById('pengguna-fasilitas-fields'));
    } else {
      showSection(document.getElementById('masyarakat-umum-fields'));
      showSection(document.getElementById('anonim-section'));
    }
  }

  function showSection(section) {
    section.classList.remove('hidden');
  }

  function hideSection(section) {
    section.classList.add('hidden');
  }

  function showSections(sections) {
    sections.forEach(section => showSection(section));
  }

  function hideSections(sections) {
    sections.forEach(section => hideSection(section));
  }

  document.addEventListener('DOMContentLoaded', function () {
    toggleElements();
    document.getElementById('jenis-layanan').addEventListener('change', updateTipeOptions);
    document.getElementById('tipe').addEventListener('change', toggleFieldsBasedOnTipe);
  });
</script>



