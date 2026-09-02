{{-- HERO VIDEO --}}
@php
    $title = $title ?? 'Default Title';
    $subtitle = $subtitle ?? '';
    $video = $video ?? null;
    $ctaText = $ctaText ?? null;
    $ctaLink = $ctaLink ?? null;
@endphp

<section class="relative w-full overflow-hidden 
    {{ isset($video) ? 'min-h-[65vh]' : 'py-20 bg-gray-100' }}">

    @if (!empty($video))
        <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover">
            <source src="{{ asset($video) }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-black/40"></div>
    @endif

    <div class="relative z-10 max-w-4xl mx-auto px-6 text-center 
        {{ isset($video) ? 'text-white flex flex-col justify-center min-h-[65vh]' : 'text-gray-800' }}">
        
        <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $title }}</h1>
        <p class="text-lg mb-6">{{ $subtitle }}</p>

        @if (!empty($ctaText) && !empty($ctaLink))
            <a href="{{ $ctaLink }}"
               class="bg-red-600 text-white font-semibold px-6 py-3 rounded-full hover:bg-red-500 transition">
               {{ $ctaText }}
            </a>
        @endif
    </div>
</section>