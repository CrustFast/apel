<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

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

    {{-- Livewire --}}
    @livewireStyles

    <title>Layanan Informasi dan Pengaduan Masyarakat - APEL</title>
</head>

<body class="h-full">
    <main>
        <div class="relative isolate overflow-hidden bg-white py-24 sm:py-32">
            <img src="{{ asset('img/bg bmti.png') }}" alt=""
                class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
            <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
                aria-hidden="true">
                <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
                aria-hidden="true">
                <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="flex flex-col items-center justify-center mx-auto max-w-7xl px-6 lg:px-8">
                <div class="flex flex-col items-center justify-center mx-auto max-w-2xl lg:mx-0">
                    <img src="{{ asset('img/logo-bmti.png') }}" alt="logo bmti" class="h-28 w-auto">
                    <h2 class="text-4xl font-bold text-white sm:text-5xl tracking-wider mt-5">APEL</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300 text-center">Anim aute id magna aliqua ad ad non
                        deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat
                        fugiat aliqua.</p>
                </div>
            </div>
        </div>
    </main>

    <section>
        <div class="flex justify-center mt-20">
            <div class="max-w-7xl px-6 lg:px-6">
                <div class="grid max-w-2xl grid-cols-1 gap-x-52 gap-y-16 sm:gap-y-20 lg:max-w-none lg:grid-cols-2">
                    <div
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <img class="h-8 w-auto sm:h-10" src="{{ asset('img/logo-bmti.png') }}" alt="Logo BMTI">
                        <a href="#">
                            <h5 class="mb-2 mt-3 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Layanan Pengaduan Internal</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Butuh Bantuan atau Ingin Memberikan Masukan? Kami Siap Mendengarkan!</p>
                        <a href="{{ route('internal.view') }}" class="inline-flex font-medium items-center text-blue-600 hover:underline">
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
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <img class="h-8 w-auto sm:h-10" src="{{ asset('img/logo-bmti.png') }}" alt="Logo BMTI">
                        <a href="#">
                            <h5 class="mb-2 mt-3 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Layanan Pengaduan Eksternal</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Butuh Bantuan untuk Melaporkan Gratifikasi? Kami Siap Membantu!</p>
                        <a href="#" class="inline-flex font-medium items-center text-blue-600 hover:underline">
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
    </section>

    <footer>
        <section class="bg-white">
            <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
                <nav class="flex flex-wrap justify-center -mx-5 -my-2">
                    <div class="px-5 py-2">
                        <a href="#" class="text-sm font-semibold leading-6 text-gray-500 hover:text-blue-bmti">
                            Privacy
                        </a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-sm font-semibold leading-6 text-gray-500 hover:text-blue-bmti">
                            Blog
                        </a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-sm font-semibold leading-6 text-gray-500 hover:text-blue-bmti">
                            Tentang Kami
                        </a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-sm font-semibold leading-6 text-gray-500 hover:text-blue-bmti">
                            Ketentuan Layanan
                        </a>
                    </div>
                    <div class="px-5 py-2">
                        <a href="#" class="text-sm font-semibold leading-6 text-gray-500 hover:text-blue-bmti">
                            Hubungi Kami
                        </a>
                    </div>
                </nav>
                <div class="flex justify-center mt-8 space-x-6">
                    <a href="#" class="text-gray-400 hover:text-blue-bmti">
                        <span class="sr-only">Facebook</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-bmti">
                        <span class="sr-only">Instagram</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-bmti">
                        <span class="sr-only">Twitter</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                            </path>
                        </svg>
                    </a>
                </div>
                <p class="mt-8 text-base leading-6 text-center text-gray-400">
                    © 2024 BBPPMPV BMTI, Inc. All rights reserved.
                </p>
            </div>
        </section>
    </footer>

    {{-- Livewire --}}
    @livewireScripts

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    {{-- Flowbite JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</body>

</html>
