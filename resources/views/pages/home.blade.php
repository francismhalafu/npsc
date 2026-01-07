@extends('layouts.app')

@section('content')
<!-- Hero Section -->
@if($heroPost)
<section class="hero-section" style="background-image: url('{{ $heroPost->featured_image ? Storage::url($heroPost->featured_image) : asset('storage/images/NPSC Logo.png') }}'); background-size: cover; background-position: center;">
    <div class="hero-overlay"></div>
    <div class="container-custom relative z-10">
        <div class="max-w-3xl">
            <div class="mb-4">
                @if($heroPost->category)
                <span class="inline-block bg-npsc-gold text-npsc-black text-sm font-bold px-4 py-2 rounded-full">
                    {{ $heroPost->category->name }}
                </span>
                @endif
            </div>
            <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold mb-6 animate-fade-in">
                {{ $heroPost->title }}
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-8 animate-fade-in">
                {{ $heroPost->excerpt }}
            </p>
            <div class="flex flex-wrap gap-4 animate-fade-in">
                <a href="{{ route('news.show', $heroPost->slug) }}" class="btn-primary">
                    Read Full Story
                </a>
                <a href="{{ route('news.index') }}" class="btn-outline border-white text-white hover:bg-white hover:text-npsc-black">
                    More News
                </a>
            </div>
            <div class="mt-8 text-sm text-gray-300">
                @if($heroPost->published_at)
                <span>{{ $heroPost->published_at->format('F d, Y') }}</span>
                <span class="mx-2">•</span>
                @endif
                <span>{{ $heroPost->views_count }} views</span>
            </div>
        </div>
    </div>
</section>
@endif

<!-- Featured Stories -->
@if($featuredPosts->count() > 0)
<section class="py-16 bg-white">
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 class="section-title">Featured Stories</h2>
            <p class="section-subtitle">Latest updates from Northern Pride Sports Club</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredPosts as $post)
            <article class="news-card">
                <a href="{{ route('news.show', $post->slug) }}">
                    @if($post->featured_image)
                    <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->featured_image_alt ?? $post->title }}" class="news-card-image">
                    @else
                    <div class="w-full h-64 bg-gradient-to-br from-npsc-gold to-npsc-blue flex items-center justify-center">
                        <img src="{{ asset('storage/images/NPSC Logo.png') }}" alt="NPSC" class="h-32 w-32 opacity-50">
                    </div>
                    @endif

                    <div class="news-card-content">
                        @if($post->category)
                        <span class="news-card-category">{{ $post->category->name }}</span>
                        @endif

                        <h3 class="news-card-title">{{ $post->title }}</h3>

                        <p class="news-card-excerpt">{{ $post->excerpt }}</p>

                        <div class="flex items-center justify-between">
                            @if($post->published_at)
                            <span class="news-card-date">{{ $post->published_at->format('M d, Y') }}</span>
                            @else
                            <span class="news-card-date">Draft</span>
                            @endif
                            <span class="text-npsc-gold text-sm font-semibold group-hover:translate-x-1 transition-transform">
                                Read More →
                            </span>
                        </div>
                    </div>
                </a>
            </article>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('news.index') }}" class="btn-secondary">
                View All News
            </a>
        </div>
    </div>
</section>
@endif

<!-- Impact Statistics -->
<section class="py-16 bg-npsc-black text-white">
    <div class="container-custom">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="animate-fade-in">
                <div class="font-heading text-5xl md:text-6xl font-bold text-npsc-gold mb-2">500+</div>
                <div class="text-gray-400 text-sm md:text-base">Young Players Trained</div>
            </div>
            <div class="animate-fade-in">
                <div class="font-heading text-5xl md:text-6xl font-bold text-npsc-gold mb-2">15+</div>
                <div class="text-gray-400 text-sm md:text-base">Community Programs</div>
            </div>
            <div class="animate-fade-in">
                <div class="font-heading text-5xl md:text-6xl font-bold text-npsc-gold mb-2">98%</div>
                <div class="text-gray-400 text-sm md:text-base">Parent Satisfaction</div>
            </div>
            <div class="animate-fade-in">
                <div class="font-heading text-5xl md:text-6xl font-bold text-npsc-gold mb-2">2025</div>
                <div class="text-gray-400 text-sm md:text-base">Strategic Vision Year</div>
            </div>
        </div>
    </div>
</section>

