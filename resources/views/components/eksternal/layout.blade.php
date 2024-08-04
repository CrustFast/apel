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

    <title>Layanan Pengaduan Eksternal - FAST SOLUTION</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <x-eksternal.navbar></x-eksternal.navbar>
        <x-eksternal.header></x-eksternal.header>
        @livewire('form')
        <x-eksternal.footer></x-eksternal.footer>
    </div>

    {{-- Livewire --}}
    @livewireScripts

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    {{-- Flowbite JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

    {{-- Filepond --}}
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

    <!-- FilePond Image Preview Plugin JS -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
</body>

</html>
