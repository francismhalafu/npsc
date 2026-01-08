@extends('layouts.app')

@section('content')
<!-- 1. Hero Section - Bold, Large, Immediate Impact -->
@if($heroPost)
<section class="hero-section">
    @if($heroPost->featured_image)
    <img src="{{ Storage::url($heroPost->featured_image) }}" alt="{{ $heroPost->title }}" loading="eager">
    @endif
    <div class="hero-overlay"></div>
    <div class="container-custom relative z-10">
        <div class="max-w-4xl py-16 md:py-20">
            @if($heroPost->category)
            <div class="mb-5">
                <span class="inline-block bg-npsc-gold text-npsc-dark-gray text-xs font-bold px-4 py-2 rounded-md uppercase tracking-wider">
                    {{ $heroPost->category->name }}
                </span>
            </div>
            @endif
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight animate-fade-in">
                {{ $heroPost->title }}
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-10 leading-relaxed max-w-3xl animate-fade-in">
                {{ $heroPost->excerpt }}
            </p>
            <div class="flex flex-wrap gap-4 animate-fade-in">
                <a href="{{ route('news.show', $heroPost->slug) }}" class="btn-primary">
                    Read Full Story
                </a>
                <a href="{{ route('news.index') }}" class="btn-outline border-white text-white hover:bg-white hover:text-npsc-dark-gray">
                    More News
                </a>
            </div>
        </div>
    </div>
</section>
@endif

<!-- 2. About/Mission Statement - Text-focused, Clean Background -->
<section class="py-20 md:py-32 bg-white">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="section-title mb-6">Building Excellence Through Football</h2>
            <p class="text-xl md:text-2xl leading-relaxed text-gray-600 mb-8">
                Northern Pride Sports Club is Arusha's premier football development organization, committed to nurturing talent, building character, and creating lasting community impact through the beautiful game.
            </p>
            <p class="text-lg leading-relaxed text-gray-600 mb-10">
                Our comprehensive programs span from grassroots initiatives to elite academy training, leveraging cutting-edge technology including GPS tracking and data analytics to develop the next generation of football stars.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('about.vision') }}" class="btn-primary">Our Vision & Mission</a>
                <a href="{{ route('academy') }}" class="btn-secondary">Join Our Academy</a>
            </div>
        </div>
    </div>
</section>

<!-- 3. Impact Statistics - Dark Section, Strong Visual Break -->
<section class="py-20 md:py-28 bg-npsc-dark-gray text-white">
    <div class="container-custom">
        <div class="text-center mb-14">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Our Impact</h2>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">Making a difference in the Arusha football community</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12">
            <div class="stat-card">
                <div class="stat-number">500+</div>
                <div class="stat-label">Young Players Trained</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">15+</div>
                <div class="stat-label">Community Programs</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">98%</div>
                <div class="stat-label">Parent Satisfaction</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">2025</div>
                <div class="stat-label">Strategic Vision Year</div>
            </div>
        </div>
    </div>
</section>

<!-- 4. Programs Overview - Card Grid, Warm Background -->
<section class="py-20 md:py-32 bg-warm">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="section-title mx-auto">Our Programs</h2>
            <p class="section-subtitle mx-auto text-center">Comprehensive football development pathways for all ages and skill levels</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10 mb-14">
            <!-- Academy Program -->
            <div class="card">
                <div class="h-56 bg-gradient-to-br from-npsc-gold to-npsc-brown flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Elite Academy</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Professional training program with GPS tracking, video analysis, and expert coaching for ages 8-18. Develop your skills to the highest level.
                    </p>
                    <a href="{{ route('academy') }}" class="inline-flex items-center text-npsc-gold font-semibold hover:text-npsc-brown transition-colors">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Grassroots Program -->
            <div class="card">
                <div class="h-56 bg-gradient-to-br from-npsc-brown to-gray-700 flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Grassroots</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Community-based programs making football accessible to all. Free clinics, school partnerships, and inclusive training for everyone.
                    </p>
                    <a href="{{ route('grassroots') }}" class="inline-flex items-center text-npsc-gold font-semibold hover:text-npsc-brown transition-colors">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- WMA Program -->
            <div class="card">
                <div class="h-56 bg-gradient-to-br from-green-600 to-npsc-brown flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">WMA Initiative</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Wakati Mali Academy partnership bringing advanced training methodologies and opportunities to our young athletes.
                    </p>
                    <a href="{{ route('grassroots') }}" class="inline-flex items-center text-npsc-gold font-semibold hover:text-npsc-brown transition-colors">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Key Features Grid -->
        <div class="max-w-5xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-xl p-6 shadow-sm text-center">
                    <div class="feature-icon mx-auto">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-lg text-gray-800 mb-2">Elite Training</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">Professional coaching & GPS tracking</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-sm text-center">
                    <div class="feature-icon mx-auto">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-lg text-gray-800 mb-2">Community Impact</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">Grassroots programs across Arusha</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-sm text-center">
                    <div class="feature-icon mx-auto">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-lg text-gray-800 mb-2">Character Building</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">Life skills & leadership development</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-sm text-center">
                    <div class="feature-icon mx-auto">
                        <svg fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-lg text-gray-800 mb-2">Strategic Vision</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">5-year growth plan 2025-2030</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. Featured News Stories - News Cards, White Background -->