<!-- About Preview -->
<section class="py-16 bg-gray-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <img src="{{ asset('storage/images/NPSC Logo.png') }}" alt="NPSC Logo" class="w-full max-w-md mx-auto">
            </div>
            <div>
                <h2 class="section-title">Building Excellence Through Football</h2>
                <p class="text-npsc-gray mb-6 leading-relaxed">
                    Northern Pride Sports Club is Arusha's premier football development organization, committed to nurturing talent, building character, and creating lasting community impact through the beautiful game.
                </p>
                <p class="text-npsc-gray mb-6 leading-relaxed">
                    Our comprehensive programs span from grassroots initiatives to elite academy training, leveraging cutting-edge technology including GPS tracking and data analytics to develop the next generation of football stars.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-npsc-gold mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <h3 class="font-semibold text-npsc-black mb-1">Elite Training</h3>
                            <p class="text-sm text-npsc-gray">Professional coaching with GPS tracking</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-npsc-gold mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <h3 class="font-semibold text-npsc-black mb-1">Community Impact</h3>
                            <p class="text-sm text-npsc-gray">Grassroots programs across Arusha</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-npsc-gold mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <h3 class="font-semibold text-npsc-black mb-1">Character Building</h3>
                            <p class="text-sm text-npsc-gray">Life skills and leadership development</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-npsc-gold mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <h3 class="font-semibold text-npsc-black mb-1">Strategic Vision</h3>
                            <p class="text-sm text-npsc-gray">5-year growth plan 2025-2030</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('about.vision') }}" class="btn-primary">Our Vision & Mission</a>
                    <a href="{{ route('academy') }}" class="btn-secondary">Join Our Academy</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Programs Overview -->
<section class="py-16 bg-white">
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 class="section-title">Our Programs</h2>
            <p class="section-subtitle">Comprehensive football development for all ages and skill levels</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Academy Program -->
            <div class="card">
                <div class="h-48 bg-gradient-to-br from-npsc-gold to-npsc-blue flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-heading text-2xl font-bold text-npsc-black mb-3">Elite Academy</h3>
                    <p class="text-npsc-gray mb-4">
                        Professional training program with GPS tracking, video analysis, and expert coaching for ages 8-18. Develop your skills to the highest level.
                    </p>
                    <a href="{{ route('academy') }}" class="text-npsc-gold font-semibold hover:text-npsc-blue transition-colors">
                        Learn More →
                    </a>
                </div>
            </div>

            <!-- Grassroots Program -->
            <div class="card">
                <div class="h-48 bg-gradient-to-br from-npsc-blue to-npsc-gray flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-heading text-2xl font-bold text-npsc-black mb-3">Grassroots</h3>
                    <p class="text-npsc-gray mb-4">
                        Community-based programs making football accessible to all. Free clinics, school partnerships, and inclusive training for everyone.
                    </p>
                    <a href="{{ route('grassroots') }}" class="text-npsc-gold font-semibold hover:text-npsc-blue transition-colors">
                        Learn More →
                    </a>
                </div>
            </div>

            <!-- WMA Program -->
            <div class="card">
                <div class="h-48 bg-gradient-to-br from-green-500 to-npsc-blue flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-heading text-2xl font-bold text-npsc-black mb-3">WMA Initiative</h3>
                    <p class="text-npsc-gray mb-4">
                        Wakati Mali Academy partnership bringing advanced training methodologies and opportunities to our young athletes.
                    </p>
                    <a href="{{ route('grassroots') }}" class="text-npsc-gold font-semibold hover:text-npsc-blue transition-colors">
                        Learn More →
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
@if($partners->count() > 0)
<section class="py-16 bg-gray-50">
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 class="section-title">Our Partners & Sponsors</h2>
            <p class="section-subtitle">Proud to work with organizations that share our vision</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 items-center">
            @foreach($partners as $partner)
            <a href="{{ $partner->website_url }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center p-6 bg-white rounded-lg hover:shadow-xl transition-shadow duration-300 grayscale hover:grayscale-0">
                <img src="{{ Storage::url($partner->logo) }}" alt="{{ $partner->name }}" class="max-h-16 w-auto object-contain">
            </a>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('contact') }}" class="btn-outline">Become a Partner</a>
        </div>
    </div>
</section>
@endif

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-r from-npsc-blue to-npsc-black text-white">
    <div class="container-custom text-center">
        <h2 class="font-heading text-4xl md:text-5xl font-bold mb-6">Ready to Join Northern Pride?</h2>
        <p class="text-xl text-gray-200 mb-8 max-w-3xl mx-auto">
            Whether you're a young player looking to develop your skills, a parent seeking quality football education, or a partner wanting to make a difference in the community.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('academy') }}" class="btn-primary">Join Our Academy</a>
            <a href="{{ route('contact') }}" class="btn-outline border-white text-white hover:bg-white hover:text-npsc-black">Contact Us</a>
        </div>
    </div>
</section>
@endsection
