<nav class="sticky top-0 flex items-center justify-between p-4 lg:px-8 bg-white z-50" aria-label="Global" x-data="{ isOpen: false, solutionsOpen: false }">
  <div class="flex lg:flex-1">
    <a href="{{ route('home.view') }}" class="-m-1.5 p-1 flex items-center">
      <span class="sr-only">BBPPMPV BMTI</span>
      <img class="h-8 w-auto sm:h-10" src="{{ asset('img/logo-bmti.png') }}" alt="Logo BMTI">
      <h1 class="flex items-center ml-2 font-bold text-lg sm:text-xl">KONFES</h1>   
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
    <a href="{{ route('home.view') }}" class="relative group text-sm font-semibold leading-6 text-gray-900 hover:text-[#9ca3af] transition-all duration-300">
      Home <span aria-hidden="true">&rarr;</span>
      <span class="absolute left-0 bottom-0 h-0.5 w-0 bg-[#1f2937] rounded-full mt-1 transition-all duration-300 group-hover:w-10"></span>
    </a>
  </div>
</nav>
