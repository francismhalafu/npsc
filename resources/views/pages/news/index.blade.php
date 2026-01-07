@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-npsc-blue to-npsc-black text-white py-16">
    <div class="container-custom">
        <h1 class="font-heading text-4xl md:text-5xl font-bold mb-4">News & Updates</h1>
        <p class="text-xl text-gray-200">Stay informed with the latest from Northern Pride Sports Club</p>
    </div>
</section>

<!-- Search & Filter Section -->
<section class="bg-white py-8 shadow-md sticky top-0 z-40">
    <div class="container-custom">
        <form action="{{ route('news.index') }}" method="GET" class="flex flex-col md:flex-row gap-4">
            <!-- Search Input -->
            <div class="flex-1">
                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Search articles..."
                    class="form-input"
                >
            </div>

            <!-- Category Filter -->
            <div class="w-full md:w-64">
                <select name="category" class="form-input">
                    <option value="">All Categories</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
            </div>

            <!-- Search Button -->
            <button type="submit" class="btn-primary">
                <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                Search
            </button>

            @if(request()->hasAny(['search', 'category', 'month', 'year']))
            <a href="{{ route('news.index') }}" class="btn-outline">
                Clear Filters
            </a>
            @endif
        </form>
    </div>
</section>

<!-- News Grid -->
<section class="py-16 bg-gray-50">
    <div class="container-custom">
        @if($posts->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($posts as $post)
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

                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <div class="flex items-center text-xs text-npsc-gray">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                                {{ $post->author->name ?? 'NPSC' }}
                            </div>
                            @if($post->published_at)
                            <span class="news-card-date">{{ $post->published_at->format('M d, Y') }}</span>
                            @else
                            <span class="news-card-date">Draft</span>
                            @endif
                        </div>

                        <div class="flex items-center text-xs text-npsc-gray mt-2">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                            </svg>
                            {{ $post->views_count }} views
                        </div>
                    </div>
                </a>
            </article>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-12">
            {{ $posts->links() }}
        </div>

        @else
        <div class="text-center py-16">
            <svg class="w-24 h-24 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h3 class="font-heading text-2xl font-bold text-npsc-gray mb-2">No articles found</h3>
            <p class="text-npsc-gray mb-6">Try adjusting your search or filter criteria</p>
            <a href="{{ route('news.index') }}" class="btn-primary">View All News</a>
        </div>
        @endif
    </div>
</section>
@endsection
