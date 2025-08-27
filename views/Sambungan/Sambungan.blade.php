@include('script.background')
@include('script.sidebar')
@include('script.navbar')

<div class="ml-0 sm:ml-56 mt-20 p-4 sm:p-6 lg:p-8 transition-all duration-300">

    <div class="p-2 sm:p-4">
        <p class="text-[#4B4B5A] font-semibold text-xl sm:text-2xl">Edit Karyawan</p>

        <!-- Back Button -->
        <button class="inline-flex items-center justify-center bg-green-400 rounded-full w-8 h-8 sm:w-10 sm:h-10 mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-6 sm:w-6"
                fill="none" viewBox="0 0 24 24"
                stroke="white" stroke-width="4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
        </button>
    </div>
    {{-- Form Pelanggan --}}
    <div class="max-w-7xl mx-auto">
        <!-- Main Form Layout -->
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 lg:gap-8">

            <!-- Left Section - Customer Info & Documents -->
            <div class="xl:col-span-2">

                <!-- Informasi Pelanggan & Sambungan -->
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-6 ml-10 lg:p-8">
                    <h2 class="text-xl font-semibold text-[#3B82F6] mb-6">Informasi Pelanggan</h2>

                    <!-- Form Fields -->
                    <div class="space-y-4 mb-8">
                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span class="text-gray-700 font-medium">Nama</span>
                            <span class="text-gray-900 font-medium">John Doe</span>
                        </div>

                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span class="text-gray-700 font-medium">Nomor Telepon</span>
                            <span class="text-gray-900 font-medium">08123456789</span>
                        </div>

                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span class="text-gray-700 font-medium">Kartu Tanda Penduduk</span>
                            <a href="#" class="text-[#06B6D4] font-medium hover:underline">ktp.pdf</a>
                        </div>

                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span class="text-gray-700 font-medium">Kartu Keluarga</span>
                            <a href="#" class="text-[#06B6D4] font-medium hover:underline">kk.pdf</a>
                        </div>
                    </div>

                    <!-- Informasi Sambungan -->
                    <h2 class="text-xl font-semibold text-[#3B82F6] mb-6">Informasi Sambungan</h2>

                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span class="text-gray-700 font-medium">Rekening Air Tetangga</span>
                            <a href="#" class="text-[#06B6D4] font-medium hover:underline">rekening.pdf</a>
                        </div>

                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span class="text-gray-700 font-medium">Surat IMB</span>
                            <a href="#" class="text-[#06B6D4] font-medium hover:underline">surat.pdf</a>
                        </div>

                        <div class="flex justify-between items-center py-2 border-b border-gray-100">
                            <span class="text-gray-700 font-medium">Denah Lokasi Rumah</span>
                            <a href="#" class="text-[#06B6D4] font-medium hover:underline">denah.pdf</a>
                        </div>

                        <div class="flex justify-between items-center py-2">
                            <span class="text-gray-700 font-medium">Foto Rumah</span>
                            <a href="#" class="text-[#06B6D4] font-medium hover:underline">foto.pdf</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section - Admin Notes -->
            <div class="xl:col-span-1">
                <div class="bg-white rounded-xl shadow-lg border border-gray-200 p-6 lg:p-8">
                    <h2 class="text-xl font-semibold text-[#3B82F6] mb-6">Catatan Admin</h2>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-3">Catatan Tambahan</label>
                        <textarea
                            class="w-full h-48 p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 resize-none bg-gray-50"
                            placeholder=""></textarea>
                    </div>

                    <button class="w-full bg-[#10B981] hover:bg-[#059669] text-white font-semibold py-3 px-6 rounded-lg transition-all duration-200 shadow-md hover:shadow-lg">
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="mt-8">
        <p class="text-[#4B4B5A] font-bold text-sm">Copyright © 2025 PTMB. All Rights Reserved</p>
    </div>
</div>

<style>
/* Responsive adjustments */
@media (max-width: 1279px) {
    .xl\:col-span-2 {
        grid-column: span 1;
    }
    .xl\:col-span-1 {
        grid-column: span 1;
    }
}

@media (max-width: 768px) {
    .grid-cols-1 {
        gap: 1rem;
    }
}
</style>

</body>
</html>