@if($featuredPosts->count() > 0)
<section class="py-20 md:py-32 bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="section-title mx-auto">Latest News</h2>
            <p class="section-subtitle mx-auto text-center">Stay informed with the latest updates from Northern Pride Sports Club</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
            @foreach($featuredPosts as $post)
            <article class="news-card">
                <a href="{{ route('news.show', $post->slug) }}">
                    <div class="image-overlay">
                        @if($post->featured_image)
                        <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->featured_image_alt ?? $post->title }}" class="news-card-image" loading="lazy">
                        @else
                        <div class="w-full h-[260px] bg-gradient-to-br from-npsc-gold to-npsc-brown flex items-center justify-center">
                            <svg class="w-20 h-20 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                            </svg>
                        </div>
                        @endif
                    </div>

                    <div class="news-card-content">
                        @if($post->category)
                        <span class="news-card-category">{{ $post->category->name }}</span>
                        @endif

                        <h3 class="news-card-title">{{ $post->title }}</h3>

                        <p class="news-card-excerpt">{{ $post->excerpt }}</p>

                        <div class="flex items-center justify-between mt-auto">
                            @if($post->published_at)
                            <span class="news-card-date">{{ $post->published_at->format('M d, Y') }}</span>
                            @else
                            <span class="news-card-date">Draft</span>
                            @endif
                            <span class="text-npsc-gold text-sm font-semibold">
                                Read More →
                            </span>
                        </div>
                    </div>
                </a>
            </article>
            @endforeach
        </div>

        <div class="text-center mt-14">
            <a href="{{ route('news.index') }}" class="btn-secondary">
                View All News
            </a>
        </div>
    </div>
</section>
@endif

<!-- 6. Partners Section - Beige Background, Logo Grid -->
@if($partners->count() > 0)
<section class="py-20 md:py-28 bg-beige">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="section-title mx-auto">Our Partners</h2>
            <p class="section-subtitle mx-auto text-center">Proud to work with organizations that share our vision</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 items-center">
            @foreach($partners as $partner)
            <a href="{{ $partner->website_url }}" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center p-8 bg-white rounded-xl hover:shadow-lg transition-all duration-300 grayscale hover:grayscale-0">
                <img src="{{ Storage::url($partner->logo) }}" alt="{{ $partner->name }}" class="max-h-16 w-auto object-contain">
            </a>
            @endforeach
        </div>

        <div class="text-center mt-14">
            <a href="{{ route('contact') }}" class="btn-outline">Become a Partner</a>
        </div>
    </div>
</section>
@endif

<!-- 7. Call to Action - Dark Background, Final Push -->
<section class="py-24 md:py-32 bg-npsc-dark-gray text-white">
    <div class="container-custom text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6 max-w-4xl mx-auto leading-tight">Ready to Join Northern Pride?</h2>
        <p class="text-xl text-gray-300 mb-12 max-w-3xl mx-auto leading-relaxed">
            Whether you're a young player looking to develop your skills, a parent seeking quality football education, or a partner wanting to make a difference in the community.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('academy') }}" class="btn-primary">Join Our Academy</a>
            <a href="{{ route('contact') }}" class="btn-outline border-white text-white hover:bg-white hover:text-npsc-dark-gray">Contact Us</a>
        </div>
    </div>
</section>
@endsection
