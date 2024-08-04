<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('img/logo-bmti.png') }}" type="image/x-icon">

  <!-- Tailwind -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Font Tailwind -->
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

  <!-- Alpine JS -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Livewire -->
  @livewireStyles

  <title>Sistem Informasi Pengaduan dan Pengawasan - SIGAP</title>

  <style>
    .custom-scrollbar::-webkit-scrollbar {
      width: 6px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
      background: #f1f1f1;
      border-radius: 10px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
      background: #888;
      border-radius: 10px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
      background: #555;
    }
    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 50;
      transition: background-color 0.3s, backdrop-filter 0.3s, border-bottom 0.3s;
    }
    .main-content {
      padding-top: -100px; /* To offset the height of the navbar */
    }
    .navbar.bg-blue {
      background-color: rgba(0, 0, 255, 0.3);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.18);
      background-color: rgba(0, 0, 255, 0.6);
    }
    .navbar.bg-transparent-blur {
      background: rgba(255, 255, 255, 0);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.3);
    }
    .navbar.bg-sky {
      background-color: #0369a1; /* Tailwind bg-sky-600 color */
    }

    .float{
      position:fixed;
      width:60px;
      height:60px;
      bottom:40px;
      right:40px;
      background-color:#25d366;
      color:#FFF;
      border-radius:50px;
      text-align:center;
      font-size:30px;
      box-shadow: 2px 2px 3px #999;
      z-index:100;
      transition: opacity 0.3s;
      display: none; /* Initially hidden */
    }

.my-float{
	margin-top:16px;
}
  </style>
</head>

