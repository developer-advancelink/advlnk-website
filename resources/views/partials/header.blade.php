 {{-- HEADER --}}
<header class="w-full fixed top-0 left-0 z-50 bg-black/90 backdrop-blur-md border-b border-gray-800">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        {{-- Logo --}}
        <a href="/" class="text-2xl font-bold tracking-tight text-white">
            Advancelink<span class="text-yellow-500">.</span>
        </a>

        {{-- Navigation --}}
        <nav class="hidden md:flex items-center space-x-8 text-gray-300 font-medium">
            <a href="/home" class="hover:text-yellow-400 transition">Home</a>
            <a href="/about-us" class="hover:text-yellow-400 transition">About Us</a>
            <a href="/services" class="hover:text-yellow-400 transition">Services</a>
            <a href="/our-works" class="hover:text-yellow-400 transition">Our Works</a>
            <a href="/contact-us" class="hover:text-yellow-400 transition">Contact</a>
        </nav>

        {{-- CTA --}}
        <div class="hidden md:block">
            <a href="/contact-us"
               class="bg-red-600 text-white px-5 py-2 rounded-full font-semibold hover:bg-red-500 transition shadow-lg">
                Get Started
            </a>
        </div>

        {{-- Mobile Menu Button --}}
        <button id="menuBtn" class="md:hidden text-white text-2xl">
            ☰
        </button>

    </div>

    {{-- Mobile Menu --}}
    <div id="mobileMenu" class="hidden md:hidden bg-black border-t border-gray-800">
        <div class="flex flex-col px-6 py-4 space-y-4 text-gray-300 font-medium">
            <a href="/home" class="hover:text-yellow-400">Home</a>
            <a href="/about-us" class="hover:text-yellow-400">About Us</a>
            <a href="/services" class="hover:text-yellow-400">Services</a>
            <a href="/our-works" class="hover:text-yellow-400">Our Works</a>
            <a href="/contact-us" class="hover:text-yellow-400">Contact</a>

            <a href="/contact-us"
               class="bg-red-600 text-white px-4 py-2 rounded-full text-center">
                Get Started
            </a>
        </div>
    </div>
</header>