<header class="header">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img src="geto.jpg" alt="JetBrains logo." class="logo w-32 h-32 rounded-full">
            </a>
        </div>
        <div id="menu-button" class="sm:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12 center">
            <a href="/" class="text-lg font-semibold leading-6 text-gray-400 hover:text-white transition duration-200">Home</a>
            <a href="/films" class="text-lg font-semibold leading-6 text-gray-400 hover:text-white transition duration-200">Pel·licules</a>
            <a href="/videogames" class="text-lg font-semibold leading-6 text-gray-400 hover:text-white transition duration-200">Videojocs</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <p class="text-3xl font-semibold leading-6 text-white">🙉</p>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div id="mobile-menu" class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-10"></div>
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto header px-6 py-6 sm:max-w-sm sm:ring-white/10">
            <div class="flex items-center justify-between">
                <a href="/films" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img src="../../../jetbrains.png" alt="JetBrains logo." class="logo">
                </a>
                <button id="close-button" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/25">
                    <div class="space-y-2 py-6">
                        <a href="/" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Home</a>
                        <a href="/films" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Pel·licules</a>
                        <a href="/videogames" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Videojocs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    .header {
        background-color: #1e1c2a;
    }

    .logo {
        width: 3rem;  /* Increased width */
        height: auto; /* Maintain aspect ratio */
    }
</style>

<script>
    // Selecciona el botó per obrir i tancar el menú
    const menuButton = document.querySelector('#menu-button');
    const mobileMenu = document.querySelector('#mobile-menu');
    const closeButton = document.querySelector('#close-button');

    // Funció per obrir el menú
    function openMenu() {
        mobileMenu.classList.remove('hidden'); // Elimina la classe 'hidden'
        mobileMenu.classList.add('flex');       // Afegeix la classe 'flex'
    }

    // Funció per tancar el menú
    function closeMenu() {
        mobileMenu.classList.add('hidden');      // Afegeix la classe 'hidden'
        mobileMenu.classList.remove('flex');     // Elimina la classe 'flex'
    }

    // Assigna l'esdeveniment de clic al botó d'obertura
    menuButton.addEventListener('click', openMenu);
    // Assigna l'esdeveniment de clic al botó de tancament
    closeButton.addEventListener('click', closeMenu);
</script>