<body class="h-full">
  <!-- Navbar -->
  <nav id="navbar" class="navbar flex items-center justify-between p-4 lg:px-8 text-white" aria-label="Global" x-data="{ isOpen: false, solutionsOpen: false }">
    <div class="flex lg:flex-1">
      <a href="{{ route('home.view') }}" class="-m-1.5 p-1 flex items-center">
        <span class="sr-only">BBPPMPV BMTI</span>
        <img class="h-8 w-auto sm:h-10" src="{{ asset('img/logo-bmti.png') }}" alt="Logo BMTI">
        <h1 class="flex items-center ml-2 font-bold text-lg sm:text-xl">SIGAP</h1>
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" @click="isOpen = !isOpen" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <a href="#" class="relative group text-sm font-semibold leading-6 text-white hover:text-gray-300 transition-all duration-300">
        Beranda
        <span class="block h-1 w-0 bg-white rounded-full mt-1 mx-auto transition-all duration-300 group-hover:w-10"></span>
      </a>
      <a href="#panduan" class="relative group text-sm font-semibold leading-6 text-white hover:text-gray-300 transition-all duration-300">
        Panduan Pengisian 
        <span class="block h-1 w-0 bg-white rounded-full mt-1 mx-auto transition-all duration-300 group-hover:w-10"></span>
      </a>
      <a href="#cekStatus" class="relative group text-sm font-semibold leading-6 text-white hover:text-gray-300 transition-all duration-300">
        Cek Status Pengaduan
        <span class="block h-1 w-0 bg-white rounded-full mt-1 mx-auto transition-all duration-300 group-hover:w-10"></span>
      </a>
      <div class="relative" x-data="{ open: false }">
        <button @mouseenter="open = true" @mouseleave="open = false" type="button" class="inline-flex items-center gap-x-1 text-sm font-semibold leading-6 text-white" aria-expanded="false">
          <span>Layanan Publik</span>
          <svg :class="{'rotate-180': open}" class="h-5 w-5 flex-none text-gray-400 transition-transform" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
          </svg>
        </button>
        <div x-show="open" @mouseenter="open = true" @mouseleave="open = false" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 translate-y-1"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-1"
            class="absolute left-1/2 z-50 mt-5 flex w-screen max-w-max -translate-x-1/2 px-4">
          <div class="w-screen max-w-md flex-auto overflow-hidden rounded-3xl bg-white text-sm leading-6 shadow-lg ring-1 ring-gray-900/5">
            <div class="p-4 max-h-96 overflow-y-auto custom-scrollbar">
              <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                  <img class="h-6 w-6 group-hover:text-indigo-600" src="{{ asset('img/logo-bmti.png') }}" alt="Logo">
                </div>
                <div>
                  <a href="{{ route('internal.view') }}" target="_blank" class="font-semibold text-gray-900">
                    SIAP
                    <span class="absolute inset-0"></span>
                  </a>
                  <p class="mt-1 text-gray-600">Sistem Informasi dan Pelaporan Gratifikasi</p>
                </div>
              </div>
              <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                  <img class="h-6 w-6 group-hover:text-indigo-600" src="{{ asset('img/logo-bmti.png') }}" alt="Logo">
                </div>
                <div>
                  <a href="{{ route('benturan-kepentingan.view') }}" target="_blank" class="font-semibold text-gray-900">
                    KONFES
                    <span class="absolute inset-0"></span>
                  </a>
                  <p class="mt-1 text-gray-600">Layanan untuk mengadukan Benturan Kepentingan</p>
                </div>
              </div>
              <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                  <img class="h-6 w-6 group-hover:text-indigo-600" src="{{ asset('img/logo-bmti.png') }}" alt="Logo">
                </div>
                <div>
                  <a href="{{ route('eksternal.view') }}" target="_blank" class="font-semibold text-gray-900">
                    FAST SOLUTION
                    <span class="absolute inset-0"></span>
                  </a>
                  <p class="mt-1 text-gray-600">Layanan untuk mengadukan kerusakan, permintaan informasi, dan pemberian saran</p>
                </div>
              </div>
            </div>
            <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
              <a href="https://www.youtube.com/@bmtikemdikbud" class="flex items-center justify-center gap-x-2.5 p-3 font-semibold text-gray-900 hover:bg-gray-100">
                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm6.39-2.908a.75.75 0 011.766.027l3.5 2.25a.75.75 0 010 1.262l-3.5 2.25A.75.75 0 018 12.25v-4.5a.75.75 0 01.39-.658z" clip-rule="evenodd" />
                </svg>
                BBPPMPV BMTI
              </a>
              <a href="https://wa.me/628112242326" target="_blank" class="flex items-center justify-center gap-x-2.5 p-3 font-semibold text-gray-900 hover:bg-gray-100">
                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                </svg>
                Contact Us
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="{{ route('home.view') }}" class="relative group text-sm font-semibold leading-6 text-white hover:text-gray-300 transition-all duration-300">
        Home <span aria-hidden="true">&rarr;</span>
        <span class="absolute left-0 bottom-0 h-0.5 w-0 bg-white rounded-full mt-1 transition-all duration-300 group-hover:w-10"></span>
      </a>
    </div>
  </nav>

  <main class="main-content" id="main-content">
    <div class="relative isolate overflow-hidden bg-white py-24 sm:py-32">
      <img src="{{ asset('img/bg bmti.png') }}" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
      <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
      <div class="flex flex-col items-center justify-center mx-auto max-w-7xl px-8 mt-5 lg:px-8">
        <div class="flex flex-col items-center justify-center mx-auto max-w-2xl lg:mx-0">
          <img src="{{ asset('img/logo-bmti.png') }}" alt="logo bmti" class="h-16 sm:h-28 lg:h-40 w-auto mb-5" data-aos="zoom-in" data-aos-duration="1000">
          <h2 class="text-4xl font-bold text-white sm:text-5xl tracking-wider mt-8">SIGAP</h2>
          <p class="mt-2 text-lg leading-8 text-gray-300 text-center">Sistem Informasi Pengaduan dan Pengawasan</p>
          <a href="#pengaduan" class="float-animation mt-9 pr-6 inline-flex items-center rounded-3xl border border-gray-300 px-3.5 py-2.5 text-sm font-semibold text-gray-300 shadow-sm hover:bg-gray-300 hover:text-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900 transition-colors duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mx-2 h-6 w-5">
              <path fill-rule="evenodd" d="M11.47 13.28a.75.75 0 0 0 1.06 0l7.5-7.5a.75.75 0 0 0-1.06-1.06L12 11.69 5.03 4.72a.75.75 0 0 0-1.06 1.06l7.5 7.5Z" clip-rule="evenodd" />
              <path fill-rule="evenodd" d="M11.47 19.28a.75.75 0 0 0 1.06 0l7.5-7.5a.75.75 0 1 0-1.06-1.06L12 17.69l-6.97-6.97a.75.75 0 0 0-1.06 1.06l7.5 7.5Z" clip-rule="evenodd" />
            </svg>
            Mulai
          </a>
        </div>
      </div>
    </div>
  </main>

  <section id="pengaduan">
    <div class="flex justify-center mt-8 mb-16 pt-36">
      <div class="max-w-7xl px-6 lg:px-6">
        <div class="mx-auto max-w-2xl text-center mb-12">
          <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl inline-block relative">Selamat Datang di Form Pengaduan BMTI!</h2>
          <p class="mt-6 text-md leading-8 text-gray-500">Untuk memastikan setiap aduan ditangani dengan tepat, kami menyediakan dua kategori layanan pengaduan:</p>
        </div>
        <div class="grid max-w-2xl grid-cols-1 gap-x-52 gap-y-16 sm:gap-y-20 lg:max-w-none lg:grid-cols-2">
          <div class="card max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="h-8 w-auto sm:h-10" src="{{ asset('img/logo-bmti.png') }}" alt="Logo BMTI">
            <h5 class="mb-2 mt-3 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Layanan Pengaduan Internal</h5>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Butuh Bantuan untuk Melaporkan Gratifikasi dan benturan kepentingan? Kami Siap Membantu!</p>
            <a href="#" data-modal-target="select-modal" data-modal-toggle="select-modal" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                Open
                <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                </svg>
            </a>
          </div>

          <div id="select-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex justify-center items-center w-full h-full max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Layanan Pengaduan Internal
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="select-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                  </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                  <p class="text-gray-500 dark:text-gray-400 mb-4">Pilih layanan pengaduan yang paling sesuai untuk aduan Anda:</p>
                  <ul class="space-y-4 mb-4">
                    <li>
                      <input type="radio" id="silagra" name="job" value="silagra" class="hidden peer" required />
                      <label for="silagra" class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500" onclick="window.location='{{ route('internal.view') }}'">
                        <div class="block">
                          <div class="w-full text-lg font-semibold">SIAP</div>
                          <div class="w-full text-gray-500 dark:text-gray-400">Sistem Informasi dan Pengaduan Gratifikasi</div>
                        </div>
                        <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                      </label>
                    </li>
                    <li>
                      <input type="radio" id="job-2" name="job" value="job-2" class="hidden peer">
                      <label for="job-2" class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500"  onclick="window.location='{{ route('benturan-kepentingan.view') }}'">
                        <div class="block">
                          <div class="w-full text-lg font-semibold">KONFES</div>
                          <div class="w-full text-gray-500 dark:text-gray-400">Konflik dan Kepentingan Sistem
                          </div>
                        </div>
                        <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                      </label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        
          <div class="card max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="h-8 w-auto sm:h-10" src="{{ asset('img/logo-bmti.png') }}" alt="Logo BMTI">
            <h5 class="mb-2 mt-3 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Layanan Pengaduan Eksternal</h5>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Butuh Bantuan atau Ingin Memberikan Masukan? Kami Siap Mendengarkan!</p>
            <a href="{{ route('eksternal.view') }}" class="inline-flex font-medium items-center text-blue-600 hover:underline">
              Open
              <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="panduan">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
      <div class="mx-auto max-w-2xl text-center mb-12">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl inline-block relative">Panduan Penggunaan</h2>
        <p class="mt-6 text-md leading-8 text-gray-500">Untuk membantu Anda dalam proses ini, kami telah menyusun panduan penggunaan yang akan memandu Anda melalui setiap langkah pengajuan aduan:</p>
      </div>
      <div class="grid gap-8 row-gap-0 lg:grid-cols-3">
        <div class="relative text-center">
          <div class="flex items-center justify-center w-16 h-16 shadow-md mx-auto mb-4 rounded-full bg-indigo-50 sm:w-20 sm:h-20">
            <svg class="w-12 h-12 text-blue-bmti sm:w-16 sm:h-16" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M15 4v3a1 1 0 0 1-1 1h-3m2 10v1a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7.13a1 1 0 0 1 .24-.65L6.7 8.35A1 1 0 0 1 7.46 8H9m-1 4H4m16-7v10a1 1 0 0 1-1 1h-7a1 1 0 0 1-1-1V7.87a1 1 0 0 1 .24-.65l2.46-2.87a1 1 0 0 1 .76-.35H19a1 1 0 0 1 1 1Z"/>
            </svg>            
          </div>
          <h6 class="mb-2 text-2xl font-extrabold">Step 1</h6>
          <p class="text-gray-900 font-semibold mb-1">Pilih Klasifikasi Laporan</p>
          <p class="max-w-md mb-3 text-sm text-gray-500 sm:mx-auto">Mulai dengan memilih kategori yang paling sesuai untuk aduan Anda. Pilihan ini akan memastikan bahwa aduan Anda diteruskan ke departemen yang tepat untuk penanganan yang cepat dan tepat.</p>
          <div class="top-0 right-0 flex items-center justify-center h-24 lg:-mr-8 lg:absolute">
            <svg class="w-8 text-gray-700 transform rotate-90 lg:rotate-0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <line fill="none" stroke-miterlimit="10" x1="2" y1="12" x2="22" y2="12"></line>
              <polyline fill="none" stroke-miterlimit="10" points="15,5 22,12 15,19 "></polyline>
            </svg>
          </div>
        </div>
        <div class="relative text-center">
          <div class="flex items-center justify-center w-16 h-16 shadow-md mx-auto mb-4 rounded-full bg-indigo-50 sm:w-20 sm:h-20">
            <svg class="w-12 h-12 text-blue-bmti sm:w-16 sm:h-16" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 5V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5M9 3v4a1 1 0 0 1-1 1H4m11.383.772 2.745 2.746m1.215-3.906a2.089 2.089 0 0 1 0 2.953l-6.65 6.646L9 17.95l.739-3.692 6.646-6.646a2.087 2.087 0 0 1 2.958 0Z"/>
            </svg>            
          </div>
          <h6 class="mb-2 text-2xl font-extrabold">Step 2</h6>
          <p class="text-gray-900 font-semibold mb-1">Isi Formulir Pengaduan</p>
          <p class="max-w-md mb-3 text-sm text-gray-500 sm:mx-auto">Lengkapi formulir dengan informasi yang dibutuhkan. Pastikan Anda memberikan deskripsi yang jelas dan lengkap dari masalah yang Anda hadapi.</p>
          <div class="top-0 right-0 flex items-center justify-center h-24 lg:-mr-8 lg:absolute">
            <svg class="w-8 text-gray-700 transform rotate-90 lg:rotate-0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <line fill="none" stroke-miterlimit="10" x1="2" y1="12" x2="22" y2="12"></line>
              <polyline fill="none" stroke-miterlimit="10" points="15,5 22,12 15,19 "></polyline>
            </svg>
          </div>
        </div>
        <div class="relative text-center">
          <div class="flex items-center justify-center w-16 h-16 shadow-md mx-auto mb-4 rounded-full bg-indigo-50 sm:w-20 sm:h-20">
            <svg class="w-12 h-12 text-blue-bmti sm:w-16 sm:h-16" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 3v4a1 1 0 0 1-1 1H5m4 6 2 2 4-4m4-8v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z"/>
            </svg>                       
          </div>
          <h6 class="mb-2 text-2xl font-extrabold">Step 3</h6>
          <p class="text-gray-900 font-semibold mb-1">Status Aduan</p>
          <p class="max-w-md mb-3 text-sm text-gray-500 sm:mx-auto">Setelah pengajuan, simpan ID pengaduan yang Anda terima. ID ini akan memungkinkan Anda untuk melacak perkembangan penanganan aduan Anda melalui opsi 'Cek Status Pengaduan'.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Cek Status Pengaduan -->
  <section id="cekStatus">
    <div class="mx-auto max-w-2xl text-center mb-12 pt-36">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl inline-block relative">Cek Status Pengaduan Anda</h2>
      <p class="mt-6 text-md leading-8 text-gray-500">Layanan ini memungkinkan Anda untuk memantau perkembangan dan penanganan aduan yang telah Anda sampaikan.</p>
    </div>
    <form class="flex items-center max-w-sm mx-auto mb-6">   
      <label for="simple-search" class="sr-only">Search</label>
      <div class="relative w-full">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-3 5h3m-6 0h.01M12 16h3m-6 0h.01M10 3v4h4V3h-4Z"/>
          </svg>        
        </div>
        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan id pengaduan anda..." required />
      </div>
      <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
        <span class="sr-only">Search</span>
      </button>
    </form>
  </section>

  <section id="manfaat">
    <div class="mx-auto max-w-2xl text-center mb-12 pt-36">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl inline-block relative">Manfaat Pengaduan Masyarakat</h2>
      <p class="mt-6 text-md leading-8 text-gray-500">Manfaat-manfaat ini menunjukkan betapa pentingnya sistem pengaduan masyarakat bagi kami dalam upaya untuk terus meningkatkan layanan dan menjawab kebutuhan masyarakat dengan lebih baik.</p>
    </div>
    <div class="grid max-w-screen-lg gap-8 row-gap-10 mx-auto lg:grid-cols-2">
      <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
        <div class="mr-4">
          <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50 shadow-md">
            <svg class="h-5 w-5 flex-none text-blue-bmti" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path fill-rule="evenodd" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025.75.75 0 0 1 .313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 0 1 1.248.313 5.25 5.25 0 0 1-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 1 1 2.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0 1 12 6.75ZM4.117 19.125a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z" clip-rule="evenodd" />
              <path d="m10.076 8.64-2.201-2.2V4.874a.75.75 0 0 0-.364-.643l-3.75-2.25a.75.75 0 0 0-.916.113l-.75.75a.75.75 0 0 0-.113.916l2.25 3.75a.75.75 0 0 0 .643.364h1.564l2.062 2.062 1.575-1.297Z" />
              <path fill-rule="evenodd" d="m12.556 17.329 4.183 4.182a3.375 3.375 0 0 0 4.773-4.773l-3.306-3.305a6.803 6.803 0 0 1-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 0 0-.167.063l-3.086 3.748Zm3.414-1.36a.75.75 0 0 1 1.06 0l1.875 1.876a.75.75 0 1 1-1.06 1.06L15.97 17.03a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
          </div>
        </div>
        <div>
          <h6 class="mb-3 text-xl font-bold leading-5">Perbaikan Sistem dan Prosedur</h6>
          <p class="mb-3 text-sm text-gray-700">
            Dengan melaporkan masalah, manajemen dapat mengidentifikasi dan memperbaiki kekurangan dalam sistem atau prosedur, sehingga meningkatkan kualitas layanan.
          </p>
        </div>
      </div>
      <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
        <div class="mr-4">
          <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50 shadow-md">
            <svg class="h-5 w-5 flex-none text-blue-bmti" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z" clip-rule="evenodd" />
              <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375Zm9.586 4.594a.75.75 0 0 0-1.172-.938l-2.476 3.096-.908-.907a.75.75 0 0 0-1.06 1.06l1.5 1.5a.75.75 0 0 0 1.116-.062l3-3.75Z" clip-rule="evenodd" />
            </svg>
          </div>
        </div>
        <div>
          <h6 class="mb-3 text-xl font-bold leading-5">Efisiensi dan Efektivitas</h6>
          <p class="mb-3 text-sm text-gray-700">
            Pengaduan membantu mengoptimalkan proses kerja dan meningkatkan kinerja organisasi.
          </p>
        </div>
      </div>
      <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
        <div class="mr-4">
          <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50 shadow-md">
            <svg class="h-5 w-5 flex-none text-blue-bmti" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
              <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
            </svg>
          </div>
        </div>
        <div>
          <h6 class="mb-3 text-xl font-bold leading-5">Hubungan yang Lebih Kuat dengan Stakeholder</h6>
          <p class="mb-3 text-sm text-gray-700">
            Menanggapi pengaduan dengan cepat dan efektif dapat memperkuat kepercayaan dan hubungan antara BBPPMPV BMTI dan para pemangku kepentingannya.
          </p>
        </div>
      </div>
      <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row">
        <div class="mr-4">
          <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-indigo-50 shadow-md">
            <svg class="h-5 w-5 flex-none text-blue-bmti" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
              <path d="M18.75 12.75h1.5a.75.75 0 0 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM12 6a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 6ZM12 18a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 12 18ZM3.75 6.75h1.5a.75.75 0 1 0 0-1.5h-1.5a.75.75 0 0 0 0 1.5ZM5.25 18.75h-1.5a.75.75 0 0 1 0-1.5h1.5a.75.75 0 0 1 0 1.5ZM3 12a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 3 12ZM9 3.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM12.75 12a2.25 2.25 0 1 1 4.5 0 2.25 2.25 0 0 1-4.5 0ZM9 15.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
            </svg>
          </div>
        </div>
        <div>
          <h6 class="mb-3 text-xl font-bold leading-5">Tata Kelola yang Baik</h6>
          <p class="mb-3 text-sm text-gray-700">
            Pengaduan membantu memastikan bahwa BBPPMPV BMTI beroperasi dengan prinsip-prinsip transparansi, akuntabilitas, dan tanggung jawab.
          </p>
        </div>
      </div>
    </div>
  </div>
  </section>

    <!-- Floating WhatsApp Icon -->
    <a href="https://wa.me/628112242326" class="float" target="_blank">
      <i class="fa fa-whatsapp my-float"></i>
    </a>
  

  <footer>
    <section class="bg-white mt-14">
      <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
        <nav class="flex flex-wrap justify-center -mx-5 -my-2">
          <div class="px-5 py-2">
            <a href="#" class="text-sm font-semibold leading-6 text-gray-500 hover:text-blue-bmti">Privacy</a>
          </div>
          <div class="px-5 py-2">
            <a href="#" class="text-sm font-semibold leading-6 text-gray-500 hover:text-blue-bmti">Blog</a>
          </div>
          <div class="px-5 py-2">
            <a href="#" class="text-sm font-semibold leading-6 text-gray-500 hover:text-blue-bmti">Tentang Kami</a>
          </div>
          <div class="px-5 py-2">
            <a href="#" class="text-sm font-semibold leading-6 text-gray-500 hover:text-blue-bmti">Ketentuan Layanan</a>
          </div>
          <div class="px-5 py-2">
            <a href="https://wa.me/628112242326" class="text-sm font-semibold leading-6 text-gray-500 hover:text-blue-bmti">Hubungi Kami</a>
          </div>
        </nav>
        <div class="flex justify-center mt-8 space-x-6">
          <a href="https://www.facebook.com/bmti.kemdikbud/" target="_blank" class="text-gray-400 hover:text-blue-bmti">
            <span class="sr-only">Facebook</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
            </svg>
          </a>
          <a href="https://www.instagram.com/bmti.kemdikbud/" target="_blank" class="text-gray-400 hover:text-blue-bmti">
            <span class="sr-only">Instagram</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
            </svg>
          </a>
          <a href="https://x.com/bmti_kemdikbud" target="_blank" class="text-gray-400 hover:text-blue-bmti">
            <span class="sr-only">Twitter</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
              <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
            </svg>
          </a>
        </div>
        <p class="mt-8 text-base leading-6 text-center text-gray-400">
          © 2024 BBPPMPV BMTI, Inc. All rights reserved.
        </p>
      </div>
    </section>
  </footer>

  <!-- Livewire -->
  @livewireScripts

  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- Flowbite JS -->
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

  <script>
    let navbar = document.getElementById("navbar");
    let mainContent = document.getElementById("main-content");
    let pengaduanSection = document.getElementById("pengaduan");
    let floatBtn = document.querySelector('.float');

    window.onscroll = function () {
      scrollFunction();
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        navbar.classList.add("bg-transparent-blur");
      } else {
        navbar.classList.remove("bg-transparent-blur");
      }

      let mainRect = mainContent.getBoundingClientRect();
      if (mainRect.bottom <= 0) {
        navbar.classList.add("bg-sky");
        floatBtn.style.display = 'block'; // Show the WhatsApp button when not in main-content
      } else {
        navbar.classList.remove("bg-sky");
        floatBtn.style.display = 'none'; // Hide the WhatsApp button when in main-content
      }

      let rect = pengaduanSection.getBoundingClientRect();
      if (rect.top <= 0 && rect.bottom >= 0) {
        navbar.classList.add("bg-blue");
      } else {
        navbar.classList.remove("bg-blue");
      }
    }
  </script>

</body>
</html>
