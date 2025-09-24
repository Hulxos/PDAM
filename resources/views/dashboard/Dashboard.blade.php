@include('layout.allinone')

{{-- CODE --}}
<div class="ml-0 sm:ml-56 mt-24 p-4 sm:p-6 lg:p-8 transition-all duration-300">
    {{-- Card Total --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-8">
        <!-- Kotak 1 -->
        <div class="bg-orange-300 text-white rounded-xl shadow-md p-4 grid grid-cols-[30%_70%] items-start h-fit">
            <!-- Icon -->
            <div class="inline-flex items-center justify-center bg-white/30 rounded-full w-12 h-12">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                    viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <g fill="none" fill-rule="evenodd">
                        <path d="M24 0v24H0V0h24ZM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036c-.01-.003-.019 0-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.016-.018Zm.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01l-.184-.092Z"/>
                        <path fill="currentColor" d="M12 4a2 2 0 0 0-2 2h4a2 2 0 0 0-2-2ZM9.354 3c.705-.622 1.632-1 2.646-1s1.94.378 2.646 1H18a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h3.354ZM8.126 5H6v15h12V5h-2.126c.082.32.126.655.126 1v1a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V6c0-.345.044-.68.126-1ZM8 11a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm0 4a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Z"/>
                    </g>
                </svg>
            </div>

            <!-- Text -->
            <div class="space-y-1">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold">15</h2>
                <p class="text-sm sm:text-base">Permohonan</p>
                <span class="text-xs sm:text-sm">5 belum diproses</span>
            </div>
        </div>

        <!-- Kotak 2 -->
        <div class="bg-red-400 text-white rounded-xl shadow-md p-4 grid grid-cols-[30%_70%] items-start h-fit">
            <!-- Icon -->
            <div class="inline-flex items-center justify-center bg-white/30 rounded-full w-12 h-12">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M1 2h19v14H5.82L1 19.443zm22.5 2.5v18.443L18.68 19.5H7.5v-2h11.82l2.18 1.557V4.5z"/>
                </svg>
            </div>

            <!-- Text -->
            <div class="space-y-1">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold">15</h2>
                <p class="text-sm sm:text-base">Pengaduan</p>
                <span class="text-xs sm:text-sm">5 belum diproses</span>
            </div>
        </div>

        <!-- Kotak 3 -->
        <div class="bg-green-500 text-white rounded-xl shadow-md p-4 grid grid-cols-[30%_70%] items-start h-fit">
            <!-- Icon -->
            <div class="inline-flex items-center justify-center bg-white/30 rounded-full w-12 h-12">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 512 512" fill="currentColor" aria-hidden="true">
                    <path d="M336 256c-20.56 0-40.44-9.18-56-25.84c-15.13-16.25-24.37-37.92-26-61c-1.74-24.62 5.77-47.26 21.14-63.76S312 80 336 80c23.83 0 45.38 9.06 60.7 25.52c15.47 16.62 23 39.22 21.26 63.63c-1.67 23.11-10.9 44.77-26 61C376.44 246.82 356.57 256 336 256Zm66-88Zm65.83 264H204.18a27.71 27.71 0 0 1-22-10.67a30.22 30.22 0 0 1-5.26-25.79c8.42-33.81 29.28-61.85 60.32-81.08C264.79 297.4 299.86 288 336 288c36.85 0 71 9 98.71 26.05c31.11 19.13 52 47.33 60.38 81.55a30.27 30.27 0 0 1-5.32 25.78A27.68 27.68 0 0 1 467.83 432ZM147 260c-35.19 0-66.13-32.72-69-72.93c-1.42-20.6 5-39.65 18-53.62c12.86-13.83 31-21.45 51-21.45s38 7.66 50.93 21.57c13.1 14.08 19.5 33.09 18 53.52c-2.87 40.2-33.8 72.91-68.93 72.91Zm65.66 31.45c-17.59-8.6-40.42-12.9-65.65-12.9c-29.46 0-58.07 7.68-80.57 21.62c-25.51 15.83-42.67 38.88-49.6 66.71a27.39 27.39 0 0 0 4.79 23.36A25.32 25.32 0 0 0 41.72 400h111a8 8 0 0 0 7.87-6.57c.11-.63.25-1.26.41-1.88c8.48-34.06 28.35-62.84 57.71-83.82a8 8 0 0 0-.63-13.39c-1.57-.92-3.37-1.89-5.42-2.89Z"/>
                </svg>

            </div>

            <!-- Text -->
            <div class="space-y-1">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold">15</h2>
                <p class="text-sm sm:text-base">Karyawan</p>
                <span class="text-xs sm:text-sm">5 belum diproses</span>
            </div>
        </div>

        <!-- Kotak 4 -->
        <div class="bg-blue-500 text-white rounded-xl shadow-md p-4 grid grid-cols-[30%_70%] items-start h-fit">
            <!-- Icon -->
            <div class="inline-flex items-center justify-center bg-white/30 rounded-full w-12 h-12">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 512 512" fill="currentColor" aria-hidden="true">
                    <path d="M336 256c-20.56 0-40.44-9.18-56-25.84c-15.13-16.25-24.37-37.92-26-61c-1.74-24.62 5.77-47.26 21.14-63.76S312 80 336 80c23.83 0 45.38 9.06 60.7 25.52c15.47 16.62 23 39.22 21.26 63.63c-1.67 23.11-10.9 44.77-26 61C376.44 246.82 356.57 256 336 256Zm66-88Zm65.83 264H204.18a27.71 27.71 0 0 1-22-10.67a30.22 30.22 0 0 1-5.26-25.79c8.42-33.81 29.28-61.85 60.32-81.08C264.79 297.4 299.86 288 336 288c36.85 0 71 9 98.71 26.05c31.11 19.13 52 47.33 60.38 81.55a30.27 30.27 0 0 1-5.32 25.78A27.68 27.68 0 0 1 467.83 432ZM147 260c-35.19 0-66.13-32.72-69-72.93c-1.42-20.6 5-39.65 18-53.62c12.86-13.83 31-21.45 51-21.45s38 7.66 50.93 21.57c13.1 14.08 19.5 33.09 18 53.52c-2.87 40.2-33.8 72.91-68.93 72.91Zm65.66 31.45c-17.59-8.6-40.42-12.9-65.65-12.9c-29.46 0-58.07 7.68-80.57 21.62c-25.51 15.83-42.67 38.88-49.6 66.71a27.39 27.39 0 0 0 4.79 23.36A25.32 25.32 0 0 0 41.72 400h111a8 8 0 0 0 7.87-6.57c.11-.63.25-1.26.41-1.88c8.48-34.06 28.35-62.84 57.71-83.82a8 8 0 0 0-.63-13.39c-1.57-.92-3.37-1.89-5.42-2.89Z"/>
                </svg>
            </div>

            <!-- Text -->
            <div class="space-y-1">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold">15</h2>
                <p class="text-sm sm:text-base">Sambungan</p>
                <span class="text-xs sm:text-sm">5 belum diproses</span>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('layout.copyright')
</div>

</body>
</html>
