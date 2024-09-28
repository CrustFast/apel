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

    {{-- Filepond --}}
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />

    <!-- FilePond Image Preview Plugin CSS -->
    <link
    href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
    rel="stylesheet"/>

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    {{-- Livewire --}}
    @livewireStyles

    <title>Success Page!</title>

    <style>
        /* lottie */
        #loading-animation {
            position: fixed;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: white;
            z-index: 9999;
            display: none; 
        }
    </style>
</head>

<body class="bg-[#2FCD71]">
  <main class="main-content" id="main-content">
    <div class="relative isolate overflow-hidden py-24 sm:py-32">
      <div class="flex flex-col items-center justify-center mx-auto max-w-7xl px-8 lg:px-8">
        <div class="flex flex-col items-center justify-center mx-auto max-w-2xl lg:mx-0">

          <!-- Lottie Animation -->
          <div id="lottie-logo" class="h-44 sm:h-28 md:h-28 lg:h-44 xl:h-44 w-auto mb-5"></div>
          <h2 class="text-xl font-bold text-white sm:text-4xl tracking-wider mt-7 sm:mt-7 text-center">Terima Kasih, Laporan Anda Telah Kami Terima.</h2>
          <p class="mt-1 text-lg leading-8 text-white text-center">Silakan cek WhatsApp Anda untuk informasi status laporan.</p>
          <a href="{{ route('home.view') }}" class="mt-2 pr-6 inline-flex items-center rounded-3xl border border-white px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-white hover:text-[#2FCD71] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900 transition-colors duration-300">
            <svg class="mx-2 h-6 w-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-left"><path d="m11 17-5-5 5-5"/><path d="m18 17-5-5 5-5"/></svg>
            Back
          </a>
        </div>
      </div>
    </div>
  </main>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    {{-- Flowbite JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.4.1/flowbite.min.js"></script>

    {{-- Datepicker --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

    {{-- Filepond --}}
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

    <!-- FilePond Image Preview Plugin JS -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>

    {{-- Lottie --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.14/lottie.min.js"></script>

    {{-- Sweet Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Inisialisasi animasi Lottie untuk logo
        lottie.loadAnimation({
            container: document.getElementById('lottie-logo'), // Ganti dengan ID container animasi
            renderer: 'svg', // Renderer menggunakan SVG
            loop: false, // Set loop animasi menjadi true
            autoplay: true, // Set autoplay menjadi true
            path: '{{ asset('storage/success_animation.json') }}' // Path animasi JSON
        });

        // Inisialisasi animasi Lottie untuk loading screen
        var animation = lottie.loadAnimation({
            container: document.getElementById('lottie'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: '{{ asset('img/loading.json') }}' 
        });

        // Tampilkan animasi saat halaman mulai dimuat
        window.addEventListener("beforeunload", function() {
            document.getElementById('loading-animation').style.display = 'flex';
        });

        // Sembunyikan animasi setelah halaman selesai dimuat
        window.addEventListener("load", function() {
            document.getElementById('loading-animation').style.display = 'none';
        });
    </script>

    {{-- Livewire --}}
    @livewireScripts
</body>

</html>
