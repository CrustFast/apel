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
      @csrf
      <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
        <div class="sm:col-span-2">
          <label for="klasifikasi-laporan" class="block text-base font-bold leading-6 text-gray-900 text-center">Pilih Klasifikasi Laporan</label>
          <div class="mt-6 mb-8 space-y-6">
            <div class="flex justify-center">
              <div class="flex flex-col sm:flex-row items-start gap-x-3 gap-y-3">
                <div class="flex items-center">
                  <input id="pengaduan" wire:model="klasifikasi_laporan" name="klasifikasiLaporan" type="radio" value="pengaduan" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti" onclick="toggleElements()">
                  <label for="pengaduan" class="block text-sm font-medium leading-6 text-gray-900 ml-2 text-left">Pengaduan</label>
                </div>
                <div class="flex items-center">
                  <input id="permintaan-informasi" wire:model="klasifikasi_laporan" name="klasifikasiLaporan" type="radio" value="permintaan-informasi" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti" onclick="toggleElements()">
                  <label for="permintaan-informasi" class="block text-sm font-medium leading-6 text-gray-900 ml-2 text-left">Permintaan Informasi</label>
                </div>
                <div class="flex items-center">
                  <input id="saran" wire:model="klasifikasi_laporan" name="klasifikasiLaporan" type="radio" value="saran" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti" onclick="toggleElements()">
                  <label for="saran" class="block text-sm font-medium leading-6 text-gray-900 ml-2 text-left">Saran</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- tanggal pengaduan --}}
        <div id="tanggal-pengaduan-section" wire:ignore>
          <label for="tanggal_pengaduan" class="block text-sm font-semibold leading-6 text-gray-900">
            1. Tanggal Pengaduan<span class="text-red-600">*</span>
          </label>
          <div class="mt-3 relative max-w-sm" wire:ignore>
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 1 0 0-2Z" />
              </svg>
            </div>
            <input
              datepicker
              datepicker-autohide
              datepicker-buttons
              datepicker-autoselect-today
              type="text"
              wire:model.lazy="tanggal_pengaduan"
              @change-date.camel="@this.set('tanggal_pengaduan', $event.target.value)"
              id="tanggal_pengaduan"
              class="text-gray-900 text-sm rounded-lg border-1
                @if($errors->has('tanggal_pengaduan')) 
                  border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 
                @elseif(strlen($tanggal_pengaduan) > 0) 
                  border-green-600 dark:border-green-500 dark:focus:border-green-500 focus:border-green-600 
                @else 
                  border-gray-300 
                @endif
                focus:ring-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Select date"
            >
          </div>
          @if ($errors->has('tanggal_pengaduan'))
            <p class="mt-2 text-xs text-red-600 dark:text-red-400">
              <span class="font-medium">Perhatian!</span> {{ $errors->first('tanggal_pengaduan') }}
            </p>
          @endif
        </div>
        
        {{-- jenis layanan --}}
        <div id="jenis-layanan-section" wire:ignore>
          <label for="jenis-layanan" class="block text-sm font-semibold leading-6 text-gray-900">
              2. Jenis Layanan<span class="text-red-600">*</span>
          </label>
          <div class="relative mt-3">
              <select id="jenis-layanan" name="jenis-layanan" wire:model="jenis_layanan"
                  class="block w-full rounded-lg border border-gray-300 py-2.5 px-2.5 text-gray-900 bg-transparent shadow-sm ring-0 focus:outline-none focus:ring-0 focus:border-blue-600 sm:text-sm sm:leading-6">
                  <option value="">Pilih Jenis Layanan</option> 
                  <option value="diklat">Diklat</option>
                  <option value="non-diklat">Non Diklat</option>
              </select>        
          </div>
          @if ($errors->has('jenis_layanan'))
              <p class="mt-2 text-xs text-red-600 dark:text-red-400">
                  <span class="font-medium">Perhatian!</span> {{ $errors->first('jenis_layanan') }}
              </p>
          @endif
        </div>          
      
        {{-- tipe --}}
        <div id="tipe-section" wire:ignore>
          <label for="tipe" class="block text-sm font-semibold leading-6 text-gray-900">3. Tipe<span class="text-red-600">*</span></label>
          <div class="mt-3">
            <select wire:model="tipe" id="tipe" name="tipe" autocomplete="tipe-name" class="block w-full rounded-lg border border-gray-300 py-2.5 px-2.5 text-gray-900 bg-transparent shadow-sm ring-0 focus:outline-none focus:ring-0 focus:border-blue-600 sm:text-sm sm:leading-6" onchange="toggleFieldsBasedOnTipe()">
              <option value="">Pilih Tipe</option>
            </select>
          </div>
        </div>

        {{-- kategori --}}
        <div id="kategori-pengaduan-section" wire:ignore>
          <label for="kategori-pengaduan" class="block text-sm font-semibold leading-6 text-gray-900">
              4. Kategori Pengaduan <span class="text-red-600">*</span>
          </label>
          <div class="relative mt-3">
              <select id="kategori-pengaduan" name="kategori-pengaduan" wire:model="kategori_pengaduan_id"
                  class="block w-full rounded-lg border border-gray-300 py-2.5 px-2.5 text-gray-900 bg-transparent shadow-sm ring-0 focus:outline-none focus:ring-0 focus:border-blue-600 sm:text-sm sm:leading-6">
                  <option value="">Pilih Kategori</option>
                  @foreach ($kategoriPengaduanOptions as $kategori)
                      <option value="{{ $kategori->kategori_id }}">{{ $kategori->nama_kategori }}</option>
                  @endforeach
              </select>
          </div>
          @if ($errors->has('kategori_pengaduan_id'))
              <p class="mt-2 text-xs text-red-600 dark:text-red-400">
                  <span class="font-medium">Perhatian!</span> {{ $errors->first('kategori_pengaduan_id') }}
              </p>
          @endif
      </div>      
      
        {{-- Fields baru untuk Peserta Diklat --}}
        <div id="peserta-diklat-fields" wire:ignore>

          {{-- Periode diklat --}}
          <div class="sm:col-span-2 mt-6">
            <label for="periode-diklat" class="block text-sm font-semibold leading-6 text-gray-900">Periode Diklat</label>
            <div date-rangepicker class="flex items-center mt-2">
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 1 0 0-2Z" />
                        </svg>
                    </div>
                    <input
                      datepicker
                      datepicker-autohide
                      datepicker-buttons
                      datepicker-autoselect-today
                      type="text"
                      wire:model.lazy="periode_diklat_mulai"
                      @change-date.camel="@this.set('periode_diklat_mulai', $event.target.value)"
                      id="periode_diklat_mulai"
                      class="text-gray-900 text-sm rounded-lg border-1
                        @if($errors->has('periode_diklat_mulai')) 
                          border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 
                        @elseif(strlen($periode_diklat_mulai) > 0) 
                          border-green-600 dark:border-green-500 dark:focus:border-green-500 focus:border-green-600 
                        @else 
                          border-gray-300 
                        @endif
                        focus:ring-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Mulai"
                    >
                </div>
                <span class="mx-4 text-gray-500">to</span>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 1 0 0-2Z"/>
                        </svg>
                    </div>
                    <input
                      datepicker
                      datepicker-autohide
                      datepicker-buttons
                      datepicker-autoselect-today
                      type="text"
                      wire:model.lazy="periode_diklat_akhir"
                      @change-date.camel="@this.set('periode_diklat_akhir', $event.target.value)"
                      id="periode_diklat_akhir"
                      class="text-gray-900 text-sm rounded-lg border-1
                        @if($errors->has('periode_diklat_akhir')) 
                          border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 
                        @elseif(strlen($periode_diklat_akhir) > 0) 
                          border-green-600 dark:border-green-500 dark:focus:border-green-500 focus:border-green-600 
                        @else 
                          border-gray-300 
                        @endif
                        focus:ring-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Akhir"
                    >
                  </div>
              </div>
          </div>
          @if ($errors->has('periode_diklat_mulai') || $errors->has('periode_diklat_akhir'))
              <p class="mt-2 text-xs text-red-600 dark:text-red-400">
                  <span class="font-medium">Perhatian!</span> {{ $errors->first('periode_diklat_mulai') }} {{ $errors->first('periode_diklat_akhir') }}
              </p>
          @endif        

          {{-- Nama diklat --}}
          <div class="sm:col-span-2 mt-6">
            <label for="nama-diklat" class="block text-sm font-semibold leading-6 text-gray-900">Nama Diklat</label>
            <div class="relative mt-3">
                <input type="text" id="nama-diklat" wire:model="nama_diklat" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                <label for="nama-diklat" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Nama Diklat</label>
            </div>
          </div>        

          {{-- Nama peserta diklat --}}
          <div class="sm:col-span-2 mt-6">
            <label for="nama-peserta-diklat" class="block text-sm font-semibold leading-6 text-gray-900">Nama Peserta</label>
            <div class="relative mt-3">
              <input type="text" id="nama-peserta-diklat" wire:model="nama_peserta_diklat" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="nama-peserta-diklat" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Nama Peserta</label>
            </div>
          </div>

          {{-- Nomor telepon peserta diklat --}}
          <div class="sm:col-span-2 mt-6">
            <label for="nomor-telepon-peserta-diklat" class="block text-sm font-semibold leading-6 text-gray-900">Nomor Telepon Peserta Diklat</label>
            <div class="relative mt-3">
              <input type="text" id="nomor-telepon" wire:model="nomor_telepon_peserta_diklat" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="nomor-telepon" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">0812345678</label>
            </div>
          </div>

          {{-- Asal smk peserta diklat --}}
          <div class="sm:col-span-2 mt-6">
            <label for="asal-smk-peserta-diklat" class="block text-sm font-semibold leading-6 text-gray-900">Asal SMK</label>
            <div class="relative mt-3">
              <input type="text" id="asal-smk-peserta-diklat" wire:model="asal_smk_peserta_diklat" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="asal-smk-peserta-diklat" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Asal SMK</label>
            </div>
          </div>

          {{-- Program Keahlian --}}
          <div class="sm:col-span-2 mt-6">
            <label for="program-keahlian" class="block text-sm font-semibold leading-6 text-gray-900">Program Keahlian</label>
            <div class="mt-2.5">
                <select id="program-keahlian" wire:model="program_keahlian" name="program-keahlian" autocomplete="program-keahlian-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:max-w-xs sm:text-sm sm:leading-6">
                    <option value="" selected>Pilih Program Keahlian</option>
                    @foreach ($programKeahlianOptions as $option)
                        <option value="{{ $option->id }}">{{ $option->nama_program_keahlian }}</option>
                    @endforeach
                </select>
              </div>
            </div>        
          </div>

        {{-- Fields baru untuk Peserta PKL --}}
        <div id="peserta-pkl-fields" wire:ignore>

          {{-- Periode Magang --}}
          <div class="sm:col-span-2 mt-6">
            <label for="periode-magang" class="block text-sm font-semibold leading-6 text-gray-900">Periode Magang</label>
            <div date-rangepicker class="flex items-center mt-2">
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 1 0 0-2Z" />
                        </svg>
                    </div>
                    <input
                      datepicker
                      datepicker-autohide
                      datepicker-buttons
                      datepicker-autoselect-today
                      type="text"
                      wire:model.lazy="periode_magang_mulai"
                      @change-date.camel="@this.set('periode_magang_mulai', $event.target.value)"
                      id="periode_magang_mulai"
                      class="text-gray-900 text-sm rounded-lg border-1
                        @if($errors->has('periode_magang_mulai')) 
                          border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 
                        @elseif(strlen($periode_magang_mulai) > 0) 
                          border-green-600 dark:border-green-500 dark:focus:border-green-500 focus:border-green-600 
                        @else 
                          border-gray-300 
                        @endif
                        focus:ring-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Mulai"
                    >
                </div>
                <span class="mx-4 text-gray-500">to</span>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 1 0 0-2Z"/>
                        </svg>
                    </div>
                    <input
                      datepicker
                      datepicker-autohide
                      datepicker-buttons
                      datepicker-autoselect-today
                      type="text"
                      wire:model.lazy="periode_magang_akhir"
                      @change-date.camel="@this.set('periode_magang_akhir', $event.target.value)"
                      id="periode_magang_akhir"
                      class="text-gray-900 text-sm rounded-lg border-1
                        @if($errors->has('periode_magang_akhir')) 
                          border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 
                        @elseif(strlen($periode_magang_akhir) > 0) 
                          border-green-600 dark:border-green-500 dark:focus:border-green-500 focus:border-green-600 
                        @else 
                          border-gray-300 
                        @endif
                        focus:ring-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Akhir"
                    >
                  </div>
              </div>
          </div>
          @if ($errors->has('periode_magang_mulai') || $errors->has('periode_magang_akhir'))
              <p class="mt-2 text-xs text-red-600 dark:text-red-400">
                  <span class="font-medium">Perhatian!</span> {{ $errors->first('periode_magang_mulai') }} {{ $errors->first('periode_magang_akhir') }}
              </p>
          @endif  

          {{-- Nama Peserta PKL --}}
          <div class="sm:col-span-2 mt-6">
            <label for="nama-peserta-pkl" class="block text-sm font-semibold leading-6 text-gray-900">Nama Peserta PKL</label>
            <div class="relative mt-3">
              <input type="text" id="nama-peserta-pkl" wire:model="nama_peserta_pkl" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="nama-peserta-pkl" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Nama Peserta PKL</label>
            </div>
          </div>

          {{-- Nomor Telepon Peserta PKL --}}
          <div class="sm:col-span-2 mt-6">
            <label for="nomor-telepon-peserta-pkl" class="block text-sm font-semibold leading-6 text-gray-900">Nomor Telepon Peserta PKL</label>
            <div class="relative mt-3">
              <input type="text" id="nomor-telepon" wire:model="nomor_telepon_peserta_pkl" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="nomor-telepon" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">0812345678</label>
            </div>
          </div>

          {{-- Asal smk peserta pkl --}}
          <div class="sm:col-span-2 mt-6">
            <label for="asal-smk-peserta-pkl" class="block text-sm font-semibold leading-6 text-gray-900">Asal SMK</label>
            <div class="relative mt-3">
              <input type="text" id="asal-smk-peserta-pkl" wire:model="asal_smk_peserta_pkl" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="asal-smk-peserta-pkl" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Asal SMK</label>
            </div>
          </div>

          {{-- Unit peserta pkl --}}
          <div class="sm:col-span-2 mt-6">
            <label for="unit" class="block text-sm font-semibold leading-6 text-gray-900">Unit</label>
            <div class="relative mt-3">
              <input type="text" id="unit" wire:model="unit" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="unit" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Tempat Kalian Magang</label>
            </div>
          </div>
        </div>

        {{-- Fields baru untuk Pengguna Fasilitas --}}
        <div id="pengguna-fasilitas-fields" wire:ignore>

          {{-- Tanggal Penggunaan Fasilitas --}}
          <div class="sm:col-span-2 mt-6">
            <label for="tanggal-penggunaan-fasilitas" class="block text-sm font-semibold leading-6 text-gray-900">Tanggal Penggunaan</label>
            <div date-rangepicker class="flex items-center mt-2">
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 1 0 0-2Z" />
                        </svg>
                    </div>
                    <input
                      datepicker
                      datepicker-autohide
                      datepicker-buttons
                      datepicker-autoselect-today
                      type="text"
                      wire:model.lazy="tanggal_penggunaan_mulai"
                      @change-date.camel="@this.set('tanggal_penggunaan_mulai', $event.target.value)"
                      id="tanggal_penggunaan_mulai"
                      class="text-gray-900 text-sm rounded-lg border-1
                        @if($errors->has('tanggal_penggunaan_mulai')) 
                          border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 
                        @elseif(strlen($tanggal_penggunaan_mulai) > 0) 
                          border-green-600 dark:border-green-500 dark:focus:border-green-500 focus:border-green-600 
                        @else 
                          border-gray-300 
                        @endif
                        focus:ring-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Mulai"
                    >
                </div>
                <span class="mx-4 text-gray-500">to</span>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 1 0 0-2Z"/>
                        </svg>
                    </div>
                    <input
                      datepicker
                      datepicker-autohide
                      datepicker-buttons
                      datepicker-autoselect-today
                      type="text"
                      wire:model.lazy="tanggal_penggunaan_akhir"
                      @change-date.camel="@this.set('tanggal_penggunaan_akhir', $event.target.value)"
                      id="tanggal_penggunaan_akhir"
                      class="text-gray-900 text-sm rounded-lg border-1
                        @if($errors->has('tanggal_penggunaan_akhir')) 
                          border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 
                        @elseif(strlen($tanggal_penggunaan_akhir) > 0) 
                          border-green-600 dark:border-green-500 dark:focus:border-green-500 focus:border-green-600 
                        @else 
                          border-gray-300 
                        @endif
                        focus:ring-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Akhir"
                    >
                  </div>
              </div>
          </div>
          @if ($errors->has('tanggal_penggunaan_mulai') || $errors->has('tanggal_penggunaan_akhir'))
              <p class="mt-2 text-xs text-red-600 dark:text-red-400">
                  <span class="font-medium">Perhatian!</span> {{ $errors->first('tanggal_penggunaan_mulai') }} {{ $errors->first('tanggal_penggunaan_akhir') }}
              </p>
          @endif  

          {{-- Nama pengguna fasilitas --}}
          <div class="sm:col-span-2 mt-6">
            <label for="nama-pengguna-fasilitas" class="block text-sm font-semibold leading-6 text-gray-900">Nama Pengguna Fasilitas</label>
            <div class="relative mt-3">
              <input type="text" id="nama-pengguna-fasilitas" wire:model="nama_pengguna_fasilitas" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="nama-pengguna-fasilitas" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Nama Anda</label>
            </div>
          </div>

          {{-- Nomor telepon pengguna fasilitas --}}
          <div class="sm:col-span-2 mt-6">
            <label for="nomor-telepon-pengguna-fasilitas" class="block text-sm font-semibold leading-6 text-gray-900">Nomor Telepon Pengguna</label>
            <div class="relative mt-3">
              <input type="text" id="nomor-telepon-pengguna-fasilitas" wire:model="nomor_telepon_pengguna_fasilitas" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="nomor-telepon-pengguna-fasilitas" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">0812345678</label>
            </div>
          </div>

          {{-- Email pengguna fasilitas --}}
          <div class="sm:col-span-2 mt-6">
            <label for="email-pengguna-fasilitas" class="block text-sm font-semibold leading-6 text-gray-900">Email Pengguna</label>
            <div class="relative mt-3">
              <input type="email" id="email-pengguna-fasilitas" wire:model="email_pengguna_fasilitas" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="email-pengguna-fasilitas" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">saya@gmail.com</label>
            </div>
          </div>

          {{-- Fasilitas yang digunakan --}}
          <div class="sm:col-span-2 mt-6">
            <label for="nama-fasilitas" class="block text-sm font-semibold leading-6 text-gray-900">Fasilitas yang digunakan</label>
            <div class="mt-2.5">
                <select id="nama-fasilitas" wire:model="nama_fasilitas" name="nama-fasilitas" autocomplete="nama-fasilitas" class="block w-full rounded-md border-0 py-1.5 text-gray-800 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:max-w-xs sm:text-sm sm:leading-6">
                    <option value="" selected>Pilih Fasilitas</option>
                    <option value="kolam">Kolam</option>
                    <option value="bale-pancaniti">Bale Pancaniti</option>
                    <option value="bale-binangkit">Bale Binangkit</option>
                </select>
            </div>
          </div>        
        </div>

        {{-- Fields baru untuk Masyarakat Umum --}}
        <div id="masyarakat-umum-fields" wire:ignore>

          {{-- Nama masyarakat --}}
          <div class="sm:col-span-2 mt-6">
            <label for="nama-masyarakat-umum" class="block text-sm font-semibold leading-6 text-gray-900">Nama</label>
            <div class="relative mt-3">
              <input type="text" id="nama-masyarakat-umum" wire:model="nama_masyarakat_umum"
                    value="{{ $privasi === 'anonim' ? 'Anonim' : '' }}"
                    class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " {{ $privasi === 'anonim' ? 'readonly' : '' }} />
              <label for="nama-masyarakat-umum" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                {{ $privasi === 'anonim' ? 'Anonim' : 'Masukkan Nama' }}
              </label>
            </div>
          </div>
          

          {{-- Nomor Telepon --}}
          <div class="sm:col-span-2 mt-6">
            <label for="nomor-telepon" class="block text-sm font-semibold leading-6 text-gray-900">Nomor Telepon</label>
            <div class="relative mt-3">
              <input type="text" id="nomor-telepon" wire:model="nomor_telepon_masyarakat_umum" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="nomor-telepon" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">0812345678</label>
            </div>
          </div>

          {{-- Email Masyarakat --}}
          <div class="sm:col-span-2 mt-6">
            <label for="email-masyarakat-umum" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
            <div class="relative mt-3">
              <input type="email" id="email-pengguna" wire:model="email_masyarakat_umum" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="email-masyarakat" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">saya@gmail.com</label>
            </div>
          </div>

          {{-- Alamat Masyarakat --}}
          <div class="sm:col-span-2 mt-6">
            <label for="alamat-masyarakat-umum" class="block text-sm font-semibold leading-6 text-gray-900">Alamat</label>
            <div class="mt-2.5">
              <textarea wire:model="alamat_masyarakat_umum" placeholder="Ketik Isi Alamat Anda" id="alamat-masyarakat-umum" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:text-sm sm:leading-6"></textarea>
          </div>
          </div>
        </div>

        {{-- Fields baru untuk Permintaan Informasi --}}
        <div id="permintaan-informasi-fields" wire:ignore>

          {{-- Nama Peminta Informasi --}}
          <div class="sm:col-span-2">
            <label for="nama-peminta-informasi" class="block text-sm font-semibold leading-6 text-gray-900">Nama</label>
            <div class="relative mt-3">
              <input wire:model="nama_peminta_informasi" type="text" id="nama-peminta-informasi" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="nama-peminta-informasi" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Nama</label>
            </div>
          </div>

          {{-- Nomor Telepon --}}
          <div class="sm:col-span-2 mt-6">
            <label for="nomor-telepon-peminta-informasi" class="block text-sm font-semibold leading-6 text-gray-900">Nomor Telepon</label>
            <div class="relative mt-3">
              <input wire:model="nomor_telepon_peminta_informasi" type="text" id="nomor-telepon-peminta-informasi" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="nomor-telepon-peminta-informasi" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">0812345678</label>
            </div>
          </div>
        </div>

        {{-- Fields baru untuk Permintaan Saran --}}
        <div id="saran-fields"  wire:ignore>

          <div class="sm:col-span-2">
            <label for="nama-peminta-saran" class="block text-sm font-semibold leading-6 text-gray-900">
                Nama
            </label>
            <div class="relative mt-3">
                <input type="text" id="nama-peminta-saran" 
                    wire:model.lazy="nama_aduan_informasi" 
                    class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 
                    appearance-none dark:text-white focus:outline-none focus:ring-0 peer 
                    @if($errors->has('nama_aduan_informasi')) 
                        border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 bg-transparent
                    @elseif(strlen($nama_aduan_informasi) > 0) 
                        border-green-600 dark:border-green-500 dark:focus:border-green-500 focus:border-green-600 bg-white
                    @else 
                        border-gray-300 bg-transparent 
                    @endif" 
                    placeholder=""/>
                <label for="nama-peminta-saran" 
                    class="absolute text-sm 
                    @if(strlen($nama_aduan_informasi) > 0) 
                        text-green-600 dark:text-green-500 
                    @else 
                        text-gray-500 dark:text-gray-400 
                    @endif duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] 
                    bg-white dark:bg-gray-900 px-2 
                    peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
                    peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 
                    peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 
                    rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                    Masukkan Nama
                </label>
            </div>
        
            @if ($errors->has('nama_aduan_informasi'))
                <p class="mt-2 text-xs text-red-600 dark:text-red-400">
                    <span class="font-medium">Perhatian!</span> {{ $errors->first('nama_aduan_informasi') }}
                </p>
            @endif
          </div>
        
          {{-- Nomor Telepon --}}
          <div class="sm:col-span-2 mt-6">
            <label for="nomor-telepon-peminta-saran" class="block text-sm font-semibold leading-6 text-gray-900">Nomor Telepon</label>
            <div class="relative mt-3">
              <input type="text" id="nomor-telepon-peminta-saran" wire:model="nomor_telepon_aduan_saran" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="nomor-telepon-peminta-saran" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">0812345678</label>
            </div>
          </div>
        </div>        

        {{-- Isi Pengaduan --}}
        <div class="sm:col-span-2 mt-6" id="isi-pengaduan-section" wire:ignore>
          <label for="isi-pengaduan" class="block text-sm font-semibold leading-6 text-gray-900">5. Isi Pengaduan<span class="text-red-600">*</span></label>
          <div class="mt-2.5">
            <textarea placeholder="Ketik Isi Laporan Anda" id="isi-pengaduan" wire:model="isi_laporan_pengaduan" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>

        <!-- Permintaan Informasi -->
        <div class="sm:col-span-2 mt-6" id="isi-permintaan-informasi-section" wire:ignore>
          <label for="isi-permintaan-informasi" class="block text-sm font-semibold leading-6 text-gray-900">Isi Permintaan Informasi</label>
          <div class="mt-2.5">
              <textarea wire:model="isi_laporan_permintaan_informasi" placeholder="Ketik Isi Permintaan Informasi Anda" id="isi-permintaan-informasi" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>      

        <!-- Saran -->
        <div class="sm:col-span-2 mt-6" id="isi-saran-section" wire:ignore>
          <label for="isi-saran" class="block text-sm font-semibold leading-6 text-gray-900">Isi Saran</label>
          <div class="mt-2.5">
              <textarea wire:model="isi_laporan_saran" placeholder="Ketik Isi Saran Anda" id="isi-saran" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>

        <div class="col-span-full mt-4" id="upload-foto-section" wire:ignore>
          <label for="upload-foto" class="block text-sm font-medium leading-6 text-gray-900">Foto Sebagai Bukti Pendukung</label>
          @livewire('file-upload')
          {{-- <span class="sr-only">Choose profile photo</span>
              <input type="file" class="block w-full text-sm text-gray-500
                file:me-4 file:py-2 file:px-4
                file:rounded-lg file:border-0
                file:text-sm file:font-semibold
                file:bg-blue-600 file:text-white
                hover:file:bg-blue-700
                file:disabled:opacity-50 file:disabled:pointer-events-none
                dark:text-neutral-500
                dark:file:bg-blue-500
                dark:hover:file:bg-blue-400
              "> --}}
        </div>

        <div id="anonim-section" class="sm:col-span-2 mt-6 flex gap-4 items-center hidden" wire:ignore> 
          <div class="flex items-center relative group">
            <input id="anonim" name="anonim" type="radio" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti" wire:model.defer="privasi" value="anonim">
            <label for="anonim" class="ml-2 block text-sm font-medium leading-6 text-gray-900">Anonim</label>
            <div class="absolute w-48 p-2 text-xs text-white bg-gray-900 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 bottom-full left-1/2 transform -translate-x-1/2 mb-1">
              Nama Anda tidak akan terpublikasi pada laporan
            </div>
          </div>
          <div class="flex items-center relative group">
            <input id="rahasia" name="anonim" type="radio" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti" wire:model.defer="privasi" value="rahasia">
            <label for="rahasia" class="ml-2 block text-sm font-medium leading-6 text-gray-900">Rahasia</label>
            <div class="absolute w-48 p-2 text-xs text-white bg-gray-900 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 bottom-full left-1/2 transform -translate-x-1/2 mb-1">
              Nama Anda hanya akan diketahui oleh petugas terkait
            </div>
          </div>          
        </div>

      </div>
      <div class="mt-10">
        <button wire:click.prevent="submit" type="submit" class="block w-full rounded-md bg-blue-bmti px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-[#60a5fa] transition ease-in-out duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" 
          wire:loading.attr="disabled">
            <span wire:loading.remove>ADUKAN!</span>
            <span wire:loading>
                <div class="animate-spin inline-block size-6 border-[3px] border-current border-t-transparent text-white rounded-full dark:text-blue-500" role="status" aria-label="loading">
                    <span class="sr-only">Loading...</span>
                </div>
            </span>
        </button>
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
    const saranFields = document.getElementById('saran-fields'); 
    const isiPengaduanLabel = document.querySelector('label[for="isi-pengaduan"]');
    const isiPengaduanTextarea = document.getElementById('isi-pengaduan');
    
    // New Textareas
    const isiPermintaanInformasiSection = document.getElementById('isi-permintaan-informasi-section');
    const isiSaranSection = document.getElementById('isi-saran-section');

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
    hideSection(saranFields); 
    hideSection(pesertaDiklatFields);
    hideSection(pesertaPklFields);
    hideSection(penggunaFasilitasFields);
    hideSection(masyarakatUmumFields);
    hideSection(anonimSection);

    // Hide custom textareas
    hideSection(isiPermintaanInformasiSection);
    hideSection(isiSaranSection);

    if (permintaanInformasi) {
        showSection(permintaanInformasiFields);
        showSection(isiPermintaanInformasiSection);
        hideSection(isiPengaduanSection);
        hideSection(isiSaranSection);
    } else if (saran) {
        showSection(saranFields);
        showSection(isiSaranSection);
        hideSection(isiPengaduanSection);
        hideSection(isiPermintaanInformasiSection);
    } else if (pengaduan) {
        showSection(tanggalPengaduanSection);
        showSection(jenisLayananSection);
        showSection(tipeSection);
        showSection(kategoriPengaduanSection);
        showSection(isiPengaduanSection);
        showSection(uploadFotoSection);
        hideSection(isiPermintaanInformasiSection);
        hideSection(isiSaranSection);
    } else {
        showSection(isiPengaduanSection);
        hideSection(isiPermintaanInformasiSection);
        hideSection(isiSaranSection);
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

    // Sections to toggle
    const pesertaDiklatFields = document.getElementById('peserta-diklat-fields');
    const pesertaPklFields = document.getElementById('peserta-pkl-fields');
    const penggunaFasilitasFields = document.getElementById('pengguna-fasilitas-fields');
    const masyarakatUmumFields = document.getElementById('masyarakat-umum-fields');
    const anonimSection = document.getElementById('anonim-section');

    // Hide all sections initially
    hideSection(pesertaDiklatFields);
    hideSection(pesertaPklFields);
    hideSection(penggunaFasilitasFields);
    hideSection(masyarakatUmumFields);
    hideSection(anonimSection);

    // Show specific sections based on selected "tipe"
    if (tipe === 'daring' || tipe === 'luring' || tipe === 'hybrid') {
      showSection(pesertaDiklatFields);
    } else if (tipe === 'pkl') {
      showSection(pesertaPklFields);
    } else if (tipe === 'pengguna-fasilitas') {
      showSection(penggunaFasilitasFields);
    } else if (tipe === 'kunjungan') {
      showSection(masyarakatUmumFields);
      showSection(anonimSection);
    }
  }

  function showSection(section) {
    if (section) section.classList.remove('hidden');
  }

  function hideSection(section) {
    if (section) section.classList.add('hidden');
  }

  document.addEventListener('DOMContentLoaded', function () {
    toggleElements();
    document.getElementById('jenis-layanan').addEventListener('change', updateTipeOptions);
    document.getElementById('tipe').addEventListener('change', toggleFieldsBasedOnTipe);
  });

  // Livewire hook to re-run the toggleElements function after the DOM is updated
  document.addEventListener('livewire:load', function () {
    Livewire.hook('message.processed', (message, component) => {
      toggleElements(); 
    });
  });
</script>