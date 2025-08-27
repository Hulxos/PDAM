@include('script.background')
@include('script.sidebar')
@include('script.navbar')

<!-- Main Content with Responsive Layout -->
<div class="ml-0 sm:ml-56 mt-20 p-2 sm:p-4 lg:p-8 transition-all duration-300">
{{-- <---Code---> --}}

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

        <!-- Form Card -->
        <div class="bg-white rounded-xl shadow-md p-4 sm:p-6 m-2 sm:m-6">
            <h2 class="text-lg sm:text-xl font-semibold mb-4">Edit Data Karyawan</h2>

            <form action="#" method="POST" class="space-y-4">
                <!-- Nama -->
                <div>
                    <label class="block text-gray-700 font-medium mb-1 text-sm sm:text-base">Nama Karyawan</label>
                    <input type="text" placeholder="Masukkan Nama Karyawan..."
                        class="w-full border rounded-md p-2 sm:p-3 focus:ring focus:ring-green-300 text-sm sm:text-base"/>
                </div>

                <!-- NIK -->
                <div>
                    <label class="block text-gray-700 font-medium mb-1 text-sm sm:text-base">NIK</label>
                    <input type="text" placeholder="Masukkan NIK..."
                        class="w-full border rounded-md p-2 sm:p-3 focus:ring focus:ring-green-300 text-sm sm:text-base"/>
                </div>

                <!-- Nomor Telepon -->
                <div>
                    <label class="block text-gray-700 font-medium mb-1 text-sm sm:text-base">Nomor Telepon</label>
                    <input type="text" placeholder="Masukkan Nomor Telepon..."
                        class="w-full border rounded-md p-2 sm:p-3 focus:ring focus:ring-green-300 text-sm sm:text-base"/>
                </div>

                <!-- Divisi -->
                <div>
                    <label class="block text-gray-700 font-medium mb-1 text-sm sm:text-base">Divisi</label>
                    <select class="w-full border rounded-md p-2 sm:p-3 focus:ring focus:ring-green-300 text-sm sm:text-base">
                        <option>Pilih Divisi...</option>
                        <option>IT</option>
                        <option>Finance</option>
                        <option>HRD</option>
                    </select>
                </div>

                <!-- Tipe Karyawan -->
                <div>
                    <span class="block text-gray-700 font-medium mb-2 text-sm sm:text-base">Tipe Karyawan</span>
                    <div class="space-y-2 sm:flex sm:space-y-0 sm:space-x-6">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="tipe" value="Tetap" class="text-green-600"/>
                            <span class="text-sm sm:text-base">Tetap</span>
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="tipe" value="Kontrak" class="text-green-600"/>
                            <span class="text-sm sm:text-base">Kontrak</span>
                        </label>
                    </div>
                </div>

                <!-- Jenis Kelamin -->
                <div>
                    <span class="block text-gray-700 font-medium mb-2 text-sm sm:text-base">Jenis Kelamin</span>
                    <div class="space-y-2 sm:flex sm:space-y-0 sm:space-x-6">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="gender" value="Pria" class="text-green-600"/>
                            <span class="text-sm sm:text-base">Pria</span>
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="gender" value="Wanita" class="text-green-600"/>
                            <span class="text-sm sm:text-base">Wanita</span>
                        </label>
                    </div>
                </div>

                <!-- Tombol Submit -->
                <div class="flex justify-end pt-4">
                    <button type="submit"
                            class="px-4 py-2 sm:px-6 sm:py-3 bg-green-600 text-white rounded-md hover:bg-green-700 text-sm sm:text-base w-full sm:w-auto">
                        Edit
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <div class="mt-8 mx-2 sm:mx-4">
        <p class="text-[#4B4B5A] font-bold text-xs sm:text-sm">Copyright © 2025 PTMB. All Rights Reserved</p>
    </div>

</div>
</body>
</html>
