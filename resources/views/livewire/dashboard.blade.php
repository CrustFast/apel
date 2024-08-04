<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
  <!-- Flowbite -->
  <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
  <!-- ApexCharts -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  {{-- Livewire --}}
  @livewireStyles
  <title>Dashboard Admin - SIGAP</title>
</head>
<body>
  <!-- Navbar -->
  <nav class="bg-white shadow-sm dark:bg-neutral-800 border-b border-gray-200 dark:border-neutral-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex">
          <div class="-ml-2 mr-2 flex items-center md:hidden">
            <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white">
              <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </button>
          </div>
          <div class="flex-shrink-0 flex items-center">
            <a class="text-xl font-bold text-gray-900 dark:text-white" href="#">Brand</a>
          </div>
        </div>
        <div class="hidden md:ml-6 md:flex md:items-center">
          <div class="flex items-center space-x-6">
            <button class="text-gray-500 dark:text-neutral-400 hover:text-gray-700 dark:hover:text-neutral-300 focus:outline-none">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"/><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"/></svg>
            </button>
            <div class="relative">
              <button class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="inline-block size-[38px] bg-gray-100 rounded-full overflow-hidden">
                  <svg class="size-full text-gray-300" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.62854" y="0.359985" width="15" height="15" rx="7.5" fill="white"></rect>
                    <path d="M8.12421 7.20374C9.21151 7.20374 10.093 6.32229 10.093 5.23499C10.093 4.14767 9.21151 3.26624 8.12421 3.26624C7.0369 3.26624 6.15546 4.14767 6.15546 5.23499C6.15546 6.32229 7.0369 7.20374 8.12421 7.20374Z" fill="currentColor"></path>
                    <path d="M11.818 10.5975C10.2992 12.6412 7.42106 13.0631 5.37731 11.5537C5.01171 11.2818 4.69296 10.9631 4.42107 10.5975C4.28982 10.4006 4.27107 10.1475 4.37419 9.94123L4.51482 9.65059C4.84296 8.95684 5.53671 8.51624 6.30546 8.51624H9.95231C10.7023 8.51624 11.3867 8.94749 11.7242 9.62249L11.8742 9.93184C11.968 10.1475 11.9586 10.4006 11.818 10.5975Z" fill="currentColor"></path>
                  </svg>
                </span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <div class="flex">
    <!-- Sidebar -->
    <div id="hs-offcanvas-example" class="hs-overlay [--auto-close:lg] hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 start-0 bottom-0 z-[60] w-64 bg-white border-e border-gray-200 pt-7 pb-10 overflow-y-auto lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-800 dark:border-neutral-700" role="dialog" tabindex="-1" aria-label="Sidebar">
      <div class="px-6">
        <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80 dark:text-white" href="#" aria-label="Brand">Dashboard</a>
      </div>
      <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
        <ul class="space-y-1.5">
          <li>
            <a class="flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-gray-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-700 dark:text-white" href="#">
              <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-no-axes-combined"><path d="M12 16v5"/><path d="M16 14v7"/><path d="M20 10v11"/><path d="m22 3-8.646 8.646a.5.5 0 0 1-.708 0L9.354 8.354a.5.5 0 0 0-.707 0L2 15"/><path d="M4 18v3"/><path d="M8 14v7"/></svg>
              Dashboard
            </a>
          </li>
          <li class="hs-accordion" id="internal-accordion">
            <button type="button" class="hs-accordion-toggle hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hs-accordion-active:text-white dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" aria-expanded="false" aria-controls="internal-accordion-content">
              <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
              Internal
              <svg class="hs-accordion-active:block ms-auto hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
              <svg class="hs-accordion-active:hidden ms-auto block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            </button>
            <div id="internal-accordion-content" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" role="region" aria-labelledby="account-accordion">
              <ul class="pt-2 ps-2">
                <li>
                  <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">
                    SIAP
                  </a>
                </li>
                <li>
                  <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">
                    KONFES
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="hs-accordion" id="eksternal-accordion">
            <button type="button" class="hs-accordion-toggle hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hs-accordion-active:text-white dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" aria-expanded="false" aria-controls="eksternal-accordion-content">
              <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
              Eksternal
              <svg class="hs-accordion-active:block ms-auto hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
              <svg class="hs-accordion-active:hidden ms-auto block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            </button>
            <div id="eksternal-accordion-content" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 hidden" role="region" aria-labelledby="projects-accordion">
              <ul class="pt-2 ps-2">
                <li>
                  <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">
                    Pengaduan
                  </a>
                </li>
                <li>
                  <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">
                    Permintaan Informasi
                  </a>
                </li>
                <li>
                  <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:bg-neutral-800 dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="#">
                    Saran
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li><a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700 dark:text-neutral-400 dark:hover:text-neutral-300" href="#">
            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" x2="9" y1="12" y2="12"/></svg>
            Sign Out
          </a></li>
        </ul>
      </nav>
    </div>
    <!-- End Sidebar -->

    <!-- Main Content -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-8 mx-auto lg:ml-64 mt-4">
      <!-- Card Section -->
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
          <div class="p-4 md:p-5 flex gap-x-4">
            <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-neutral-800">
              <svg class="shrink-0 size-5 text-gray-600 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-plus"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M9 15h6"/><path d="M12 18v-6"/></svg>
            </div>

            <div class="grow">
              <div class="flex items-center gap-x-2">
                <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                  Total Pengaduan
                </p>
              </div>
              <div class="mt-1 flex items-center gap-x-2">
                <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                  72,540
                </h3>
                <span class="inline-flex items-center gap-x-1 py-0.5 px-2 rounded-full bg-green-100 text-green-900 dark:bg-green-800 dark:text-green-100">
                  <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
                  <span class="inline-block text-xs font-medium">
                    12.5%
                  </span>
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
          <div class="p-4 md:p-5 flex gap-x-4">
            <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-neutral-800">
              <svg class="shrink-0 size-5 text-gray-600 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-input"><path d="M4 22h14a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v4"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M2 15h10"/><path d="m9 18 3-3-3-3"/></svg>
            </div>

            <div class="grow">
              <div class="flex items-center gap-x-2">
                <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                  Laporan Masuk
                </p>
              </div>
              <div class="mt-1 flex items-center gap-x-2">
                <h3 class="text-xl font-medium text-gray-800 dark:text-neutral-200">
                  29.4%
                </h3>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
          <div class="p-4 md:p-5 flex gap-x-4">
            <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-neutral-800">
              <svg class="shrink-0 size-5 text-gray-600 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-clock"><path d="M16 22h2a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v3"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><circle cx="8" cy="16" r="6"/><path d="M9.5 17.5 8 16.25V14"/></svg>
            </div>

            <div class="grow">
              <div class="flex items-center gap-x-2">
                <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                  Sedang Ditinjut
                </p>
              </div>
              <div class="mt-1 flex items-center gap-x-2">
                <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                  56.8%
                </h3>
                <span class="inline-flex items-center gap-x-1 py-0.5 px-2 rounded-full bg-red-100 text-red-900 dark:bg-red-800 dark:text-red-100">
                  <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 17 13.5 8.5 8.5 13.5 2 7"/><polyline points="16 17 22 17 22 11"/></svg>
                  <span class="inline-block text-xs font-medium">
                    1.7%
                  </span>
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
          <div class="p-4 md:p-5 flex gap-x-4">
            <div class="shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-neutral-800">
              <svg class="shrink-0 size-5 text-gray-600 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-check"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="m9 15 2 2 4-4"/></svg>
            </div>

            <div class="grow">
              <div class="flex items-center gap-x-2">
                <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                  Laporan Selesai
                </p>
              </div>
              <div class="mt-1 flex items-center gap-x-2">
                <h3 class="text-xl font-medium text-gray-800 dark:text-neutral-200">
                  92,913
                </h3>
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->
      </div>
      <!-- End Card Section -->

      <!-- Chart Section -->
      <div class="grid sm:grid-cols-2 gap-4 sm:gap-6 mt-6">
        <!-- Pie Chart -->
        <div class="p-4 bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
          <div class="flex flex-col justify-center items-center h-[300px] mt-6">
            <div id="hs-pie-chart" class="mb-6"></div>

            <!-- Legend Indicator -->
            <div class="flex justify-center sm:justify-end items-center gap-x-4 mt-3 sm:mt-6">
              <div class="inline-flex items-center">
                <span class="size-2.5 inline-block bg-blue-600 rounded-sm me-2"></span>
                <span class="text-[13px] text-gray-600 dark:text-neutral-400">
                  Income
                </span>
              </div>
              <div class="inline-flex items-center">
                <span class="size-2.5 inline-block bg-cyan-500 rounded-sm me-2"></span>
                <span class="text-[13px] text-gray-600 dark:text-neutral-400">
                  Outcome
                </span>
              </div>
              <div class="inline-flex items-center">
                <span class="size-2.5 inline-block bg-gray-300 rounded-sm me-2 dark:bg-neutral-700"></span>
                <span class="text-[13px] text-gray-600 dark:text-neutral-400">
                  Others
                </span>
              </div>
            </div>
            <!-- End Legend Indicator -->
          </div>
        </div>
        <!-- End Pie Chart -->

        <!-- Multiple Bar Chart -->
        <div class="p-4 bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
          <!-- Legend Indicator -->
          <div class="flex justify-center sm:justify-end items-center gap-x-4 mb-3 sm:mb-6">
            <div class="inline-flex items-center">
              <span class="size-2.5 inline-block bg-blue-600 rounded-sm me-2"></span>
              <span class="text-[13px] text-gray-600 dark:text-neutral-400">
                Income
              </span>
            </div>
            <div class="inline-flex items-center">
              <span class="size-2.5 inline-block bg-gray-300 rounded-sm me-2 dark:bg-neutral-700"></span>
              <span class="text-[13px] text-gray-600 dark:text-neutral-400">
                Outcome
              </span>
            </div>
          </div>
          <!-- End Legend Indicator -->

          <div id="hs-multiple-bar-charts"></div>
        </div>
        <!-- End Multiple Bar Chart -->
      </div>
      <!-- End Chart Section -->

      <!-- Table Section -->
      <div class="mt-6">
        <!-- Card -->
        <div class="flex flex-col">
          <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
              <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
                <!-- Header -->
                <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                  <div>
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                      Pengaduan
                    </h2>
                    <p class="text-sm text-gray-600 dark:text-neutral-400">
                      Pengaduan Internal dan Pengaduan Eksternal
                    </p>
                  </div>

                  <div>
                    <div class="inline-flex gap-x-2">
                      <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                        View all
                      </a>

                      {{-- <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                        Add user
                      </a> --}}
                    </div>
                  </div>
                </div>
                <!-- End Header -->

                <!-- Table -->
                <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                  <thead class="bg-gray-50 dark:bg-neutral-800">
                    <tr>
                      <th scope="col" class="ps-6 py-3 text-start">
                        <label for="hs-at-with-checkboxes-main" class="flex">
                          <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-main">
                          <span class="sr-only">Checkbox</span>
                        </label>
                      </th>

                      <th scope="col" class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3 text-start">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                            Name
                          </span>
                        </div>
                      </th>

                      <th scope="col" class="px-6 py-3 text-start">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                            Position
                          </span>
                        </div>
                      </th>

                      <th scope="col" class="px-6 py-3 text-start">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                            Status
                          </span>
                        </div>
                      </th>

                      <th scope="col" class="px-6 py-3 text-start">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                            Portfolio
                          </span>
                        </div>
                      </th>

                      <th scope="col" class="px-6 py-3 text-start">
                        <div class="flex items-center gap-x-2">
                          <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                            Created
                          </span>
                        </div>
                      </th>

                      <th scope="col" class="px-6 py-3 text-end"></th>
                    </tr>
                  </thead>

                  <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                    <tr>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                          <label for="hs-at-with-checkboxes-1" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-1">
                            <span class="sr-only">Checkbox</span>
                          </label>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                            <div class="grow">
                              <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Christina Bersh</span>
                              <span class="block text-sm text-gray-500 dark:text-neutral-500">christina@site.com</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Director</span>
                          <span class="block text-sm text-gray-500 dark:text-neutral-500">Human resources</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                            Active
                          </span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 dark:text-neutral-500">1/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                              <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500">28 Dec, 12:12</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                          <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                          </a>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                          <label for="hs-at-with-checkboxes-2" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-2">
                            <span class="sr-only">Checkbox</span>
                          </label>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                            <div class="grow">
                              <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">David Harrison</span>
                              <span class="block text-sm text-gray-500 dark:text-neutral-500">david@site.com</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Seller</span>
                          <span class="block text-sm text-gray-500 dark:text-neutral-500">Branding products</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                            Warning
                          </span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 dark:text-neutral-500">3/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                              <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500">20 Dec, 09:27</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                          <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                          </a>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                          <label for="hs-at-with-checkboxes-3" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-3">
                            <span class="sr-only">Checkbox</span>
                          </label>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <span class="inline-flex items-center justify-center size-[38px] rounded-full bg-white border border-gray-300 dark:bg-neutral-800 dark:border-neutral-700">
                              <span class="font-medium text-sm text-gray-800 leading-none dark:text-neutral-200">A</span>
                            </span>
                            <div class="grow">
                              <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Anne Richard</span>
                              <span class="block text-sm text-gray-500 dark:text-neutral-500">anne@site.com</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Designer</span>
                          <span class="block text-sm text-gray-500 dark:text-neutral-500">IT department</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                            Active
                          </span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 dark:text-neutral-500">5/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                              <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500">18 Dec, 15:20</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                          <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                          </a>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                          <label for="hs-at-with-checkboxes-4" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-4">
                            <span class="sr-only">Checkbox</span>
                          </label>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&&auto=format&fit=facearea&facepad=3&w=320&h=320&q=80" alt="Avatar">
                            <div class="grow">
                              <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Samia Kartoon</span>
                              <span class="block text-sm text-gray-500 dark:text-neutral-500">samia@site.com</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Executive director</span>
                          <span class="block text-sm text-gray-500 dark:text-neutral-500">Marketing</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                            Active
                          </span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 dark:text-neutral-500">0/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                              <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500">18 Dec, 15:20</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                          <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                          </a>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                          <label for="hs-at-with-checkboxes-5" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-5">
                            <span class="sr-only">Checkbox</span>
                          </label>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <span class="inline-flex items-center justify-center size-[38px] rounded-full bg-white border border-gray-300 dark:bg-neutral-800 dark:border-neutral-700">
                              <span class="font-medium text-sm text-gray-800 leading-none dark:text-neutral-200">D</span>
                            </span>
                            <div class="grow">
                              <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">David Harrison</span>
                              <span class="block text-sm text-gray-500 dark:text-neutral-500">david@site.com</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Developer</span>
                          <span class="block text-sm text-gray-500 dark:text-neutral-500">Mobile app</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                            Danger
                          </span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 dark:text-neutral-500">3/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                              <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </td                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500">15 Dec, 14:41</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                          <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                          </a>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                          <label for="hs-at-with-checkboxes-6" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-6">
                            <span class="sr-only">Checkbox</span>
                          </label>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                            <div class="grow">
                              <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Brian Halligan</span>
                              <span class="block text-sm text-gray-500 dark:text-neutral-500">brian@site.com</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Accountant</span>
                          <span class="block text-sm text-gray-500 dark:text-neutral-500">Finance</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                            Active
                          </span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 dark:text-neutral-500">2/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                              <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500">11 Dec, 18:51</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                          <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                          </a>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                          <label for="hs-at-with-checkboxes-7" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-7">
                            <span class="sr-only">Checkbox</span>
                          </label>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1659482634023-2c4fda99ac0c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2.5&w=320&h=320&q=80" alt="Avatar">
                            <div class="grow">
                              <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Andy Clerk</span>
                              <span class="block text-sm text-gray-500 dark:text-neutral-500">andy@site.com</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Director</span>
                          <span class="block text-sm text-gray-500 dark:text-neutral-500">Human resources</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                            Active
                          </span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 dark:text-neutral-500">1/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                              <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500">28 Dec, 12:12</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                          <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                          </a>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                          <label for="hs-at-with-checkboxes-8" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-8">
                            <span class="sr-only">Checkbox</span>
                          </label>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1601935111741-ae98b2b230b0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                            <div class="grow">
                              <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Bart Simpson</span>
                              <span class="block text-sm text-gray-500 dark:text-neutral-500">Bart@site.com</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Seller</span>
                          <span class="block text-sm text-gray-500 dark:text-neutral-500">Branding products</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                            Warning
                          </span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 dark:text-neutral-500">3/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                              <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500">20 Dec, 09:27</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                          <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                          </a>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                          <label for="hs-at-with-checkboxes-9" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-9">
                            <span class="sr-only">Checkbox</span>
                          </label>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <span class="inline-flex items-center justify-center size-[38px] rounded-full bg-white border border-gray-300 dark:bg-neutral-800 dark:border-neutral-700">
                              <span class="font-medium text-sm text-gray-800 leading-none dark:text-neutral-200">C</span>
                            </span>
                            <div class="grow">
                              <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Camila Welters</span>
                              <span class="block text-sm text-gray-500 dark:text-neutral-500">cwelt@site.com</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Designer</span>
                          <span class="block text-sm text-gray-500 dark:text-neutral-500">IT department</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                            Active
                          </span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 dark:text-neutral-500">5/5</span                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                              <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500">18 Dec, 15:20</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                          <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                          </a>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 py-3">
                          <label for="hs-at-with-checkboxes-10" class="flex">
                            <input type="checkbox" class="shrink-0 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-10">
                            <span class="sr-only">Checkbox</span>
                          </label>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="ps-6 lg:ps-3 xl:ps-0 pe-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <img class="inline-block size-[38px] rounded-full" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                            <div class="grow">
                              <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Oliver Schevich</span>
                              <span class="block text-sm text-gray-500 dark:text-neutral-500">oliver@site.com</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="h-px w-72 whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">Seller</span>
                          <span class="block text-sm text-gray-500 dark:text-neutral-500">Branding products</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                            Warning
                          </span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <div class="flex items-center gap-x-3">
                            <span class="text-xs text-gray-500 dark:text-neutral-500">3/5</span>
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                              <div class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-3">
                          <span class="text-sm text-gray-500 dark:text-neutral-500">20 Dec, 09:27</span>
                        </div>
                      </td>
                      <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                          <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">
                            Edit
                          </a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Table -->

                <!-- Footer -->
                <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
                  <div>
                    <p class="text-sm text-gray-600 dark:text-neutral-400">
                      <span class="font-semibold text-gray-800 dark:text-neutral-200">12</span> results
                    </p>
                  </div>

                  <div>
                    <div class="inline-flex gap-x-2">
                      <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                        Prev
                      </button>

                      <button type="button" class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                        Next
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                      </button>
                    </div>
                  </div>
                </div>
                <!-- End Footer -->
              </div>
            </div>
          </div>
        </div>
        <!-- End Card -->
      </div>
      <!-- End Table Section -->

      <script src="../scripts/js/open-modals-on-init.js"></script>

      <!-- AOS -->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
      <!-- ApexCharts -->
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
      {{-- Livewire --}}
      @livewireScripts
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          // Fungsi untuk toggle dropdown
          function toggleDropdown(id) {
            const content = document.getElementById(id);
            content.classList.toggle('hidden');
          }
          // Menambahkan event listener ke semua tombol dengan class hs-accordion-toggle
          const accordionToggles = document.querySelectorAll('.hs-accordion-toggle');
          accordionToggles.forEach(toggle => {
            toggle.addEventListener('click', function() {
              const ariaControls = this.getAttribute('aria-controls');
              toggleDropdown(ariaControls);
            });
          });

          // Initialize ApexCharts
          var pieOptions = {
            chart: {
              type: 'pie',
              height: '100%'
            },
            series: [44, 55, 13],
            labels: ['Income', 'Outcome', 'Others'],
            colors: ['#1E40AF', '#06B6D4', '#D1D5DB'],
          }

          var pieChart = new ApexCharts(document.querySelector("#hs-pie-chart"), pieOptions);
          pieChart.render();

          var barOptions = {
            chart: {
              type: 'bar',
              height: '100%'
            },
            series: [{
              name: 'Income',
              data: [44, 55, 41, 37, 22, 43, 21, 54, 67, 82, 91, 66]
            }, {
              name: 'Outcome',
              data: [53, 32, 33, 52, 13, 43, 32, 44, 55, 61, 72, 85]
            }],
            colors: ['#1E40AF', '#D1D5DB'],
            xaxis: {
              categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            dataLabels: {
              enabled: false
            },
            legend: {
              show: false
            },
            plotOptions: {
              bar: {
                columnWidth: '50%'
              }
            },
            yaxis: {
              labels: {
                formatter: function (value) {
                  return value + 'k';
                }
              }
            }
          }

          var barChart = new ApexCharts(document.querySelector("#hs-multiple-bar-charts"), barOptions);
          barChart.render();
        });
      </script>

      <script src="./node_modules/preline/dist/preline.js"></script>
    </body>
  </html>
