{{-- OUR WORKS PAGE --}}

@extends('layouts.app')

@section('title', 'Our Works | Advancelink Company')

@section('content')

{{-- HERO --}}
<section class="bg-black text-white py-24 px-10 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            Our <span class="text-yellow-500">Work</span>
        </h1>
        <p class="text-gray-400 text-lg leading-relaxed">
            A showcase of our expertise in building integrated systems, enhancing security, and delivering impactful technology solutions.
        </p>
    </div>
</section>


{{-- FEATURED PROJECT --}}
<section class="bg-gray-950 text-white py-20 px-10">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">

        {{-- Image --}}
        <div>
            <img src="{{ asset('images/project1.jpg') }}" class="rounded-2xl shadow-lg w-full">
        </div>

        {{-- Text --}}
        <div>
            <h2 class="text-3xl font-bold mb-4 text-yellow-500">
                Smart Attendance System
            </h2>
            <p class="text-gray-400 mb-4">
                A facial recognition-based attendance system designed to automate tracking, improve accuracy, and provide real-time analytics for organizations.
            </p>

            <ul class="text-gray-400 space-y-2 text-sm mb-6">
                <li>✔ Facial recognition integration</li>
                <li>✔ Real-time attendance dashboard</li>
                <li>✔ Role-based access (Admin & Lecturer)</li>
                <li>✔ Data analytics & reporting</li>
            </ul>

            <a href="#"
               class="text-yellow-500 font-semibold hover:underline">
                View Details →
            </a>
        </div>

    </div>
</section>


{{-- PROJECT GRID --}}
<section class="bg-black text-white py-20 px-10">
    <div class="max-w-6xl mx-auto text-center mb-12">
        <h2 class="text-3xl font-bold">More Projects</h2>
        <p class="text-gray-400 mt-3">Delivering solutions across industries</p>
    </div>

    <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">

        {{-- Project 1 --}}
        <div class="group relative border border-gray-800 rounded-2xl overflow-hidden hover:border-yellow-500 transition">
            
            <img src="{{ asset('images/project1.jpg') }}"
                 class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">

            {{-- Overlay --}}
            <div class="absolute inset-0 bg-black/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                <a href="https://pribumi-employment-agency.netlify.app/" target="_blank"
                   class="bg-yellow-500 text-black px-4 py-2 rounded-full font-semibold text-sm">
                   Visit Site
                </a>
            </div>

            <div class="p-5 bg-black">

                {{-- Tags --}}
                <div class="flex gap-2 mb-3 flex-wrap">
                    <span class="text-xs bg-gray-800 text-yellow-500 px-2 py-1 rounded-full">Website</span>
                    <span class="text-xs bg-gray-800 text-red-500 px-2 py-1 rounded-full">Corporate</span>
                </div>

                <h3 class="font-semibold mb-2">Corporate Website – Pribumi BN</h3>
                <p class="text-sm text-gray-400">
                    Designed and developed a modern corporate website to strengthen digital presence and improve accessibility.
                </p>

            </div>
        </div>

        {{-- Project 2 --}}
        <div class="group relative border border-gray-800 rounded-2xl overflow-hidden hover:border-red-500 transition">
            
            <img src="{{ asset('images/project2.jpg') }}"
                 class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">

            <div class="absolute inset-0 bg-black/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                <span class="bg-red-500 text-white px-4 py-2 rounded-full text-sm">
                    Internal System
                </span>
            </div>

            <div class="p-5 bg-black">

                <div class="flex gap-2 mb-3 flex-wrap">
                    <span class="text-xs bg-gray-800 text-yellow-500 px-2 py-1 rounded-full">AI</span>
                    <span class="text-xs bg-gray-800 text-red-500 px-2 py-1 rounded-full">HR</span>
                    <span class="text-xs bg-gray-800 text-yellow-500 px-2 py-1 rounded-full">Automation</span>
                </div>

                <h3 class="font-semibold mb-2">Smart Workforce Management System</h3>
                <p class="text-sm text-gray-400">
                    Intelligent attendance and HR portal with automation, real-time tracking, and analytics.
                </p>

            </div>
        </div>

        {{-- Project 3 --}}
        <div class="group relative border border-gray-800 rounded-2xl overflow-hidden hover:border-yellow-500 transition">
            
            <img src="{{ asset('images/project3.jpg') }}"
                 class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">

            <div class="absolute inset-0 bg-black/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                <span class="bg-yellow-500 text-black px-4 py-2 rounded-full text-sm">
                    Government Project
                </span>
            </div>

            <div class="p-5 bg-black">

                <div class="flex gap-2 mb-3 flex-wrap">
                    <span class="text-xs bg-gray-800 text-yellow-500 px-2 py-1 rounded-full">Government</span>
                    <span class="text-xs bg-gray-800 text-red-500 px-2 py-1 rounded-full">System</span>
                    <span class="text-xs bg-gray-800 text-yellow-500 px-2 py-1 rounded-full">Booking</span>
                </div>

                <h3 class="font-semibold mb-2">Government Booking Management System (MINDEF)</h3>
                <p class="text-sm text-gray-400">
                    Centralized booking system for scheduling and resource management.
                </p>

            </div>
        </div>

        {{-- Project 4 --}}
        <div class="group relative border border-gray-800 rounded-2xl overflow-hidden hover:border-red-500 transition">
            
            <img src="{{ asset('images/project2.jpg') }}"
                 class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">

            <div class="absolute inset-0 bg-black/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                <span class="bg-red-500 text-white px-4 py-2 rounded-full text-sm">
                    Enterprise
                </span>
            </div>

            <div class="p-5 bg-black">

                <div class="flex gap-2 mb-3 flex-wrap">
                    <span class="text-xs bg-gray-800 text-yellow-500 px-2 py-1 rounded-full">Integration</span>
                    <span class="text-xs bg-gray-800 text-red-500 px-2 py-1 rounded-full">Enterprise</span>
                </div>

                <h3 class="font-semibold mb-2">System Integration Platform</h3>
                <p class="text-sm text-gray-400">
                    Unified multiple systems into one operational platform.
                </p>

            </div>
        </div>

        {{-- Project 5 --}}
        <div class="group relative border border-gray-800 rounded-2xl overflow-hidden hover:border-yellow-500 transition">
            
            <img src="{{ asset('images/project3.jpg') }}"
                 class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">

            <div class="absolute inset-0 bg-black/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                <span class="bg-yellow-500 text-black px-4 py-2 rounded-full text-sm">
                    Education
                </span>
            </div>

            <div class="p-5 bg-black">

                <div class="flex gap-2 mb-3 flex-wrap">
                    <span class="text-xs bg-gray-800 text-yellow-500 px-2 py-1 rounded-full">Training</span>
                    <span class="text-xs bg-gray-800 text-red-500 px-2 py-1 rounded-full">Management</span>
                </div>

                <h3 class="font-semibold mb-2">Training Management System</h3>
                <p class="text-sm text-gray-400">
                    Platform for managing training programs and tracking performance.
                </p>

            </div>
        </div>

        {{-- Project 6 --}}
        <div class="group relative border border-gray-800 rounded-2xl overflow-hidden hover:border-red-500 transition">
            
            <img src="{{ asset('images/project1.jpg') }}"
                 class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">

            <div class="absolute inset-0 bg-black/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                <span class="bg-red-500 text-white px-4 py-2 rounded-full text-sm">
                    Infrastructure
                </span>
            </div>

            <div class="p-5 bg-black">

                <div class="flex gap-2 mb-3 flex-wrap">
                    <span class="text-xs bg-gray-800 text-yellow-500 px-2 py-1 rounded-full">Cloud</span>
                    <span class="text-xs bg-gray-800 text-red-500 px-2 py-1 rounded-full">Security</span>
                </div>

                <h3 class="font-semibold mb-2">IT Infrastructure Setup</h3>
                <p class="text-sm text-gray-400">
                    Deployment of scalable and secure enterprise infrastructure.
                </p>

            </div>
        </div>

    </div>
