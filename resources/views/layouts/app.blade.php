<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Advancelink')</title>
    @vite('resources/css/app.css')
</head>
{{-- <body class="min-h-screen text-gray-800 bg-gradient-to-r from-[#31539f] via-[#31539f] to-[#233763]"> --}}
{{-- <body class="min-h-screen text-gray-800 bg-gradient-to-r from-[#3B5CA4] via-[#3B5CA4] to-[#2D3E65]"> --}}

    {{-- HEADER --}}
    @include('partials.header')

    {{-- MAIN CONTENT --}}
    @include('partials.main')

    {{-- FOOTER --}}
    @include('partials.footer')

    {{-- Alpine.js for hover functionality --}}
    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>