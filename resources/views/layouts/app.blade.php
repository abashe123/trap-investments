<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trap Investments</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<script>
function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('hidden');
}

</script>

<body class="bg-gray-100">

<!-- NAVBAR -->
<nav class="fixed w-full z-50 transition-all duration-300" id="navbar">
    <div class="backdrop-blur-md bg-white/70 border-b border-gray-200">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center h-20">

                <!-- LOGO -->
                <a href="/" class="flex items-center space-x-3">
                    <span class="text-lg font-semibold text-black">Trap Investments</span>
                </a>

                <!-- DESKTOP MENU -->
<div class="hidden md:flex items-center space-x-10 font-medium">

    <a href="/" class="hover:text-gray-700">Home</a>

    <!-- Dropdown -->
<div class="relative">

    <button id="companiesButton"
        onclick="toggleCompaniesDropdown()"
        class="hover:text-gray-600 transition flex items-center gap-1">

    Our Companies

    <span id="companiesArrow" class="transition-transform duration-300 text-xs">
    ▾
</span>

</button>

    <div id="companiesDropdown"
     class="absolute left-0 mt-3 w-48 bg-white shadow-xl rounded-lg
            opacity-0 translate-y-2 scale-95
            pointer-events-none
            transition-all duration-200 ease-out">

    <a href="/car-rental"
       class="block px-4 py-2 hover:bg-gray-100">
        Trap Car Rental
    </a>

    <a href="/food"
       class="block px-4 py-2 hover:bg-gray-100">
        Trap Food
    </a>

    <a href="/real-estate"
       class="block px-4 py-2 hover:bg-gray-100">
        Trap Real Estate
    </a>

</div>
</div>

    <a href="#" class="hover:text-gray-700">About</a>

</div>

                <!-- CTA -->
                <div class="hidden md:block">
                    <a href="#"
                       class="bg-black text-white px-6 py-2 rounded-full text-sm hover:bg-gray-800 transition">
                        Contact Us
                    </a>
                </div>

                <!-- MOBILE BUTTON -->
                <button class="md:hidden" onclick="toggleMenu()">☰</button>

            </div>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobileMenu" class="hidden md:hidden bg-white border-b">
        <div class="px-6 py-4 space-y-4">
            <a href="/" class="block">Home</a>
            <a href="/car-rental" class="block">Car Rental</a>
            <a href="/food" class="block">Trap Food</a>
            <a href="/real-estate" class="block">Real Estate</a>
            <a href="#" class="block">Contact</a>
        </div>
    </div>
</nav>

<!-- PAGE CONTENT -->
<div class="pt-28">
    @yield('content')
</div>

<!-- FOOTER -->
<footer class="bg-black text-white mt-32">
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
            <div>
                <h3 class="font-bold text-lg mb-4">Trap Investments</h3>
                <p class="text-gray-400 text-sm">Diversified investment company operating in Tanzania.</p>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Companies</h4>
                <ul class="space-y-2 text-gray-400 text-sm">
                    <li><a href="/car-rental">Car Rental</a></li>
                    <li><a href="/food">Trap Food</a></li>
                    <li><a href="/real-estate">Real Estate</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Contact</h4>
                <p class="text-gray-400 text-sm">Arusha, Tanzania</p>
                <p class="text-gray-400 text-sm">+255 XXX XXX XXX</p>
            </div>
            <div>
                <h4 class="font-semibold mb-4">Follow Us</h4>
                <p class="text-gray-400 text-sm">Instagram</p>
                <p class="text-gray-400 text-sm">Facebook</p>
            </div>
        </div>

        <div class="border-t border-gray-700 mt-10 pt-6 text-center text-gray-500 text-sm">
            © {{ date('Y') }} Trap Investments. All rights reserved.
        </div>
    </div>
</footer>

<script>

function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('hidden');
}

function toggleCompaniesDropdown() {

    const dropdown = document.getElementById('companiesDropdown');
    const arrow = document.getElementById('companiesArrow');

    const isOpen = dropdown.classList.contains('opacity-100');

    if (isOpen) {
        closeDropdown();
    } else {
        openDropdown();
    }
}

function openDropdown() {
    const dropdown = document.getElementById('companiesDropdown');
    const arrow = document.getElementById('companiesArrow');

    dropdown.classList.remove('opacity-0','translate-y-2','scale-95','pointer-events-none');
    dropdown.classList.add('opacity-100','translate-y-0','scale-100');

    arrow.classList.add('rotate-180');
}

function closeDropdown() {
    const dropdown = document.getElementById('companiesDropdown');
    const arrow = document.getElementById('companiesArrow');

    dropdown.classList.remove('opacity-100','translate-y-0','scale-100');
    dropdown.classList.add('opacity-0','translate-y-2','scale-95','pointer-events-none');

    arrow.classList.remove('rotate-180');
}

// close when clicking outside
document.addEventListener('click', function(event) {

    const dropdown = document.getElementById('companiesDropdown');
    const button = document.getElementById('companiesButton');

    if (button.contains(event.target)) return;

    if (!dropdown.contains(event.target)) {
        closeDropdown();
    }

});

</script>

</body>
</html>
