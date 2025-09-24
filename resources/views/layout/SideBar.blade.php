<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layout.tailwind')
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body>

<!-- Sidebar Overlay for Mobile -->
<div id="sidebar-overlay" class="fixed inset-0 z-30 bg-black bg-opacity-50 sm:hidden hidden transition-opacity duration-300"></div>

<!-- Sidebar -->
<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-56 h-screen transition-transform duration-300 -translate-x-full sm:translate-x-0 bg-white border-r border-gray-200 shadow-lg"
    aria-label="Sidebar">

    <div class="h-full p-4 overflow-y-auto">
        <!-- Logo -->
        <div class="flex items-center ps-2.5 mb-5 p-3 mt-16 sm:mt-0">
            <img src="{{ asset('image/PTMBLOGO.png') }}" class="h-12 sm:h-16" alt="PTMB Logo">
            <span class="self-center text-lg sm:text-xl font-bold whitespace-nowrap">PTMB</span>
        </div>

        <span class="text-[#4B4B5A] text-sm font-bold uppercase tracking-wide">Menu</span>

        <!-- Menu Items -->
        <ul class="mt-4 space-y-2 font-medium">

            @php
                $berandaActive = request()->is('dashboard');
            @endphp
            <li>
                <a href="/dashboard" class="flex items-center p-2 rounded-lg group transition-colors duration-200 {{ $berandaActive ? 'bg-blue-900 text-white' : 'text-[#4B4B5A] hover:text-white hover:bg-blue-900 ' }}">
                    <svg class="w-5 h-5 {{ $berandaActive ? 'text-white' : '' }}" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 42 42">
                        <path d="M2.68 15.726c-.1.039-.16.09-.18.149l.18-.149zm-.18.149v20.627c0 2.509.49 2.998 3 2.998h7c2.51 0 3-.461 3-3v-8h9v8.031c0 2.51.51 2.979 3 2.969c.04.031 7 0 7 0c2.529 0 3-.526 3-2.997V16.495c0-.08-.09-.15-.27-.23L20 1.5L2.68 15.726l-.18.149z"/>
                    </svg>
                    <span class="ms-3">Beranda</span>
                </a>
            </li>

            @php
                $isKaryawanActive = request()->is('karyawan') || request()->is('daftarkaryawan');
            @endphp




            <li x-data="{open: {{$isKaryawanActive ? 'true' : 'false'}} }">
                    <button @click="open = !open" type="button" class="flex items-center w-full p-2 text-base rounded-lg cursor-pointer transition-colors duration-200
                        {{ $isKaryawanActive ? 'text-white bg-blue-900' : 'text-[#4B4B5A] hover:text-white hover:bg-blue-900' }}">
                        {{-- SVG --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 w-5 h-5 {{ $isKaryawanActive ? 'text-white' : '' }} transition duration-75"
                            viewBox="0 0 512 512" fill="currentColor" aria-hidden="true">
                            <path d="M336 256c-20.56 0-40.44-9.18-56-25.84c-15.13-16.25-24.37-37.92-26-61c-1.74-24.62 5.77-47.26 21.14-63.76S312 80 336 80c23.83 0 45.38 9.06 60.7 25.52c15.47 16.62 23 39.22 21.26 63.63c-1.67 23.11-10.9 44.77-26 61C376.44 246.82 356.57 256 336 256Zm66-88Zm65.83 264H204.18a27.71 27.71 0 0 1-22-10.67a30.22 30.22 0 0 1-5.26-25.79c8.42-33.81 29.28-61.85 60.32-81.08C264.79 297.4 299.86 288 336 288c36.85 0 71 9 98.71 26.05c31.11 19.13 52 47.33 60.38 81.55a30.27 30.27 0 0 1-5.32 25.78A27.68 27.68 0 0 1 467.83 432ZM147 260c-35.19 0-66.13-32.72-69-72.93c-1.42-20.6 5-39.65 18-53.62c12.86-13.83 31-21.45 51-21.45s38 7.66 50.93 21.57c13.1 14.08 19.5 33.09 18 53.52c-2.87 40.2-33.8 72.91-68.93 72.91Zm65.66 31.45c-17.59-8.6-40.42-12.9-65.65-12.9c-29.46 0-58.07 7.68-80.57 21.62c-25.51 15.83-42.67 38.88-49.6 66.71a27.39 27.39 0 0 0 4.79 23.36A25.32 25.32 0 0 0 41.72 400h111a8 8 0 0 0 7.87-6.57c.11-.63.25-1.26.41-1.88c8.48-34.06 28.35-62.84 57.71-83.82a8 8 0 0 0-.63-13.39c-1.57-.92-3.37-1.89-5.42-2.89Z"/>
                        </svg>
                        {{-- NAME --}}
                        <span class="flex-1 ms-3 text-left whitespace-nowrap font-semibold">Karyawan</span>
                        {{-- ARROW SVG --}}
                        <svg
                            class="w-3 h-3 ms-auto transition-transform duration-300
                                {{ $isKaryawanActive ? 'rotate-180' : '' }}"
                            :class="open ? 'rotate-180' : 'rotate-0'"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <div
                        x-show="open"
                        style="{{ $isKaryawanActive ?  'display: block;' : 'display: none;' }}"
                        x-transition:enter="transition-all duration-300 ease-out"
                        x-transition:enter-start="opacity-30 max-h-0 -translate-y-4"
                        x-transition:enter-end="opacity-100 max-h-40 translate-y-0"
                        x-transition:leave="transition-all duration-300 ease-in"
                        x-transition:leave-start="opacity-100 max-h-40 translate-y-0"
                        x-transition:leave-end="opacity-0 max-h-0 -translate-y-4"
                        class="overflow-hidden mt-1"
                    >
                    <ul class="py-2 space-y-2 rounded-lg mt-1">
                        <li>
                            <a href="/karyawan"
                            class="flex items-center w-full p-2 rounded-lg pl-11 font-semibold transition-colors duration-200
                            {{ request()->is('karyawan') ? 'text-blue-900' : 'text-[#4B4B5A] hover:text-blue-900' }}">
                                Registrasi Karyawan
                            </a>
                        </li>
                        <li>
                            <a href="/daftarkaryawan"
                            class="flex items-center w-full p-2 rounded-lg pl-11 font-semibold transition-colors duration-200
                            {{ request()->is('daftarkaryawan') ? 'text-blue-900' : 'text-[#4B4B5A] hover:text-blue-900' }}">
                                Daftar Karyawan
                            </a>
                        </li>
                    </ul>
                    </div>
            </li>

            {{-- Pengaduan --}}
            @php
                $isPengaduanActive = request()->is('pengaduan') || request()->is('');
            @endphp

            <li x-data="{ open: {{ $isPengaduanActive ? 'true' : 'false' }} }" class="relative">
                    <button @click="open = !open" class="flex items-center w-full p-2 text-base rounded-lg cursor-pointer transition-colors duration-200
                        {{ $isPengaduanActive ? 'text-white bg-blue-900' : 'text-[#4B4B5A] hover:text-white hover:bg-blue-900' }}">
                        {{-- SVG --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 w-5 h-5 {{ $isPengaduanActive ? 'text-white' : '' }} transition duration-75"
                            viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M1 2h19v14H5.82L1 19.443zm22.5 2.5v18.443L18.68 19.5H7.5v-2h11.82l2.18 1.557V4.5z"/>
                        </svg>
                        {{-- NAME --}}
                        <span class="flex-1 ms-3 text-left whitespace-nowrap font-semibold">Pengaduan</span>
                        {{-- ARROW SVG --}}
                        <svg
                            class="w-3 h-3 ms-auto transition-transform duration-300
                                {{ $isPengaduanActive ? 'rotate-180' : '' }}"
                            :class="open ? 'rotate-180' : 'rotate-0'"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>

                    </button>
                <div
                        x-show="open"
                        style="{{ $isPengaduanActive ?  'display: block;' : 'display: none;' }}"
                        x-transition:enter="transition-all duration-300 ease-out"
                        x-transition:enter-start="opacity-30 max-h-0 -translate-y-6"
                        x-transition:enter-end="opacity-100 max-h-40 translate-y-0"
                        x-transition:leave="transition-all duration-300 ease-in"
                        x-transition:leave-start="opacity-100 max-h-40 translate-y-0"
                        x-transition:leave-end="opacity-0 max-h-0 -translate-y-6"
                        class="overflow-hidden mt-1"
                    >
                    <ul class="py-2 space-y-2 rounded-lg mt-1">
                        <li>
                            <a href="/pengaduan"
                            class="flex items-center w-full p-2 rounded-lg pl-11 font-semibold transition-colors duration-200
                            {{ request()->is('pengaduan') ? 'text-blue-900' : 'text-[#4B4B5A] hover:text-blue-900' }}">
                                Daftar Pengaduan
                            </a>
                        </li>
                        {{-- <li>
                            <a href="/ (ROUTE)"
                            class="flex items-center w-full p-2 rounded-lg pl-11 font-semibold
                            {{ request()->is('(masukan nama route/path)') ? 'text-blue-900' : 'text-[#4B4B5A] hover:text-blue-900' }}">
                                (NAMA KOLOM KE-2)
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </li>

            {{-- Sambungan --}}

            @php
                $isSambunganActive = request()->is('sambungan') || request()->is('');
            @endphp

            <li x-data="{ open: {{ $isSambunganActive ? 'true' : 'false' }} }" class="relative">
                    <button @click="open = !open" class="flex items-center w-full p-2 text-base rounded-lg cursor-pointer transition-colors duration-200
                        {{ $isSambunganActive ? 'text-white bg-blue-900' : 'text-[#4B4B5A] hover:text-white hover:bg-blue-900' }}">
                        {{-- SVG --}}
                        <svg xmlns="http://www.w3.org/2000/svg" class="shrink-0 w-5 h-5 {{ $isSambunganActive ? 'text-white' : '' }} transition duration-75"
                            viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <g fill="none" fill-rule="evenodd">
                                <path d="M24 0v24H0V0h24ZM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018Zm.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01l-.184-.092Z"/>
                                <path fill="currentColor" d="M12 4a2 2 0 0 0-2 2h4a2 2 0 0 0-2-2ZM9.354 3c.705-.622 1.632-1 2.646-1s1.94.378 2.646 1H18a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h3.354ZM8.126 5H6v15h12V5h-2.126c.082.32.126.655.126 1v1a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V6c0-.345.044-.68.126-1ZM8 11a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 4a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Z"/>
                            </g>
                        </svg>
                        {{-- NAME --}}
                        <span class="flex-1 ms-3 text-left whitespace-nowrap font-semibold">Sambungan</span>
                        {{-- ARROW SVG --}}
                        <svg
                            class="w-3 h-3 ms-auto transition-transform duration-300
                                {{ $isSambunganActive ? 'rotate-180' : '' }}"
                            :class="open ? 'rotate-180' : 'rotate-0'"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                <div x-show="open"
                    style="{{ $isSambunganActive ?  'display: block;' : 'display: none;' }}"
                    x-transition:enter="transition-all duration-300 ease-out"
                    x-transition:enter-start="opacity-30 max-h-0 -translate-y-4"
                    x-transition:enter-end="opacity-100 max-h-40 translate-y-0"
                    x-transition:leave="transition-all duration-300 ease-in"
                    x-transition:leave-start="opacity-100 max-h-40 translate-y-0"
                    x-transition:leave-end="opacity-0 max-h-0 -translate-y-4"
                    class="overflow-hidden mt-1"
                >
                    <ul class="py-2 space-y-2 rounded-lg mt-1">
                        <li>
                            <a href="/sambungan"
                            class="flex items-center w-full p-2 rounded-lg pl-11 font-semibold transition-colors duration-200
                            {{ request()->is('sambungan') ? 'text-blue-900' : 'text-[#4B4B5A] hover:text-blue-900' }}">
                                Daftar Permohonan Sambungan
                            </a>
                        </li>
                        {{-- <li>
                            <a href="/ (ROUTE)"
                            class="flex items-center w-full p-2 rounded-lg pl-11 font-semibold
                            {{ request()->is('(masukan nama route/path)') ? 'text-blue-900' : 'text-[#4B4B5A] hover:text-blue-900' }}">
                                (NAMA KOLOM KE-2)
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </li>

            {{-- Pelanggan --}}

            @php
                $isPenggunaActive = request()->is('pengguna') || request()->is('');
            @endphp

            <li x-data="{ open: {{ $isPenggunaActive ? 'true' : 'false' }} }" class="relative">
                <button @click="open = !open" type="button"
                    class="flex items-center w-full p-2 text-base rounded-lg cursor-pointer transition-colors duration-200
                    {{ $isPenggunaActive ? 'text-white bg-blue-900' : 'text-[#4B4B5A] hover:text-white hover:bg-blue-900' }}">
                    {{-- SVG --}}
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="shrink-0 w-5 h-5 {{ $isPenggunaActive ? 'text-white' : '' }} transition duration-75">
                    <circle cx="12" cy="6" r="4" fill="currentColor"/>
                    <path d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z" fill="currentColor"/>
                    </svg>
                    {{-- NAME --}}
                    <span class="flex-1 ms-3 text-left whitespace-nowrap font-semibold">Pengguna</span>
                    {{-- ARROW SVG --}}
                    <svg
                            class="w-3 h-3 ms-auto transition-transform duration-300
                                {{ $isPenggunaActive ? 'rotate-180' : '' }}"
                            :class="open ? 'rotate-180' : 'rotate-0'"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <div x-show="open"
                    style="{{ $isPenggunaActive ?  'display: block;' : 'display: none;' }}"
                    x-transition:enter="transition-all duration-300 ease-out"
                    x-transition:enter-start="opacity-30 max-h-0 -translate-y-6"
                    x-transition:enter-end="opacity-100 max-h-40 translate-y-0"
                    x-transition:leave="transition-all duration-300 ease-in"
                    x-transition:leave-start="opacity-100 max-h-40 translate-y-0"
                    x-transition:leave-end="opacity-0 max-h-0 -translate-y-6"
                    class="overflow-hidden mt-1"
                >
                    <ul class="py-2 space-y-2">
                        <li>
                            <a href="/pengguna"
                            class="flex items-center w-full p-2 rounded-lg pl-11 font-semibold transition-colors duration-200
                            {{ request()->is('pengguna') ? 'text-blue-900' : 'text-[#4B4B5A] hover:text-blue-900' }}">
                                Daftar Pengguna
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


        </ul>
    </div>
</aside>

<!-- JavaScript for mobile sidebar toggle -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('logo-sidebar');
        const overlay = document.getElementById('sidebar-overlay');

        // Create global function for toggle
        window.toggleSidebar = function() {
            if (sidebar && overlay) {
                const isHidden = sidebar.classList.contains('-translate-x-full');

                if (isHidden) {
                    // Show sidebar
                    sidebar.classList.remove('-translate-x-full');
                    overlay.classList.remove('hidden');
                    document.body.style.overflow = 'hidden'; // Prevent scrolling
                } else {
                    // Hide sidebar
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('hidden');
                    document.body.style.overflow = 'auto'; // Allow scrolling
                }
            }
        };

        // Close sidebar when clicking overlay
        if (overlay) {
            overlay.addEventListener('click', function() {
                window.toggleSidebar();
            });
        }

        // Close sidebar with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && !sidebar.classList.contains('-translate-x-full')) {
                window.toggleSidebar();
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 640) { // sm breakpoint
                if (sidebar && overlay) {
                    sidebar.classList.remove('-translate-x-full');
                    overlay.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }
            } else {
                if (sidebar && !sidebar.classList.contains('-translate-x-full')) {
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }
            }
        });
    });

</script>


</body>
</html>
