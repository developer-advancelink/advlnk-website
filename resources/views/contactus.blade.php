{{-- CONTACT US PAGE (Rough Draft – Boxy Version) --}}

@extends('layouts.app')

@section('title', 'Contact Us | Advancelink Company')

@section('content')

{{-- HERO SECTION --}}
<section class="bg-gray-900 text-gray-200 py-24 px-10 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-5xl mb-6">
            Contact Us
        </h1>
        <p class="text-gray-400 text-lg leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
        </p>
    </div>
</section>

{{-- CONTACT INFO & FORM --}}
<section class="bg-gray-800 text-gray-200 py-20 px-10">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12">

        {{-- Contact Form --}}
        <div class="bg-gray-700 p-8 border border-gray-600 shadow-none">
            <h2 class="text-lg mb-6 text-gray-300">Send a Message (TBD)</h2>

            <form action="#" method="POST" class="space-y-4">

                <div>
                    <label class="block mb-1" for="name">Name</label>
                    <input type="text" name="name" id="name"
                           class="w-full px-4 py-2 bg-gray-600 border border-gray-500 text-gray-200 outline-none"
                           placeholder="Lorem ipsum" >
                </div>

                <div>
                    <label class="block mb-1" for="email">Email</label>
                    <input type="email" name="email" id="email"
                           class="w-full px-4 py-2 bg-gray-600 border border-gray-500 text-gray-200 outline-none"
                           placeholder="email@domain.com" >
                </div>

                <div>
                    <label class="block mb-1" for="subject">Subject</label>
                    <input type="text" name="subject" id="subject"
                           class="w-full px-4 py-2 bg-gray-600 border border-gray-500 text-gray-200 outline-none"
                           placeholder="Lorem ipsum dolor sit" >
                </div>

                <div>
                    <label class="block mb-1" for="message">Message</label>
                    <textarea name="message" id="message" rows="5"
                              class="w-full px-4 py-2 bg-gray-600 border border-gray-500 text-gray-200 outline-none"
                              placeholder="Lorem ipsum dolor sit amet..."></textarea>
                </div>

                <button type="submit"
                        class="bg-gray-600 text-gray-200 px-6 py-3 border border-gray-500">
                    Send (Not working)
                </button>
            </form>
        </div>

        {{-- Company Info --}}
        <div class="space-y-6">
            <h2 class="text-lg mb-4 text-gray-300">Contact Info (Placeholder)</h2>

            <div class="space-y-2">
                <p>Address: Lorem ipsum street, 123, City</p>
                <p>Email: <a href="#" class="text-gray-200 hover:underline">placeholder@domain.com</a></p>
                <p>Phone: <a href="#" class="text-gray-200 hover:underline">+000 0000 0000</a></p>
                <p>Office Hours: Lorem – Ipsum, 0:00 – 0:00</p>
            </div>

            {{-- Map Placeholder --}}
            <div class="w-full h-64 md:h-96 bg-gray-700 flex items-center justify-center text-gray-400">
                Google Map Placeholder
            </div>
        </div>

    </div>
</section>

{{-- CTA --}}
<section class="bg-gray-700 text-gray-200 text-center py-16 px-10">
    <h2 class="text-xl mb-4">
        CTA Placeholder
    </h2>
    <p class="mb-6 text-gray-400">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio.
    </p>

    <a href="#"
       class="bg-gray-600 text-gray-200 px-8 py-3 border border-gray-500">
        Click Me (TBD)
    </a>
</section>

@endsection