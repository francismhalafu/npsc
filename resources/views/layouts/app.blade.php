<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Northern Pride Sports Club - Elite Football Development in Arusha, Tanzania' }}</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="{{ $metaDescription ?? 'Northern Pride Sports Club (NPSC) - Leading football club in Arusha, Tanzania. Premier youth academy, grassroots programs, and elite player development.' }}">
    <meta name="keywords" content="{{ $metaKeywords ?? 'Northern Pride Sports Club, NPSC, Arusha Football, Tanzania Football, Youth Academy, Grassroots Football, Player Development' }}">

    <!-- Open Graph -->
    <meta property="og:title" content="{{ $title ?? 'Northern Pride Sports Club' }}">
    <meta property="og:description" content="{{ $metaDescription ?? 'Elite Football Development in Arusha, Tanzania' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('storage/images/NPSC Logo.png') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('storage/images/NPSC Logo.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="bg-gray-50 font-sans antialiased" x-data="{ mobileMenuOpen: false }">

    @include('partials.header')

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Back to Top Button -->
    <button
        x-data="{ show: false }"
        @scroll.window="show = window.pageYOffset > 300"
        x-show="show"
        x-transition
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="fixed bottom-8 right-8 bg-npsc-gold text-npsc-black p-4 rounded-full shadow-lg hover:bg-npsc-gold/90 transition-all z-50"
        style="display: none;"
    >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>

    @stack('scripts')
</body>
</html>
