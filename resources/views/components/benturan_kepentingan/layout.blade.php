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

    <title>Layanan Pengaduan Benturan Kepentingan - KONFES</title>

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
            /* rgba(255, 255, 255, 0.8) */
            z-index: 9999;
            display: none; 
        }
    </style>
</head>

<body class="h-full">
    <!-- Div untuk animasi Lottie -->
    <div id="loading-animation">
        <div id="lottie"></div>
    </div>
    <div class="min-h-full">
        <x-benturan_kepentingan.navbar></x-benturan_kepentingan.navbar>
        <x-benturan_kepentingan.header></x-benturan_kepentingan.header>
        @livewire('eksternal.form-benturan-kepentingan')
        @include('components.eksternal.footer')
    </div>

    {{-- Livewire --}}
    @livewireScripts

    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}

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

    {{-- Preline --}}
    {{-- <script src="./node_modules/preline/dist/preline.js"></script> --}}

    {{-- Lottie --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.14/lottie.min.js"></script>

    <script>
        // Inisialisasi animasi Lottie 
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
</body>

</html>
