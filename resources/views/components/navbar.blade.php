<nav class="sticky top-0 flex items-center justify-between p-4 lg:px-8 bg-white z-50" aria-label="Global">
  <div class="flex lg:flex-1">
    <a href="#" class="-m-1.5 p-1 flex items-center">
      <span class="sr-only">BBPPMPV BMTI</span>
      <img class="h-8 w-auto sm:h-10" src="{{ asset('img/logo-bmti.png') }}" alt="Logo BMTI">
    </a>
    <h1 class="flex items-center ml-2 font-bold text-lg sm:text-xl">APEL</h1>    
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
    <a href="#form" class="relative group text-sm font-semibold leading-6 text-gray-900 hover:text-[#9ca3af] transition-all duration-300">
      Formulir Aduan
      <span class="block h-1 w-0 bg-blue-bmti rounded-full mt-1 mx-auto transition-all duration-300 group-hover:w-10"></span>
    </a>
    <a href="https://bbppmpvbmti.kemdikbud.go.id/main/" target="_blank" class="relative group text-sm font-semibold leading-6 text-gray-900 hover:text-[#9ca3af] transition-all duration-300">
      Tentang Kami
      <span class="block h-1 w-0 bg-blue-bmti rounded-full mt-1 mx-auto transition-all duration-300 group-hover:w-10"></span>
    </a>
  </div>
  <div class="hidden lg:flex lg:flex-1 lg:justify-end">
    <a href="#" class="relative group text-sm font-semibold leading-6 text-gray-900 hover:text-[#9ca3af] transition-all duration-300">
      Log in <span aria-hidden="true">&rarr;</span>
      <span class="absolute left-0 bottom-0 h-0.5 w-0 bg-[#1f2937] rounded-full mt-1 transition-all duration-300 group-hover:w-10"></span>
    </a>
  </div>
</nav>
<!-- Mobile menu, show/hide based on menu open state. -->
{{-- <div class="lg:hidden" role="dialog" aria-modal="true">
  <!-- Background backdrop, show/hide based on slide-over state. -->
  <div class="fixed inset-0 z-50"></div>
  <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
    <div class="flex items-center justify-between">
      <a href="#" class="-m-1.5 p-1.5 flex items-center">
        <span class="sr-only">BBPPMPV BMTI</span>
        <img class="h-9 w-auto" src="{{ asset('img/logo-bmti.png') }}" alt="Logo BMTI">
        <h1 class="ml-2 font-bold text-xl">APEL</h1>
      </a>
      <button type="button" @click="isOpen = !isOpen" class="-m-2.5 rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Close menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
    <div class="mt-6 flow-root">
      <div class="-my-6 divide-y divide-gray-500/10">
        <div class="space-y-2 py-6">
          <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Beranda</a>
          <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Formulir</a>
          <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Tentang Kami</a>
        </div>
        <div class="py-6">
          <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
        </div>
      </div>
    </div>
  </div>
</div> --}}