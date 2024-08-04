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
      <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
        <div class="sm:col-span-2 mb-6">
          <label for="klasifikasi-laporan" class="block text-base font-bold leading-6 text-gray-900 text-center">Form Laporan Benturan Kepentingan</label>
        </div>

        <div class="sm:col-span-2">
          <label for="informasi-pelapor" class="block text-base font-bold leading-6 text-gray-900">1. Informasi Pelapor<span class="text-red-600">*</span> </label>
        </div>
        
        <div id="nama-pelapor" >
          <label for="nama-pelapor" class="block text-sm font-semibold leading-6 text-gray-900">Nama Pelapor</label>
          <div class="relative mt-3">
            <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Nama Anda</label>
          </div>
        </div>
        <div id="jabatan" >
          <label for="jabatan" class="block text-sm font-semibold leading-6 text-gray-900">Jabatan</label>
          <div class="relative mt-3">
            <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Jabatan</label>
          </div>
        </div>
        <div id="nomor-telepon" >
          <label for="nomor-telepon" class="block text-sm font-semibold leading-6 text-gray-900">Nomor Telepon Pelapor</label>
          <div class="relative mt-3">
            <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
              0812345678
            </label>
          </div>
        </div>
        <div id="email-pelapor" >
          <label for="email-pelapor" class="block text-sm font-semibold leading-6 text-gray-900">Email Pelapor</label>
          <div class="relative mt-3">
            <input type="email" id="floating_outlined" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">example@gmail.com</label>
          </div>
        </div>

        <div class="sm:col-span-2 mt-4">
          <label for="informasi-pihak-terlibat" class="block text-base font-bold leading-6 text-gray-900">2. Informasi Pihak Terlibat<span class="text-red-600">*</span></label>
        </div>
        
        <div id="nama-pihak-terlibat">
          <label for="nama-pihak-terlibat" class="block text-sm font-semibold leading-6 text-gray-900">Nama Pihak Terlibat</label>
          <div class="relative mt-3">
            <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Masukkan Nama Pihak Terlibat</label>
          </div>
        </div>
        <div id="jabatan-pihak-terlibat" >
          <label for="jabatan-pihak-terlibat" class="block text-sm font-semibold leading-6 text-gray-900">Jabatan</label>
          <div class="relative mt-3">
            <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Jabatan</label>
          </div>
        </div>
        <div class="sm:col-span-2">
          <label for="program-keahlian" class="block text-sm font-semibold leading-6 text-gray-900">Unit Kerja</label>
          <div class="relative mt-3 w-1/2">
            <select id="program-keahlian" name="program-keahlian" autocomplete="program-keahlian-name" class="block w-full rounded-lg border border-gray-300 py-2.5 px-2.5 text-gray-900 bg-transparent shadow-sm ring-0 focus:outline-none focus:ring-0 focus:border-blue-600 sm:text-sm sm:leading-6">
              <option value="" disabled selected>Pilih Unit Kerja</option>
              @foreach ($programKeahlianOptions as $option)
                <option value="{{ $option->id }}">{{ $option->nama_program_keahlian }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="sm:col-span-2 mt-4">
          <label for="deskripsi-kejadian" class="block text-base font-bold leading-6 text-gray-900">3. Deskripsi Kejadian<span class="text-red-600">*</span></label>
        </div>

        <div id="tanggal-penerimaan-penolakan-section">
          <label for="tanggal_penerimaan_penolakan" class="block text-sm font-semibold leading-6 text-gray-900">
            Tanggal Penerimaan<span class="text-red-600">*</span>
          </label>
          <div class="mt-2.5 relative max-w-sm">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 1 0 0-2Z" />
              </svg>
            </div>
            <input 
              type="text" id="tanggal_penerimaan_penolakan" class="datepicker text-gray-900 text-sm rounded-lg border-gray-300 focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
              placeholder="Select date" autocomplete="off"
            >
          </div>
        </div>
        
        <div id="tanggal-dilaporkan-section">
          <label for="tanggal_dilaporkan" class="block text-sm font-semibold leading-6 text-gray-900">
            Tanggal Dilaporkan ke UPG<span class="text-red-600">*</span>
          </label>
          <div class="mt-2.5 relative max-w-sm">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 1 0 0-2Z" />
              </svg>
            </div>
            <input 
              type="text" id="tanggal_dilaporkan" class="datepicker text-gray-900 text-sm rounded-lg border-gray-300 focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
              placeholder="Select date" autocomplete="off"
            >
          </div>
        </div>
        <div id="tempat-kejadian" >
          <label for="tempat-kejadian" class="block text-sm font-semibold leading-6 text-gray-900">Tempat Kejadian</label>
          <div class="relative mt-3">
            <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-2 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Nama Tempat</label>
          </div>
        </div>
        <div id="jenis-benturan-section">
          <label for="jenis-benturan" class="block text-sm font-semibold leading-6 text-gray-900">Jenis Benturan Kepentingan</label>
          <div class="mt-2.5">
              <select id="jenis-benturan" name="jenis-benturan" autocomplete="jenis-benturan-name"
                  class="block px-2.5 pb-2.5 pt-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:max-w-xs sm:text-sm sm:leading-6">
                  <option value="" disabled selected>Pilih Jenis</option>
                  @foreach ($jenisBenturanKepentingan as $id => $jenis)
                      <option value="{{ $jenis->kode_id }}">{{ $jenis->jenis_benturan_kepentingan }}</option>
                  @endforeach
              </select>
          </div>
      </div>      

        <div class="sm:col-span-2 mt-6" id="kronologi-kejadian-section">
          <label for="kronologi-kejadian" class="block text-sm font-semibold leading-6 text-gray-900">Kronologi Kejadian</label>
          <div class="mt-2.5">
            <textarea placeholder="Kronologi Kejadian" id="kronologi-kejadian" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-bmti sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>

        <div class="sm:col-span-2 mt-4">
          <label for="deskripsi-kejadian" class="block text-base font-bold leading-6 text-gray-900">4. Bukti Pendukung<span class="text-red-600">*</span></label>
        </div>
        <div class="col-span-full" id="upload-foto-section" class="hidden">
          <label for="upload-foto" class="block text-sm font-medium leading-6 text-gray-900 mb-3">Upload file (dokumen, foto, video, dll.)</label>
          @livewire('file-upload')
        </div>

      </div>
      <div class="mt-10">
        <button type="submit" class="block w-full rounded-md bg-blue-bmti px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-[#60a5fa] transition ease-in-out duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">ADUKAN!</button>
      </div>
    </form>
  </div>
</div>

<script>
  function toggleFieldLabel(type) {
    const label = document.getElementById('tanggal-penerimaan-penolakan');
    if (type === 'penerimaan') {
      label.innerText = 'Tanggal Penerimaan';
    } else if (type === 'penolakan') {
      label.innerText = 'Tanggal Penolakan';
    }
  };
</script>

{{-- Sweet Alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
