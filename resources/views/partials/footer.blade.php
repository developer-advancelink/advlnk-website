{{-- FOOTER (Updated for Services Page Consistency) --}}
<footer class="bg-black text-gray-400 px-10 py-16 border-t border-gray-800">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">

        {{-- Brand --}}
        <div>
            <a href="{{ url('/') }}" class="text-2xl text-white tracking-tight">
                Advancelink<span class="text-yellow-500">.</span>
            </a>

            <p class="text-sm mt-4 leading-relaxed">
                Delivering integrated technology solutions including system integration, workforce training, 
                and hardware supply to support scalable and efficient business operations.
            </p>
        </div>


        {{-- Quick Links --}}
        <div>
            <h3 class="mb-4 text-white">Quick Links</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ url('/') }}" class="hover:text-yellow-500 transition">Home</a></li>
                <li><a href="{{ url('/about-us') }}" class="hover:text-yellow-500 transition">About Us</a></li>
                <li><a href="{{ url('/services') }}" class="hover:text-yellow-500 transition">Services</a></li>
                <li><a href="{{ url('/our-works') }}" class="hover:text-yellow-500 transition">Our Works</a></li>
                <li><a href="{{ url('/contact-us') }}" class="hover:text-yellow-500 transition">Contact</a></li>
            </ul>
        </div>


        {{-- Services (UPDATED) --}}
        <div>
            <h3 class="mb-4 text-white">Services</h3>
            <ul class="space-y-2 text-sm">
                <li>
                    <a href="{{ url('/services#integration') }}" class="hover:text-yellow-500 transition">
                        System Integration Solutions
                    </a>
                </li>
                <li>
                    <a href="{{ url('/services#training') }}" class="hover:text-yellow-500 transition">
                        Training & Development
                    </a>
                </li>
                <li>
                    <a href="{{ url('/services#hardware') }}" class="hover:text-yellow-500 transition">
                        Hardware Supply
                    </a>
                </li>
            </ul>
        </div>


        {{-- Contact --}}
        <div>
            <h3 class="mb-4 text-white">Contact Us</h3>
            <ul class="space-y-2 text-sm">
                <li>
                    Email:
                    <a href="mailto:info@advancelink.me" class="hover:text-yellow-500 transition">
                        info@advancelink.me
                    </a>
                </li>
                <li>Phone: +673 874 6697</li>
                <li class="leading-relaxed">
                    7B, 1st Floor, Hassanin Building II,<br>
                    Spg 103, Jln Gadong
                </li>
            </ul>
        </div>

    </div>


    {{-- Bottom Bar --}}
    <div class="border-t border-gray-800 mt-12 pt-6 text-center text-sm text-gray-500">
        © {{ date('Y') }} Advancelink Company. All rights reserved.
    </div>
</footer>