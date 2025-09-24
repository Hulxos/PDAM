<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layout.tailwind')
</head>
<body>

<!-- Fixed Navbar -->
<nav class="bg-white shadow-lg border-gray-200 fixed top-0 left-0 right-0 z-30">
    <div class="max-w-screen flex justify-between items-center py-4 px-4 sm:px-6 lg:px-8">

        <!-- Mobile menu button / Side Bar -->
        <button id="mobile-menu-button"
                onclick="window.toggleSidebar()"
                class="sm:hidden inline-flex items-center p-2 text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 transition-colors duration-200">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </button>

        <!-- Logo for mobile -->
        <div class="flex items-center sm:hidden">
            <img src="{{ asset('image/PTMBLOGO.png') }}" class="h-8" alt="PTMB Logo">
            <span class="self-center text-lg font-bold whitespace-nowrap ml-2">PTMB</span>
        </div>

        <!-- User profile section -->
        <div class="flex items-center ml-auto space-x-2 sm:space-x-4">
            <div class="hidden sm:flex flex-col items-end">
                <span class="font-semibold text-sm lg:text-lg text-[#4B4B5A]">John Doe</span>
                <span class="text-xs lg:text-sm text-[#6B6B7A] font-medium">ADMIN</span>
            </div>
            <img class="w-10 h-10 sm:w-12 sm:h-12 lg:w-16 lg:h-16 rounded-full"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRG-HTBNCWZyZIJ060q67OKkpQ3Wa2cAwL69g&s"
                alt="user photo">
        </div>
    </div>
</nav>

<!-- JavaScript for mobile menu toggle -->
<script>
    // Backup function in case sidebar script loads after navbar
    if (typeof window.toggleSidebar === 'undefined') {
        window.toggleSidebar = function() {
            const sidebar = document.getElementById('logo-sidebar');
            const overlay = document.getElementById('sidebar-overlay');

            if (sidebar && overlay) {
                const isHidden = sidebar.classList.contains('-translate-x-full');

                if (isHidden) {
                    sidebar.classList.remove('-translate-x-full');
                    overlay.classList.remove('hidden');
                } else {
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('hidden');
                }
            }
        };
    }
</script>

</body>
</html>
