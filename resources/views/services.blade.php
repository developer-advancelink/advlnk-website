{{-- SERVICES PAGE --}}

@extends('layouts.app')

@section('title', 'Services | Advancelink Company')

@section('content')

{{-- HERO --}}
<section class="bg-black text-white py-24 px-10 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            Our <span class="text-yellow-500">Services</span>
        </h1>
        <p class="text-gray-400 text-lg leading-relaxed">
            Delivering end-to-end technology solutions that empower businesses with smarter systems, stronger security, and scalable growth.
        </p>
    </div>
</section>


{{-- CORE SERVICES --}}
<section class="bg-gray-950 text-white py-20 px-10">
    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">

        {{-- Service 1 --}}
        <div class="bg-black border border-gray-800 p-8 rounded-2xl hover:border-yellow-500 transition">
            <div class="text-3xl mb-4">⚙️</div>
            <h3 class="text-xl font-semibold mb-4">System Integration Solutions</h3>
            <p class="text-gray-400 text-sm leading-relaxed">
                We design, implement, and integrate infrastructure, software, and data into unified systems 
                that ensure seamless operations, optimized performance, and long-term scalability.
            </p>
        </div>

        {{-- Service 2 --}}
        <div class="bg-black border border-gray-800 p-8 rounded-2xl hover:border-red-500 transition">
            <div class="text-3xl mb-4">🎓</div>
            <h3 class="text-xl font-semibold mb-4">Training & Development</h3>
            <p class="text-gray-400 text-sm leading-relaxed">
                Our personalized and comprehensive training programs are designed to build competencies,
                enhance workforce capabilities, and meet specific organizational requirements.
            </p>
        </div>

        {{-- Service 3 --}}
        <div class="bg-black border border-gray-800 p-8 rounded-2xl hover:border-yellow-500 transition">
            <div class="text-3xl mb-4">💻</div>
            <h3 class="text-xl font-semibold mb-4">Hardware Supply</h3>
            <p class="text-gray-400 text-sm leading-relaxed">
                We provide high-quality technology products through efficient procurement processes,
                ensuring timely delivery and cost-effective solutions for businesses.
            </p>
        </div>

    </div>
</section>


{{-- DETAILED BREAKDOWN --}}
<section class="bg-black text-white py-20 px-10">
    <div class="max-w-6xl mx-auto space-y-16">

        {{-- Integration --}}
        <div id="integration" class="grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-2xl font-bold mb-4 text-yellow-500">System Integration Solutions</h2>
                <p class="text-gray-400 mb-4">
                    We connect your infrastructure, applications, and data into a single, efficient ecosystem.
                </p>
                <ul class="text-gray-400 space-y-2 text-sm">
                    <li>✔ End-to-end system architecture</li>
                    <li>✔ Cloud & on-premise integration</li>
                    <li>✔ Data synchronization & automation</li>
                    <li>✔ Scalable and future-ready systems</li>
                </ul>
            </div>
            <div class="bg-gray-900 rounded-xl h-56 flex items-center justify-center text-gray-500">
                Integration Visual
            </div>
        </div>

        {{-- Training --}}
        <div id="training" class="grid md:grid-cols-2 gap-10 items-center">
            <div class="bg-gray-900 rounded-xl h-56 flex items-center justify-center text-gray-500">
                Training Visual
            </div>
            <div>
                <h2 class="text-2xl font-bold mb-4 text-red-500">Training & Development</h2>
                <p class="text-gray-400 mb-4">
                    Empower your workforce with practical, structured, and results-driven training programs.
                </p>
                <ul class="text-gray-400 space-y-2 text-sm">
                    <li>✔ Customized training modules</li>
                    <li>✔ Skills validation & competency building</li>
                    <li>✔ Industry-relevant knowledge</li>
                    <li>✔ Hands-on learning approach</li>
                </ul>
            </div>
        </div>

        {{-- Hardware --}}
        <div id="hardware" class="grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h2 class="text-2xl font-bold mb-4 text-yellow-500">Hardware Supply</h2>
                <p class="text-gray-400 mb-4">
                    Access the latest technology with reliable sourcing and efficient delivery.
                </p>
                <ul class="text-gray-400 space-y-2 text-sm">
                    <li>✔ High-quality IT equipment</li>
                    <li>✔ Trusted vendors & sourcing</li>
                    <li>✔ Cost-effective procurement</li>
                    <li>✔ Timely delivery & support</li>
                </ul>
            </div>
            <div class="bg-gray-900 rounded-xl h-56 flex items-center justify-center text-gray-500">
                Hardware Visual
            </div>
        </div>

    </div>
</section>


{{-- PROCESS / HOW WE WORK --}}
<section class="bg-gray-950 text-white py-20 px-10">
    <div class="max-w-6xl mx-auto text-center mb-12">
        <h2 class="text-3xl font-bold">How We Work</h2>
        <p class="text-gray-400 mt-3">A structured approach to delivering excellence</p>
    </div>

    <div class="grid md:grid-cols-4 gap-8 max-w-6xl mx-auto text-center">

        <div>
            <div class="text-yellow-500 text-3xl mb-3">1</div>
            <h3 class="font-semibold mb-2">Consultation</h3>
            <p class="text-gray-400 text-sm">Understanding your business needs and challenges.</p>
        </div>

        <div>
            <div class="text-yellow-500 text-3xl mb-3">2</div>
            <h3 class="font-semibold mb-2">Planning</h3>
            <p class="text-gray-400 text-sm">Designing tailored solutions and strategies.</p>
        </div>

        <div>
            <div class="text-yellow-500 text-3xl mb-3">3</div>
            <h3 class="font-semibold mb-2">Implementation</h3>
            <p class="text-gray-400 text-sm">Executing solutions with precision and quality.</p>
        </div>

        <div>
            <div class="text-yellow-500 text-3xl mb-3">4</div>
            <h3 class="font-semibold mb-2">Support</h3>
            <p class="text-gray-400 text-sm">Continuous improvement and long-term support.</p>
        </div>

    </div>
</section>


{{-- CTA --}}
<section class="bg-gradient-to-r from-red-700 to-red-900 text-white text-center py-16 px-10">
    <h2 class="text-3xl font-bold mb-4">
        Ready to Transform Your Business?
    </h2>
    <p class="mb-6 text-red-200">
        Let us help you build smarter, safer, and more scalable technology solutions.
    </p>

    <a href="{{ url('/contact-us') }}" 
       class="bg-yellow-500 text-black px-8 py-3 rounded-full font-semibold hover:bg-yellow-400 transition">
        Get Started
    </a>
</section>

@endsection