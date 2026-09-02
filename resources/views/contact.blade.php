{{-- CONTACT US PAGE --}}

@extends('layouts.app')

@section('title', 'Contact Us | Advancelink Company')

@section('content')

{{-- HERO SECTION --}}
<section class="bg-black text-white py-24 px-10 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            Get in <span class="text-yellow-500">Touch</span>
        </h1>
        <p class="text-gray-400 text-lg leading-relaxed">
            We’d love to hear from you. Whether it’s a project inquiry, partnership, or general question, our team is ready to help.
        </p>
    </div>
</section>

{{-- CONTACT INFO & FORM --}}
<section class="bg-gray-950 text-white py-20 px-10">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12">

        {{-- Contact Form --}}
        <div class="bg-black p-8 rounded-2xl border border-gray-800 shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-yellow-500">Send Us a Message</h2>

            <form action="{{ url('/contact-submit') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-gray-300 mb-1" for="name">Full Name</label>
                    <input type="text" name="name" id="name"
                           class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 text-white focus:border-yellow-500 outline-none"
                           placeholder="Your name" required>
                </div>

                <div>
                    <label class="block text-gray-300 mb-1" for="email">Email Address</label>
                    <input type="email" name="email" id="email"
                           class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 text-white focus:border-yellow-500 outline-none"
                           placeholder="your@email.com" required>
                </div>

                <div>
                    <label class="block text-gray-300 mb-1" for="subject">Subject</label>
                    <input type="text" name="subject" id="subject"
                           class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 text-white focus:border-yellow-500 outline-none"
                           placeholder="Subject" required>
                </div>

                <div>
                    <label class="block text-gray-300 mb-1" for="message">Message</label>
                    <textarea name="message" id="message" rows="5"
                              class="w-full px-4 py-2 rounded-lg bg-gray-800 border border-gray-700 text-white focus:border-yellow-500 outline-none"
                              placeholder="Write your message..." required></textarea>
                </div>

                <button type="submit"
                        class="bg-yellow-500 text-black font-semibold px-6 py-3 rounded-full hover:bg-yellow-400 transition">
                    Send Message
                </button>
            </form>
        </div>

        {{-- Company Info --}}
        <div class="space-y-6">
            <h2 class="text-2xl font-bold text-yellow-500 mb-4">Contact Information</h2>

            <div class="space-y-2">
                <p class="text-gray-400"><strong>Address:</strong> 7B, 1st Floor, Hassanin Building II, Spg 103, Jln Gadong</p>
                <p class="text-gray-400"><strong>Email:</strong> <a href="mailto:info@advancelink.me" class="text-yellow-500 hover:underline">info@advancelink.com</a></p>
                <p class="text-gray-400"><strong>Phone:</strong> <a href="tel:+6738746697" class="text-yellow-500 hover:underline">+673 874 6697</a></p>
                <p class="text-gray-400"><strong>Office Hours:</strong> Mon – Fri, 8:00 AM – 5:00 PM</p>
            </div>

            <div class="w-full h-64 md:h-96">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d189.89503080059734!2d114.9178285878489!3d4.909675092619101!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3222f5ba6faadc43%3A0x4d82c36b40679cad!2sPribumi%20Employment%20Agency!5e1!3m2!1sen!2sbn!4v1774918812554!5m2!1sen!2sbn" 
                    class="w-full h-full border-0" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

    </div>
</section>

{{-- CTA --}}
<section class="bg-red-700 text-white text-center py-16 px-10">
    <h2 class="text-3xl font-bold mb-4">
        Have Questions? Let’s Talk
    </h2>
    <p class="mb-6 text-gray-200">
        Reach out to us and we’ll get back to you as soon as possible.
    </p>

    <a href="{{ url('/contact-us') }}" 
       class="bg-yellow-500 text-black px-8 py-3 rounded-full font-semibold hover:bg-yellow-400 transition">
        Contact Us
    </a>
</section>

@endsection