{{-- ABOUT US PAGE --}}

@extends('layouts.app')

@section('title', 'About Us | Advancelink Company')

@section('content')

{{-- HERO SECTION --}}
<section class="bg-black text-white py-24 px-10 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            About <span class="text-yellow-500">Advancelink</span>
        </h1>
        <p class="text-gray-400 text-lg leading-relaxed">
            Where technology meets trust — we empower organizations with smarter, safer, and more efficient digital solutions.
        </p>
    </div>
</section>


{{-- WHO WE ARE --}}
<section class="bg-gray-950 text-gray-300 py-20 px-10">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">

        {{-- Text --}}
        <div>
            <h2 class="text-3xl font-bold text-white mb-6">
                Who We Are
            </h2>
            <p class="leading-relaxed mb-4">
                Advancelink Company is a technology-driven solutions provider specializing in ICT, Artificial Intelligence, and Cybersecurity.
                We help organizations build integrated digital systems that enhance performance, strengthen security, and support long-term growth.
            </p>
            <p class="leading-relaxed">
                From system integration to training and hardware supply, we deliver end-to-end solutions tailored to modern business challenges in a fast-moving digital world.
            </p>
        </div>

        {{-- Visual Block --}}
        <div class="bg-gradient-to-br from-red-700 to-yellow-500 rounded-2xl h-64 flex items-center justify-center text-black font-semibold text-center px-6">
            Smarter Systems <br> Stronger Security <br> Scalable Growth
        </div>

    </div>
</section>


{{-- MISSION & VISION --}}
<section class="bg-black text-white py-20 px-10">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10">

        {{-- Mission --}}
        <div class="border border-gray-800 p-8 rounded-xl hover:border-yellow-500 transition">
            <h3 class="text-xl font-semibold mb-4 text-yellow-500">Our Mission</h3>
            <p class="text-gray-400 leading-relaxed">
                To provide exceptional services, training, and cutting-edge solutions that foster technological advancement,
                enhance operational readiness, and improve productivity for a smarter and more secure future.
            </p>
        </div>

        {{-- Vision --}}
        <div class="border border-gray-800 p-8 rounded-xl hover:border-red-500 transition">
            <h3 class="text-xl font-semibold mb-4 text-red-500">Our Vision</h3>
            <p class="text-gray-400 leading-relaxed">
                Empowering individuals and organizations with the tools and knowledge necessary to drive sustainable growth,
                innovation, and digital resilience.
            </p>
        </div>

    </div>
</section>


{{-- WHAT WE DO --}}
<section class="bg-gray-950 text-white py-20 px-10">

    {{-- Section Header --}}
    <div class="max-w-6xl mx-auto text-center mb-12">
        <h2 class="text-3xl font-bold">What We Do</h2>
        <p class="text-gray-400 mt-3">End-to-end technology solutions for modern organizations</p>
    </div>

    {{-- Cards --}}
    <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">

        {{-- Card 1 --}}
        <div class="bg-black border border-gray-800 p-6 rounded-xl hover:border-yellow-500 transition">
            <h3 class="font-semibold mb-3">System Integration Solutions</h3>
            <p class="text-sm text-gray-400">
                We design, implement, and integrate infrastructure, software, and data into cohesive systems
                for seamless operations, optimized performance, and scalability.
            </p>
        </div>

        {{-- Card 2 --}}
        <div class="bg-black border border-gray-800 p-6 rounded-xl hover:border-red-500 transition">
            <h3 class="font-semibold mb-3">Training & Development</h3>
            <p class="text-sm text-gray-400">
                Personalized and comprehensive training programs designed to validate competencies
                and address specific organizational needs.
            </p>
        </div>

        {{-- Card 3 --}}
        <div class="bg-black border border-gray-800 p-6 rounded-xl hover:border-yellow-500 transition">
            <h3 class="font-semibold mb-3">Hardware Supply</h3>
            <p class="text-sm text-gray-400">
                Supplying high-quality technology products with efficient procurement processes,
                ensuring timely delivery and cost-effective solutions.
            </p>
        </div>

    </div>
</section>


{{-- WHY CHOOSE US --}}
<section class="bg-black text-white py-20 px-10">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">

        {{-- Text --}}
        <div>
            <h2 class="text-3xl font-bold mb-6">
                Why Choose <span class="text-yellow-500">Advancelink</span>?
            </h2>

            <ul class="space-y-4 text-gray-400">
                <li>✔ Specialized in ICT, Artificial Intelligence & Cybersecurity</li>
                <li>✔ End-to-end project delivery from planning to deployment</li>
                <li>✔ Skilled team using modern technologies</li>
                <li>✔ Scalable and future-proof solutions</li>
                <li>✔ Proven and structured training methodology</li>
            </ul>
        </div>

        {{-- Visual Placeholder --}}
        <div class="bg-gray-900 rounded-2xl h-64 flex items-center justify-center text-gray-500">
            Team / Innovation Visual
        </div>

    </div>
</section>


{{-- CALL TO ACTION --}}
<section class="bg-gradient-to-r from-red-700 to-red-900 text-white text-center py-16 px-10">
    <h2 class="text-3xl font-bold mb-4">
        Let’s Build a Smarter Future Together
    </h2>
    <p class="mb-6 text-red-200">
        Partner with us to create secure, scalable, and innovative solutions for your business.
    </p>

    <a href="{{ url('/contact-us') }}" 
       class="bg-yellow-500 text-black px-8 py-3 rounded-full font-semibold hover:bg-yellow-400 transition">
        Contact Us
    </a>
</section>

@endsection