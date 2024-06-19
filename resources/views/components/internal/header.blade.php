<div class="relative isolate overflow-hidden bg-white py-24 sm:py-32">
  <img src="{{ asset('img/bg-1.jpg') }}" alt=""
    class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
  <div class="flex flex-col items-center justify-center mx-auto max-w-7xl px-6 lg:px-8">
    <div class="flex flex-col items-center justify-center mx-auto max-w-2xl lg:mx-0 text-center">
      <h2 class="text-5xl sm:text-6xl md:text-7xl lg:text-6xl font-bold text-white tracking-wider mt-5">Layanan Pengaduan Gratifikasi Online</h2>
      <p class="mt-6 text-lg leading-8 text-gray-300">Laporkan gratifikasi langsung kepada kami atau kepada instansi pemerintah berwenang dengan mudah dan aman.</p>
    </div>
  </div>
</div>

<div class="overflow-hidden bg-white px-6 py-24 sm:py-32">
  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl inline-block relative">Laporkan Gratifikasi dengan Mudah dan Aman!</h2>
    <p class="mt-6 text-md leading-8 text-gray-500">Apakah Anda menyaksikan atau menerima gratifikasi yang perlu dilaporkan?</p>
    <p class="text-md leading-8 text-gray-500">Kami menyediakan dua pilihan untuk memudahkan Anda dalam melaporkan kejadian tersebut:</p>
  </div>
  <div class="flex justify-center mt-7 mb-16 pt-9">
    <div class="max-w-7xl px-6 lg:px-6">
      <div class="grid max-w-2xl grid-cols-1 gap-x-52 gap-y-16 sm:gap-y-20 lg:max-w-none lg:grid-cols-2">
        <div
          class="card max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="flex items-center">
            <img class="h-8 w-auto sm:h-10" src="{{ asset('img/logo-bmti.png') }}" alt="Logo BMTI">
            <h5 class="ml-3 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
              SILAGRA
            </h5>
          </div>
          <p class="mb-3 mt-3 font-normal text-gray-500 dark:text-gray-400">Dengan menggunakan SILAGRA, Anda bisa melaporkan gratifikasi secara online dengan cepat dan aman. Data Anda akan kami jaga kerahasiaannya, dan laporan Anda akan segera ditindaklanjuti oleh tim kami.</p>
          <a href="#timeline"
            class="inline-flex font-medium items-center text-blue-600 hover:underline">
            Open
            <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2"
                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
            </svg>
          </a>
        </div>
        <div
          class="card max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="flex items-center">
            <img class="h-8 w-auto sm:h-10" src="{{ asset('img/logo_gol.png') }}" alt="Logo GOL KPK">
            <h5 class="ml-3 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
              GOL KPK
            </h5>
          </div>
          <p class="mb-3 mt-3 font-normal text-gray-500 dark:text-gray-400">Anda juga memiliki opsi untuk melaporkan langsung ke KPK. KPK adalah lembaga negara yang berdedikasi untuk memberantas korupsi dan gratifikasi di Indonesia.</p>
          <a href="https://gol.kpk.go.id/login/" target="_blank"
            class="inline-flex font-medium items-center text-blue-600 hover:underline">
            Open
            <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2"
                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- Timeline --}}
  <div id="timeline" class="px-6">
    <div class="mx-auto max-w-2xl text-left pt-24">
      <h2 class="text-base font-bold tracking-tight text-gray-900 sm:text-lg inline-block relative">Langkah Mudah untuk Melaporkan Gratifikasi</h2>
      <p class="mt-3 mb-12 text-md leading-8 text-gray-500">Ikuti langkah-langkah berikut untuk melaporkan gratifikasi dengan mudah dan aman:</p>
      <ol class="bg-white relative border-s border-gray-200 dark:border-gray-700 mx-auto max-w-2xl">                  
        <li class="mb-10 ml-6">            
          <span class="absolute flex items-center justify-center w-8 h-8 bg-blue-100 rounded-full -left-5 ml-1 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
            <svg class="w-5 h-5 text-blue-bmti dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
            </svg>                      
          </span>
          <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Isi Form Online</h3>
          <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Lengkapi form online dengan informasi detail mengenai gratifikasi yang ingin Anda laporkan. Pastikan semua data terisi dengan benar untuk mempercepat proses verifikasi.</p>
        </li>
        <li class="mb-10 ml-6">
          <span class="absolute flex items-center justify-center w-8 h-8 bg-blue-100 rounded-full -left-5 ml-1 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
            <svg class="w-5 h-5 text-blue-bmti dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V4M7 14H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2m-1-5-4 5-4-5m9 8h.01"/>
            </svg>            
          </span>
          <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Download Formulir Laporan Gratifikasi</h3>
          <p class="text-base font-normal text-gray-500 dark:text-gray-400">Setelah mengisi form, download formulir laporan gratifikasi yang kami berikan. Dokumen ini berisi informasi yang diperlukan untuk proses lebih lanjut.</p>
          <a href="{{ asset('storage/Form-Gratifikasi-KPK0.pdf') }}" class="mt-3 inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700" download>
            <svg class="w-3.5 h-3.5 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
              <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
            </svg> Download Formulir Gratifikasi
          </a>          
        </li>
        <li class="ml-6">
          <span class="absolute flex items-center justify-center w-8 h-8 bg-blue-100 rounded-full -left-5 ml-1 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
            <svg class="w-5 h-5 text-blue-bmti dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v9m-5 0H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2M8 9l4-5 4 5m1 8h.01"/>
            </svg>            
          </span>
          <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Upload Formulir Laporan Gratifikasi</h3>
          <p class="text-base font-normal text-gray-500 dark:text-gray-400">Unggah formulir laporan gratifikasi yang telah Anda download ke form di bawah ini. Tim kami akan segera memverifikasi laporan Anda dan mengambil langkah-langkah yang diperlukan.</p>
        </li>
      </ol>        
    </div>
  </div>
</div>


