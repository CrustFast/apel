<nav class="sticky top-0 flex items-center justify-between p-4 lg:px-8 bg-white z-50" aria-label="Global" x-data="{ isOpen: false, solutionsOpen: false }">
  <div class="flex lg:flex-1">
    <a href="{{ route('home.view') }}" class="-m-1.5 p-1 flex items-center">
      <span class="sr-only">BBPPMPV BMTI</span>
      <img class="h-8 w-auto sm:h-10" src="{{ asset('img/logo-bmti.png') }}" alt="Logo BMTI">
      <h1 class="flex items-center ml-2 font-bold text-lg sm:text-xl">SILAGRA</h1>   
    </a>
  </div>
  <div class="flex lg:hidden">
    <button type="button" @click="isOpen = !isOpen" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
      <span class="sr-only">Open main menu</span>
      <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>
    </button>
  </div>
  <div class="hidden lg:flex lg:gap-x-12">
    <a href="#" class="relative group text-sm font-semibold leading-6 text-gray-900 hover:text-[#9ca3af] transition-all duration-300">
      Beranda
      <span class="block h-1 w-0 bg-blue-bmti rounded-full mt-1 mx-auto transition-all duration-300 group-hover:w-10"></span>
    </a>
    <a href="https://gol.kpk.go.id/materi-sosialisasi/" target="_blank" class="relative group text-sm font-semibold leading-6 text-gray-900 hover:text-[#9ca3af] transition-all duration-300">
      Apa itu Gratifikasi?
      <span class="block h-1 w-0 bg-blue-bmti rounded-full mt-1 mx-auto transition-all duration-300 group-hover:w-10"></span>
    </a>
    <a href="#form" class="relative group text-sm font-semibold leading-6 text-gray-900 hover:text-[#9ca3af] transition-all duration-300">
      Formulir Aduan
      <span class="block h-1 w-0 bg-blue-bmti rounded-full mt-1 mx-auto transition-all duration-300 group-hover:w-10"></span>
    </a>
    <div class="relative" x-data="{ open: false }">
      <button @mouseenter="open = true" @mouseleave="open = false" type="button" class="inline-flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900" aria-expanded="false">
        <span>Pengendalian Gratifikasi</span>
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
                <img class="h-6 w-6 group-hover:text-indigo-600" src="{{ asset('img/Logo E-Learning KPK.png') }}" alt="Logo">
              </div>
              <div>
                <a href="https://elearning.kpk.go.id/moodle/" target="_blank" class="font-semibold text-gray-900">
                  E-learning Pengendalian Gratifikasi
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Upaya KPK untuk memberikan edukasi dan sertifikasi tentang pengendalian gratifikasi.</p>
              </div>
            </div>
            <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
              <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <img class="h-6 w-6 group-hover:text-indigo-600" src="{{ asset('img/logo-jaga-new.png') }}" alt="Logo">
              </div>
              <div>
                <a href="https://jaga.id/jendela-pencegahan/spi" target="_blank" class="font-semibold text-gray-900">
                  Informasi Skor SPI (Kementerian/Lembaga/Pemerintah Daerah)
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Survei Penilaian Integritas</p>
              </div>
            </div>
            <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
              <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <img class="h-6 w-6 group-hover:text-indigo-600" src="{{ asset('img/logo-jaga-new.png') }}" alt="Logo">
              </div>
              <div>
                <a href="https://jaga.id/kuisprofit" target="_blank" class="font-semibold text-gray-900">
                  Informasi Panduan Cegah Korupsi (PanCEK)
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Informasi Panduan Cegah Korupsi</p>
              </div>
            </div>
            <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
              <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <img class="h-6 w-6 group-hover:text-indigo-600" src="{{ asset('img/logo_gol.png') }}" alt="Logo">
              </div>
              <div>
                <a href="https://gol.kpk.go.id/dokumen/" target="_blank" class="font-semibold text-gray-900">
                  Dokumen Publik
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Dokumen Publik</p>
              </div>
            </div>
            <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
              <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                <img class="h-6 w-6 group-hover:text-indigo-600" src="{{ asset('img/logo_gol.png') }}" alt="Logo">
              </div>
              <div>
                <a href="https://gol.kpk.go.id/faq/" target="_blank" class="font-semibold text-gray-900">
                  Frequently Asked Question Seputar Gratifikasi dan GOL 
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-600">Daftar pertanyaan yang sering diajukan beserta jawabannya</p>
              </div>
            </div>
          </div>
          <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
            <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 font-semibold text-gray-900 hover:bg-gray-100">
              <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm6.39-2.908a.75.75 0 01.766.027l3.5 2.25a.75.75 0 010 1.262l-3.5 2.25A.75.75 0 018 12.25v-4.5a.75.75 0 01.39-.658z" clip-rule="evenodd" />
              </svg>
              Watch demo
            </a>
            <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 font-semibold text-gray-900 hover:bg-gray-100">
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
    <a href="#" class="relative group text-sm font-semibold leading-6 text-gray-900 hover:text-[#9ca3af] transition-all duration-300">
      Log in <span aria-hidden="true">&rarr;</span>
      <span class="absolute left-0 bottom-0 h-0.5 w-0 bg-[#1f2937] rounded-full mt-1 transition-all duration-300 group-hover:w-10"></span>
    </a>
  </div>
</nav>

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
</style>
