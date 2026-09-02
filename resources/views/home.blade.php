@extends('layouts.app')

@section('title', 'Home | Advancelink Company')

@section('content')

{{-- HERO --}}
<section class="w-full bg-gradient-to-br from-black via-[#1a1a1a] to-[#0a0a0a] text-white py-32">
    <div class="max-w-6xl mx-auto px-6 text-center">

        <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
            Where Technology Meets <br class="hidden md:block"> 
            <span class="text-yellow-500">Trust</span>
        </h1>

        <p class="text-lg text-gray-400 max-w-2xl mx-auto mb-10">
            Empowering businesses with smarter, safer, and more efficient digital solutions through ICT, Artificial Intelligence, and Cybersecurity.
        </p>

        <div class="flex justify-center gap-4">
            <a href="/contact-us"
               class="bg-red-600 px-6 py-3 rounded-full font-semibold hover:bg-red-500 transition shadow-lg">
                Get Started
            </a>

            <a href="/our-works"
               class="border border-yellow-500 text-yellow-500 px-6 py-3 rounded-full font-semibold hover:bg-yellow-500 hover:text-black transition">
                View Our Work
            </a>
        </div>

    </div>
</section>


{{-- SERVICES --}}
<section class="py-24 bg-black text-white">
    <div class="max-w-6xl mx-auto px-6 text-center">

        <h2 class="text-4xl font-bold mb-4">What We Do</h2>
        <p class="text-gray-400 mb-16">End-to-end solutions tailored for modern businesses</p>

        <div class="grid md:grid-cols-3 gap-8">

            {{-- System Integration --}}
            <div class="p-6 rounded-2xl border border-gray-800 hover:border-yellow-500 transition">
                <div class="text-3xl mb-4">⚙️</div>
                <h3 class="font-semibold text-lg mb-2">System Integration Solutions</h3>
                <p class="text-gray-400 text-sm">
                    We design and integrate end-to-end systems combining infrastructure, software, and data into scalable, high-performance platforms.
                </p>
            </div>

            {{-- Training --}}
            <div class="p-6 rounded-2xl border border-gray-800 hover:border-yellow-500 transition">
                <div class="text-3xl mb-4">🎓</div>
                <h3 class="font-semibold text-lg mb-2">Training & Development</h3>
                <p class="text-gray-400 text-sm">
                    Personalized and comprehensive training programs designed to validate competencies and meet organizational needs.
                </p>
            </div>

            {{-- Hardware --}}
            <div class="p-6 rounded-2xl border border-gray-800 hover:border-yellow-500 transition">
                <div class="text-3xl mb-4">🖥️</div>
                <h3 class="font-semibold text-lg mb-2">Hardware Supply</h3>
                <p class="text-gray-400 text-sm">
                    Supplying high-quality technology products with efficient procurement for timely and cost-effective delivery.
                </p>
            </div>

        </div>

    </div>
</section>


{{-- ABOUT PREVIEW --}}
<section class="py-24 bg-[#111111] text-white">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

        <div>
            <h2 class="text-4xl font-bold mb-6">Who We Are</h2>
            <p class="text-gray-400 mb-6">
                Advancelink is a technology-driven company specializing in ICT, Artificial Intelligence, and Cybersecurity. 
                We deliver integrated solutions, enhance security, and provide training to empower organizations in a rapidly evolving digital landscape.
            </p>

            <a href="/about-us"
               class="text-yellow-500 font-semibold hover:underline">
                Learn More →
            </a>
        </div>

        <div>
            <img src="{{ asset('images/about.jpg') }}" class="rounded-2xl shadow-lg">
        </div>

    </div>
</section>


{{-- WHY CHOOSE US --}}
<section class="py-24 bg-black text-white text-center">
    <div class="max-w-6xl mx-auto px-6">

        <h2 class="text-4xl font-bold mb-4">Why Choose Us</h2>
        <p class="text-gray-400 mb-16">Delivering value beyond technology</p>

        <div class="grid md:grid-cols-3 gap-8 text-left">

            <div class="border border-gray-800 p-6 rounded-xl hover:border-yellow-500 transition">
                <h3 class="font-semibold mb-3">Expertise & Innovation</h3>
                <p class="text-sm text-gray-400">
                    Specialized in ICT, Artificial Intelligence, and Cybersecurity to deliver modern, innovative solutions.
                </p>
            </div>

            <div class="border border-gray-800 p-6 rounded-xl hover:border-red-500 transition">
                <h3 class="font-semibold mb-3">End-to-End Delivery</h3>
                <p class="text-sm text-gray-400">
                    From planning to deployment, we manage the entire project lifecycle seamlessly.
                </p>
            </div>

            <div class="border border-gray-800 p-6 rounded-xl hover:border-yellow-500 transition">
                <h3 class="font-semibold mb-3">Future-Ready Solutions</h3>
                <p class="text-sm text-gray-400">
                    Scalable, secure, and built to adapt to evolving business and technology needs.
                </p>
            </div>

        </div>

    </div>
</section>


{{-- CTA --}}
<section class="py-24 bg-gradient-to-r from-red-700 to-red-900 text-white text-center">
    <div class="max-w-4xl mx-auto px-6">

        <h2 class="text-4xl font-bold mb-6">
            Ready to Build a Smarter Future?
        </h2>

        <p class="mb-8 text-lg text-red-200">
            Let’s empower your business with secure, scalable, and innovative technology solutions.
        </p>

        <a href="/contact-us"
           class="bg-yellow-500 text-black px-8 py-3 rounded-full font-semibold hover:bg-yellow-400 transition">
            Contact Us
        </a>

    </div>
</section>

@endsection