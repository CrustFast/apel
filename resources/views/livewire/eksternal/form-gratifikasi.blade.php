<div id="form">
  <div class="isolate bg-white pb-6 sm:py-32 lg:px-10">
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
          <label for="klasifikasi-laporan" class="block text-base font-bold leading-6 text-gray-900 text-center">Form Input Laporan Gratifikasi</label>
        </div>

        <div class="sm:col-span-2">
          <label for="identitas" class="block text-sm font-semibold leading-6 text-gray-900 text-center mt-6 w-full">Jenis Laporan<span class="text-red-600">*</span></label>
          <div class="mt-3 space-y-6">
            <div class="flex justify-center">
              <div class="flex flex-col md:flex-row items-center gap-6">
                <div class="flex items-center gap-x-2">
                  <input id="penerimaan" name="identitas-select" type="radio" wire:model="jenis_laporan" value="penerimaan" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti">
                  <label for="penerimaan" class="block text-sm font-medium leading-6 text-gray-900">Penerimaan</label>
                </div>
                <div class="flex items-center gap-x-2">
                  <input id="penolakan" name="identitas-select" type="radio" wire:model="jenis_laporan" value="penolakan" class="h-4 w-4 border-gray-300 text-blue-bmti focus:ring-blue-bmti">
                  <label for="penolakan" class="block text-sm font-medium leading-6 text-gray-900">Penolakan</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="sm:col-span-2 mt-2">
          <label for="informasi-pelapor" class="block text-base font-bold leading-6 text-gray-900">1. Informasi Pelapor<span class="text-red-600">*</span></label>
        </div>

        <div id="nama-pelapor">
          <label for="nama-pelapor" class="block text-sm font-semibold leading-6 text-gray-900">
            Nama Pelapor<span class="text-red-600">*</span>
          </label>
          <div class="relative mt-3">
            <input type="text" wire:model.lazy="nama_pelapor" id="floating_outlined" 
              class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-white rounded-lg border-1 
              appearance-none dark:text-white focus:outline-none focus:ring-0 peer 
              @if($errors->has('nama_pelapor')) 
                border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 bg-transparent
              @elseif(strlen($nama_pelapor) > 0) 
                border-green-600 dark:border-green-500 dark:focus:border-green-500 focus:border-green-600 bg-white
              @else 
                border-gray-300 bg-transparent 
              @endif" 
              placeholder=" " />
            <label for="floating_outlined" 
              class="absolute text-sm 
              @if(strlen($nama_pelapor) > 0) 
                text-green-600 dark:text-green-500 
              @else 
                text-gray-500 dark:text-gray-400 
              @endif duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] 
              bg-white dark:bg-gray-900 px-2 
              peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
              peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 
              peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 
              rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
              Masukkan Nama Anda
            </label>
          </div>
          @if ($errors->has('nama_pelapor'))
            <p class="mt-2 text-xs text-red-600 dark:text-red-400">
              <span class="font-medium">Perhatian!</span> {{ $errors->first('nama_pelapor') }}
            </p>
          @endif
        </div>               
        
        <div id="jabatan">
          <label for="jabatan" class="block text-sm font-semibold leading-6 text-gray-900">
            Jabatan<span class="text-red-600">*</span>
          </label>
          <div class="relative mt-3">
            <input type="text" wire:model.lazy="jabatan" id="floating_outlined_jabatan" 
              class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 
              appearance-none dark:text-white focus:outline-none focus:ring-0 peer 
              @if($errors->has('jabatan')) 
                border-red-600 focus:border-red-600 bg-transparent
              @elseif(strlen($jabatan) > 0) 
                border-green-600 focus:border-green-600 bg-white
              @else 
                border-gray-300 bg-transparent 
              @endif" 
              placeholder=" " />
            <label for="floating_outlined_jabatan" 
              class="absolute text-sm 
              @if(strlen($jabatan) > 0) 
                text-green-600 
              @else 
                text-gray-500
              @endif duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] 
              bg-white dark:bg-gray-900 px-2 
              peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
              peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 
              peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 
              rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
              Jabatan
            </label>
          </div>
          @if ($errors->has('jabatan'))
            <p class="mt-2 text-xs text-red-600 dark:text-red-400">
              <span class="font-medium">Perhatian!</span> {{ $errors->first('jabatan') }}
            </p>
          @endif
        </div>
      
        <div id="nomor-telepon">
          <label for="nomor-telepon" class="block text-sm font-semibold leading-6 text-gray-900">
            Nomor WhatsApp Aktif Pelapor<span class="text-red-600">*</span>
          </label>
          <div class="relative mt-3">
            <input type="tel" wire:model.lazy="nomor_telepon" pattern="\d{10,15}" id="floating_outlined_nomor_telepon" 
              class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 
              appearance-none dark:text-white focus:outline-none focus:ring-0 peer 
              @if($errors->has('nomor_telepon')) 
                border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 bg-transparent
              @elseif(strlen($nomor_telepon) > 0) 
                border-green-600 dark:border-green-500 dark:focus:border-green-500 focus:border-green-600 bg-white
              @else 
                border-gray-300 bg-transparent 
              @endif" 
              placeholder=" " />
            <label for="floating_outlined_nomor_telepon" 
              class="absolute text-sm 
              @if(strlen($nomor_telepon) > 0) 
                text-green-600 dark:text-green-500 
              @else 
                text-gray-500 dark:text-gray-400 
              @endif duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] 
              bg-white dark:bg-gray-900 px-2 
              peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
              peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 
              peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 
              rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
              Masukkan nomor telepon Anda
            </label>
          </div>
          @if ($errors->has('nomor_telepon'))
            <p class="mt-2 text-xs text-red-600 dark:text-red-400">
              <span class="font-medium">Perhatian!</span> {{ $errors->first('nomor_telepon') }}
            </p>
          @endif
        </div>      

        <div id="email-pelapor">
          <label for="email-pelapor" class="block text-sm font-semibold leading-6 text-gray-900">
            Email Pelapor<span class="text-red-600">*</span>
          </label>
          <div class="relative mt-3">
            <input type="email" wire:model.lazy="email" id="floating_outlined_email" 
              class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 
              appearance-none dark:text-white focus:outline-none focus:ring-0 peer 
              @if($errors->has('email')) 
                border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 bg-transparent
              @elseif(strlen($email) > 0 && filter_var($email, FILTER_VALIDATE_EMAIL)) 
                border-green-600 dark:border-green-500 dark:focus:border-green-500 focus:border-green-600 bg-white
              @else 
                border-gray-300 bg-transparent 
              @endif" 
              placeholder=" " />
            <label for="floating_outlined_email" 
              class="absolute text-sm 
              @if(strlen($email) > 0 && filter_var($email, FILTER_VALIDATE_EMAIL)) 
                text-green-600 dark:text-green-500 
              @else 
                text-gray-500 dark:text-gray-400 
              @endif duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] 
              bg-white dark:bg-gray-900 px-2 
              peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
              peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 
              peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 
              rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
              example@gmail.com
            </label>
          </div>
          @if ($errors->has('email'))
            <p class="mt-2 text-xs text-red-600 dark:text-red-400">
              <span class="font-medium">Perhatian!</span> {{ $errors->first('email') }}
            </p>
          @endif
        </div>      

        <div class="sm:col-span-2 mt-4">
          <label for="deskripsi-kejadian" class="block text-base font-bold leading-6 text-gray-900">2. Deskripsi Kejadian<span class="text-red-600">*</span></label>
        </div>

        <div id="tanggal-penerimaan-penolakan-section">
          <label for="tanggal_penerimaan_penolakan" class="block text-sm font-semibold leading-6 text-gray-900">
            Tanggal Penerimaan<span class="text-red-600">*</span>
          </label>
          <div class="mt-2.5 relative max-w-sm">
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
              wire:model.lazy="tanggal_penerimaan_penolakan"
              id="tanggal_penerimaan_penolakan"
              class="text-gray-900 text-sm rounded-lg border-1
              @if($errors->has('tanggal_penerimaan_penolakan')) 
                border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 
              @elseif(strlen($tanggal_penerimaan_penolakan) > 0) 
                border-green-600 dark:border-green-500 dark:focus:border-green-500 focus:border-green-600 
              @else 
                border-gray-300 
              @endif
              focus:ring-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Select date"
              @change-date.camel="@this.set('tanggal_penerimaan_penolakan', $event.target.value)"
            >
          </div>
          @if ($errors->has('tanggal_penerimaan_penolakan'))
            <p class="mt-2 text-xs text-red-600 dark:text-red-400">
              <span class="font-medium">Perhatian!</span> {{ $errors->first('tanggal_penerimaan_penolakan') }}
            </p>
          @endif
        </div>
      
        <div id="tanggal-dilaporkan-section">
          <label for="tanggal_dilaporkan" class="block text-sm font-semibold leading-6 text-gray-900">
            Tanggal Dilaporkan ke UPG<span class="text-red-600">*</span>
          </label>
          <div class="mt-2.5 relative max-w-sm">
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
              wire:model.lazy="tanggal_dilaporkan"
              id="tanggal_dilaporkan"
              class="text-gray-900 text-sm rounded-lg border-1
              @if($errors->has('tanggal_dilaporkan')) 
                border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 
              @elseif(strlen($tanggal_dilaporkan) > 0) 
                border-green-600 dark:border-green-500 dark:focus:border-green-500 focus:border-green-600 
              @else 
                border-gray-300 
              @endif
              focus:ring-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Select date"
              @change-date.camel="@this.set('tanggal_dilaporkan', $event.target.value)"
            >
          </div>
          @if ($errors->has('tanggal_dilaporkan'))
            <p class="mt-2 text-xs text-red-600 dark:text-red-400">
              <span class="font-medium">Perhatian!</span> {{ $errors->first('tanggal_dilaporkan') }}
            </p>
          @endif
        </div>
      
        <div id="nama-pemberi-gratifikasi">
          <label for="nama-pemberi-gratifikasi" class="block text-sm font-semibold leading-6 text-gray-900">
            Nama Pemberi Gratifikasi<span class="text-red-600">*</span>
          </label>
          <div class="relative mt-3">
            <input type="text" wire:model.lazy="nama_pemberi" id="floating_outlined_nama_pemberi" 
              class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1
              @if($errors->has('nama_pemberi')) 
                border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 
              @elseif(strlen($nama_pemberi) > 0) 
                border-green-600 dark:border-green-500 dark:focus:border-green-500 focus:border-green-600 
              @else 
                border-gray-300 
              @endif
              appearance-none dark:text-white focus:outline-none focus:ring-0 peer" 
              placeholder=" " />
            <label for="floating_outlined_nama_pemberi" 
              class="absolute text-sm 
              @if(strlen($nama_pemberi) > 0) 
                text-green-600 dark:text-green-500 
              @else 
                text-gray-500 dark:text-gray-400 
              @endif
              duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] 
              bg-white dark:bg-gray-900 px-2 
              peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
              peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 
              peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
              Masukkan Nama Pemberi
            </label>
          </div>
          @if ($errors->has('nama_pemberi'))
            <p class="mt-2 text-xs text-red-600 dark:text-red-400">
              <span class="font-medium">Perhatian!</span> {{ $errors->first('nama_pemberi') }}
            </p>
          @endif
        </div>
      
        <div id="hubungan">
          <label for="hubungan" class="block text-sm font-semibold leading-6 text-gray-900">
            Hubungan<span class="text-red-600">*</span>
          </label>
          <div class="relative mt-3">
            <input type="text" wire:model.lazy="hubungan" id="floating_outlined_hubungan" 
              class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1
              @if($errors->has('hubungan')) 
                border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 
              @elseif(strlen($hubungan) > 0) 
                border-green-600 dark:border-green-500 dark:focus:border-green-500 focus:border-green-600 
              @else 
                border-gray-300 
              @endif
              appearance-none dark:text-white focus:outline-none focus:ring-0 peer" 
              placeholder=" " />
            <label for="floating_outlined_hubungan" 
              class="absolute text-sm 
              @if(strlen($hubungan) > 0) 
                text-green-600 dark:text-green-500 
              @else 
                text-gray-500 dark:text-gray-400 
              @endif
              duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] 
              bg-white dark:bg-gray-900 px-2 
              peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
              peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 
              peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
              Contoh: Rekan Kerja
            </label>
          </div>
          @if ($errors->has('hubungan'))
            <p class="mt-2 text-xs text-red-600 dark:text-red-400">
              <span class="font-medium">Perhatian!</span> {{ $errors->first('hubungan') }}
            </p>
          @endif
        </div>
      
        <div id="objek-gratifikasi">
          <label for="objek-gratifikasi" class="block text-sm font-semibold leading-6 text-gray-900">
            Objek Gratifikasi<span class="text-red-600">*</span>
          </label>
          <div class="relative mt-3">
            <input type="text" wire:model.lazy="objek_gratifikasi" id="floating_outlined_objek_gratifikasi" 
              class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1
              @if($errors->has('objek_gratifikasi')) 
                border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 
              @elseif(strlen($objek_gratifikasi) > 0) 
                border-green-600 dark:border-green-500 dark:focus:border-green-500 focus:border-green-600 
              @else 
                border-gray-300 
              @endif
              appearance-none dark:text-white focus:outline-none focus:ring-0 peer" 
              placeholder=" " />
            <label for="floating_outlined_objek_gratifikasi" 
              class="absolute text-sm 
              @if(strlen($objek_gratifikasi) > 0) 
                text-green-600 dark:text-green-500 
              @else 
                text-gray-500 dark:text-gray-400 
              @endif
              duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] 
              bg-white dark:bg-gray-900 px-2 
              peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
              peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 
              peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
              Contoh: Uang Tunai
            </label>
          </div>
          @if ($errors->has('objek_gratifikasi'))
            <p class="mt-2 text-xs text-red-600 dark:text-red-400">
              <span class="font-medium">Perhatian!</span> {{ $errors->first('objek_gratifikasi') }}
            </p>
          @endif
        </div>
      
        <div id="pemanfaatan-objek-gratifikasi">
          <label for="pemanfaatan-objek-gratifikasi" class="block text-sm font-semibold leading-6 text-gray-900">
            Pemanfaatan Objek Gratifikasi<span class="text-red-600">*</span>
          </label>
          <div class="relative mt-3">
            <input type="text" wire:model.lazy="pemanfaatan_objek" id="floating_outlined_pemanfaatan_objek" 
              class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1
              @if($errors->has('pemanfaatan_objek')) 
                border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600 
              @elseif(strlen($pemanfaatan_objek) > 0) 
                border-green-600 dark:border-green-500 dark:focus:border-green-500 focus:border-green-600 
              @else 
                border-gray-300 
              @endif
              appearance-none dark:text-white focus:outline-none focus:ring-0 peer" 
              placeholder=" " />
            <label for="floating_outlined_pemanfaatan_objek" 
              class="absolute text-sm 
              @if(strlen($pemanfaatan_objek) > 0) 
                text-green-600 dark:text-green-500 
              @else 
                text-gray-500 dark:text-gray-400 
              @endif
              duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] 
              bg-white dark:bg-gray-900 px-2 
              peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
              peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 
              peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
              Cara pemanfaatan objek
            </label>
          </div>
          @if ($errors->has('pemanfaatan_objek'))
            <p class="mt-2 text-xs text-red-600 dark:text-red-400">
              <span class="font-medium">Perhatian!</span> {{ $errors->first('pemanfaatan_objek') }}
            </p>
          @endif
        </div>
      
        <div class="sm:col-span-2 mt-6" id="kronologi-kejadian-section">
          <label for="kronologi-kejadian" class="block text-sm font-semibold leading-6 text-gray-900">
            Kronologi Kejadian<span class="text-red-600">*</span>
          </label>
          <div class="mt-2.5">
            <textarea
              placeholder="Kronologi Kejadian"
              wire:model.lazy="kronologi"
              id="kronologi-kejadian"
              rows="4"
              class="block w-full rounded-md border-1
              @if($errors->has('kronologi'))
                border-red-600 dark:border-red-500 dark:focus:border-red-500 focus:border-red-600
              @elseif(strlen($kronologi) > 0)
                border-green-600 dark:border-green-500 dark:focus:border-green-500 focus:border-green-600
              @else
                border-gray-300
              @endif
              px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400
              focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:text-sm sm:leading-6">
            </textarea>
          </div>
          @if ($errors->has('kronologi'))
            <p class="mt-2 text-xs text-red-600 dark:text-red-400">
              <span class="font-medium">Perhatian!</span> {{ $errors->first('kronologi') }}
            </p>
          @endif
        </div>      

        <div class="col-span-full mt-4" id="upload-foto-section" class="hidden">
          <label for="upload-foto" class="block text-sm font-medium leading-6 text-gray-900 mb-3">Foto(Bukti) dan Dokumen yang telah Anda unduh<span class="text-red-600">*</span></label>
          @livewire('file-upload')
        </div>
      </div>

      @if ($errors->any())
        <div class="bg-red-50 border border-red-200 text-sm text-red-800 rounded-lg p-4 dark:bg-red-800/10 dark:border-red-900 dark:text-red-500" role="alert" tabindex="-1" aria-labelledby="hs-with-list-label">
          <div class="flex">
            <div class="shrink-0">
              <svg class="shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="m15 9-6 6"></path>
                <path d="m9 9 6 6"></path>
              </svg>
            </div>
            <div class="ms-4">
              <h3 id="hs-with-list-label" class="text-sm font-semibold">
                Anda belum mengisi semua data yang diperlukan. Silakan lengkapi dan coba lagi.
              </h3>
              <div class="mt-2 text-sm text-red-700 dark:text-red-400">
                <ul class="list-disc space-y-1 ps-5">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      @endif

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
  document.addEventListener('DOMContentLoaded', function() {
    const penerimaanRadio = document.getElementById('penerimaan');
    const penolakanRadio = document.getElementById('penolakan');
    const tanggalLabel = document.querySelector("label[for='tanggal_penerimaan_penolakan']");

    // Event listener untuk perubahan pada radio button
    penerimaanRadio.addEventListener('change', function() {
      if (this.checked) {
        tanggalLabel.textContent = 'Tanggal Penerimaan';
      }
    });

    penolakanRadio.addEventListener('change', function() {
      if (this.checked) {
        tanggalLabel.textContent = 'Tanggal Penolakan';
      }
    });
  });

  Livewire.on('formSubmitted', data => {
    console.log(data.pesan);
    Swal.fire({
      title: 'Laporan Terkirim!',
      text: 'data.pesan',
      icon: 'success',
      confirmButtonText: 'Cool'
    })
  })
</script>