</section>


{{-- CAPABILITIES --}}
<section class="bg-gray-950 text-white py-20 px-10">
    <div class="max-w-6xl mx-auto text-center mb-12">
        <h2 class="text-3xl font-bold">Our Capabilities</h2>
        <p class="text-gray-400 mt-3">Technologies and expertise we bring</p>
    </div>

    <div class="grid md:grid-cols-4 gap-6 max-w-6xl mx-auto text-center text-gray-400">

        <div class="border border-gray-800 p-6 rounded-xl hover:border-yellow-500 transition">
            AI Solutions
        </div>

        <div class="border border-gray-800 p-6 rounded-xl hover:border-red-500 transition">
            Cybersecurity
        </div>

        <div class="border border-gray-800 p-6 rounded-xl hover:border-yellow-500 transition">
            System Integration
        </div>

        <div class="border border-gray-800 p-6 rounded-xl hover:border-red-500 transition">
            Cloud & Infrastructure
        </div>

    </div>
</section>


{{-- CTA --}}
<section class="bg-gradient-to-r from-red-700 to-red-900 text-white text-center py-16 px-10">
    <h2 class="text-3xl font-bold mb-4">
        Have a Project in Mind?
    </h2>
    <p class="mb-6 text-red-200">
        Let’s work together to bring your ideas to life with innovative technology solutions.
    </p>

    <a href="{{ url('/contact-us') }}" 
       class="bg-yellow-500 text-black px-8 py-3 rounded-full font-semibold hover:bg-yellow-400 transition">
        Start Your Project
    </a>
</section>

@endsection