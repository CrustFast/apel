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
                  <input id="pengaduan" name="push-notifications" type="radio" value="pengaduan" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti" onclick="toggleElements()">
                  <label for="pengaduan" class="block text-sm font-medium leading-6 text-gray-900 ml-2 text-left">Pengaduan</label>
                </div>
                <div class="flex items-center">
                  <input id="permintaan-informasi" name="push-notifications" type="radio" value="permintaan-informasi" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti" onclick="toggleElements()">
                  <label for="permintaan-informasi" class="block text-sm font-medium leading-6 text-gray-900 ml-2 text-left">Permintaan Informasi</label>
                </div>
                <div class="flex items-center">
                  <input id="saran" name="push-notifications" type="radio" value="saran" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti" onclick="toggleElements()">
                  <label for="saran" class="block text-sm font-medium leading-6 text-gray-900 ml-2 text-left">Saran</label>
                </div>
                <div class="flex items-center">
                  <input id="kerusakan" name="push-notifications" type="radio" value="kerusakan" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti" onclick="toggleElements()">
                  <label for="kerusakan" class="block text-sm font-medium leading-6 text-gray-900 ml-2 text-left">Kerusakan</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="tanggal-pengaduan-section" class="hidden">
          <label for="tanggal-pengaduan" class="block text-sm font-semibold leading-6 text-gray-900">Tanggal Pengaduan</label>
          <div class="mt-2.5 relative max-w-sm">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 1 0 0-2Z" />
              </svg>
            </div>
            <input datepicker datepicker-buttons datepicker-autoselect-today type="text" class="text-gray-900 text-sm rounded-lg shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
          </div>
        </div>
        <div id="jenis-layanan-section" class="hidden">
          <label for="jenis-layanan" class="block text-sm font-semibold leading-6 text-gray-900">Pilih Jenis Layanan</label>
          <div class="mt-2.5">
            <select id="jenis-layanan" name="jenis-layanan" autocomplete="jenis-layanan" class="block w-full rounded-md border-0 py-1.5 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:max-w-xs sm:text-sm sm:leading-6">
              <option value="" disabled selected>Pilih Jenis Layanan</option>
              <option value="diklat">Diklat</option>
              <option value="non-diklat">Non Diklat</option>
            </select>
          </div>
        </div>
        <div id="tipe-section" class="hidden">
          <label for="tipe" class="block text-sm font-semibold leading-6 text-gray-900">Tipe</label>
          <div class="mt-2.5">
            <select id="tipe" name="tipe" autocomplete="tipe-name" class="block w-full rounded-md border-0 py-1.5 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:max-w-xs sm:text-sm sm:leading-6">
              <option value="" disabled selected>Pilih Tipe</option>
              <option value="daring">Daring</option>
              <option value="luring">Luring</option>
              <option value="hybrid">Hybrid</option>
            </select>
          </div>
        </div>
        <div id="kategori-pengaduan-section" class="hidden">
          <label for="kategori-pengaduan" class="block text-sm font-semibold leading-6 text-gray-900">Kategori Pengaduan</label>
          <div class="mt-2.5">
            <select id="kategori-pengaduan" name="kategori-pengaduan" autocomplete="kategori-name" class="block w-full rounded-md border-0 py-1.5 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:max-w-xs sm:text-sm sm:leading-6">
              <option value="" disabled selected>Pilih Kategori</option>
              <option value="kesesuaian-persyaratan">Kesesuaian persyaratan pelayanan</option>
              <option value="kemudahan-prosedur">Kemudahan prosedur</option>
              <option value="kecepatan-pelayanan">Kecepatan pelayanan</option>
              <option value="biaya-tarif">Biaya/tarif pelayanan</option>
              <option value="kesesuaian-produk">Kesesuaian produk</option>
              <option value="perilaku-petugas">Perilaku petugas</option>
              <option value="kompetensi-petugas">Kompetensi/kemampuan petugas</option>
              <option value="penanganan-pengaduan">Penanganan pengaduan</option>
              <option value="kualitas-sarana">Kualitas sarana dan prasarana</option>
            </select>
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="identitas" class="block text-sm font-semibold leading-6 text-gray-900 text-center mt-6 w-full">Identitas</label>
          <div class="mt-3 space-y-6">
            <div class="flex justify-start">
              <div class="flex flex-col md:flex-row items-start gap-3">
                <div class="flex items-center gap-x-2">
                  <input id="identitas-lengkap" name="identitas-select" type="radio" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti" onclick="toggleLengkapFields()">
                  <label for="identitas-lengkap" class="block text-sm font-medium leading-6 text-gray-900">Lengkap</label>
                </div>
                <div class="flex items-center gap-x-2">
                  <input id="peserta-diklat" name="identitas-select" type="radio" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti" onclick="togglePesertaDiklatFields()">
                  <label for="peserta-diklat" class="block text-sm font-medium leading-6 text-gray-900">Peserta Diklat</label>
                </div>
                <div class="flex items-center gap-x-2">
                  <input id="peserta-pkl" name="identitas-select" type="radio" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti" onclick="togglePesertaPklFields()">
                  <label for="peserta-pkl" class="block text-sm font-medium leading-6 text-gray-900">Peserta PKL</label>
                </div>
                <div class="flex items-center gap-x-2">
                  <input id="pengguna-fasilitas" name="identitas-select" type="radio" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti" onclick="togglePenggunaFasilitasFields()">
                  <label for="pengguna-fasilitas" class="block text-sm font-medium leading-6 text-gray-900">Pengguna Fasilitas</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- Fields baru untuk identitas lengkap --}}
        <div id="identitas-lengkap-fields" class="hidden">
          <div class="sm:col-span-2 mt-6">
            <label for="nama-lengkap" class="block text-sm font-semibold leading-6 text-gray-900">Nama Lengkap</label>
            <div class="relative mt-3">
              <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Nama Lengkap</label>
            </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="nomor-telepon" class="block text-sm font-semibold leading-6 text-gray-900">Nomor Telepon</label>
            <div class="relative mt-3">
              <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Nomor Telepon</label>
            </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
            <div class="relative mt-3">
              <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">example@gmail.com</label>
            </div>
          </div>
        </div>

        {{-- Fields baru untuk Peserta Diklat --}}
        <div id="peserta-diklat-fields" class="hidden">
          <div class="sm:col-span-2 mt-6">
            <label for="periode-diklat" class="block text-sm font-semibold leading-6 text-gray-900">Pilih Periode Diklat</label>
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
            <label for="nama-peserta-diklat" class="block text-sm font-semibold leading-6 text-gray-900">Nama Peserta</label>
            <div class="relative mt-3">
              <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Nama Peserta</label>
            </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="kategori-pengaduan" class="block text-sm font-semibold leading-6 text-gray-900">Program Keahlian</label>
            <div class="mt-2.5">
              <select id="kategori-pengaduan" name="kategori-pengaduan" autocomplete="kategori-name" class="block w-full rounded-md border-0 py-1.5 text-gray-500 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:max-w-xs sm:text-sm sm:leading-6">
                <option value="" disabled selected>Pilih Program Keahlian</option>
                <option value="kesesuaian-persyaratan">Kesesuaian persyaratan pelayanan</option>
                <option value="kemudahan-prosedur">Kemudahan prosedur</option>
                <option value="kecepatan-pelayanan">Kecepatan pelayanan</option>
                <option value="biaya-tarif">Biaya/tarif pelayanan</option>
                <option value="kesesuaian-produk">Kesesuaian produk</option>
                <option value="perilaku-petugas">Perilaku petugas</option>
                <option value="kompetensi-petugas">Kompetensi/kemampuan petugas</option>
                <option value="penanganan-pengaduan">Penanganan pengaduan</option>
                <option value="kualitas-sarana">Kualitas sarana dan prasarana</option>
              </select>
            </div>
          </div>
        </div>

        {{-- Fields baru untuk Peserta PKL --}}
        <div id="peserta-pkl-fields" class="hidden">
          <div class="sm:col-span-2 mt-6">
            <label for="nama-peserta-pkl" class="block text-sm font-semibold leading-6 text-gray-900">Nama Peserta PKL</label>
            <div class="relative mt-3">
              <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Nama Peserta PKL</label>
            </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="asal-smk" class="block text-sm font-semibold leading-6 text-gray-900">Asal SMK</label>
            <div class="relative mt-3">
              <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Asal SMK</label>
            </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="unit" class="block text-sm font-semibold leading-6 text-gray-900">Unit</label>
            <div class="relative mt-3">
              <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Unit</label>
            </div>
          </div>
        </div>

        {{-- Fields baru untuk Pengguna Fasilitas --}}
        <div id="pengguna-fasilitas-fields" class="hidden">
          <div class="sm:col-span-2 mt-6">
            <label for="fasilitas-digunakan" class="block text-sm font-semibold leading-6 text-gray-900">Fasilitas yang Digunakan</label>
            <div class="relative mt-3">
              <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Fasilitas yang Digunakan</label>
            </div>
          </div>
          <div class="sm:col-span-2 mt-6">
            <label for="tanggal-penggunaan" class="block text-sm font-semibold leading-6 text-gray-900">Tanggal Penggunaan</label>
            <div class="relative mt-3 max-w-sm">
              <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 1 0 0-2Z" />
                </svg>
              </div>
              <input datepicker datepicker-buttons datepicker-autoselect-today type="text" class="text-gray-900 text-sm rounded-lg shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
            </div>
          </div>
        </div>

        <div class="sm:col-span-2 mt-6" id="isi-pengaduan-section">
          <label for="isi-pengaduan" class="block text-sm font-semibold leading-6 text-gray-900">Isi Pengaduan</label>
          <div class="mt-2.5">
            <textarea placeholder="Ketik Isi Laporan Anda" id="isi-pengaduan" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>

        <div class="col-span-full mt-4" id="upload-foto-section" class="hidden">
          <label for="upload-foto" class="block text-sm font-medium leading-6 text-gray-900">Foto</label>
          <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
            <div class="text-center">
              <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
              </svg>
              <div class="mt-4 flex text-sm leading-6 text-gray-600">
                <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-blue-bmti focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-bmti focus-within:ring-offset-2 hover:text-[#9ca3af]">
                  <span>Upload a file</span>
                  <input id="file-upload" name="file-upload" type="file" class="sr-only" accept="image/*" onchange="previewImage(event)">
                </label>
                <p class="pl-1">or drag and drop</p>
              </div>
              <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
              <div class="mt-4">
                <img id="image-preview" class="hidden w-32 h-32 object-cover rounded-md" />
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="mt-10">
        <button type="submit" class="block w-full rounded-md bg-blue-bmti px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-[#60a5fa] transition ease-in-out duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">ADUKAN!</button>
      </div>
    </form>
  </div>
</div>

<script>
  function previewImage(event) {
    const [file] = event.target.files;
    if (file) {
      const preview = document.getElementById('image-preview');
      preview.src = URL.createObjectURL(file);
      preview.classList.remove('hidden');
    }
  }

  function toggleElements() {
    const pengaduan = document.getElementById('pengaduan').checked;
    const permintaanInformasi = document.getElementById('permintaan-informasi').checked;
    const saran = document.getElementById('saran').checked;
    const kerusakan = document.getElementById('kerusakan').checked;

    const uploadFotoSection = document.getElementById('upload-foto-section');
    const tanggalPengaduanSection = document.getElementById('tanggal-pengaduan-section');
    const jenisLayananSection = document.getElementById('jenis-layanan-section');
    const tipeSection = document.getElementById('tipe-section');
    const kategoriPengaduanSection = document.getElementById('kategori-pengaduan-section');
    const isiPengaduanSection = document.getElementById('isi-pengaduan-section');

    const sections = [uploadFotoSection, tanggalPengaduanSection, jenisLayananSection, tipeSection, kategoriPengaduanSection];

    if (kerusakan) {
      showSections(sections);
    } else if (permintaanInformasi) {
      hideSections(sections);
      showSection(isiPengaduanSection);
    } else {
      hideSections([uploadFotoSection]);
      showSections([tanggalPengaduanSection, jenisLayananSection, tipeSection, kategoriPengaduanSection]);
    }
  }

  function toggleLengkapFields() {
    const identitasLengkapFields = document.getElementById('identitas-lengkap-fields');
    const pesertaDiklatFields = document.getElementById('peserta-diklat-fields');
    const pesertaPklFields = document.getElementById('peserta-pkl-fields');
    const penggunaFasilitasFields = document.getElementById('pengguna-fasilitas-fields');

    showSection(identitasLengkapFields);
    hideSections([pesertaDiklatFields, pesertaPklFields, penggunaFasilitasFields]);
  }

  function togglePesertaDiklatFields() {
    const identitasLengkapFields = document.getElementById('identitas-lengkap-fields');
    const pesertaDiklatFields = document.getElementById('peserta-diklat-fields');
    const pesertaPklFields = document.getElementById('peserta-pkl-fields');
    const penggunaFasilitasFields = document.getElementById('pengguna-fasilitas-fields');

    hideSections([identitasLengkapFields, pesertaPklFields, penggunaFasilitasFields]);
    showSection(pesertaDiklatFields);
  }

  function togglePesertaPklFields() {
    const identitasLengkapFields = document.getElementById('identitas-lengkap-fields');
    const pesertaDiklatFields = document.getElementById('peserta-diklat-fields');
    const pesertaPklFields = document.getElementById('peserta-pkl-fields');
    const penggunaFasilitasFields = document.getElementById('pengguna-fasilitas-fields');

    hideSections([identitasLengkapFields, pesertaDiklatFields, penggunaFasilitasFields]);
    showSection(pesertaPklFields);
  }

  function togglePenggunaFasilitasFields() {
    const identitasLengkapFields = document.getElementById('identitas-lengkap-fields');
    const pesertaDiklatFields = document.getElementById('peserta-diklat-fields');
    const pesertaPklFields = document.getElementById('peserta-pkl-fields');
    const penggunaFasilitasFields = document.getElementById('pengguna-fasilitas-fields');

    hideSections([identitasLengkapFields, pesertaDiklatFields, pesertaPklFields]);
    showSection(penggunaFasilitasFields);
  }

  function updateTipeOptions() {
    const jenisLayanan = document.getElementById('jenis-layanan').value;
    const tipeDropdown = document.getElementById('tipe');

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
        <option value="kunjungan">Kunjungan</option>
        <option value="prioritas">Prioritas</option>
      `;
    }
  }

  function showSection(section) {
    section.classList.remove('hidden', 'fade-out');
    section.classList.add('fade-in');
  }

  function hideSection(section) {
    section.classList.add('fade-out');
    section.classList.remove('fade-in');
    setTimeout(() => section.classList.add('hidden'), 500);
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
  });
</script>
