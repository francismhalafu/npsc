@extends('layouts.app', [
    'title' => $post->meta_title ?? $post->title . ' - Northern Pride Sports Club',
    'metaDescription' => $post->meta_description ?? $post->excerpt,
    'metaKeywords' => $post->meta_keywords
])

@section('content')
<!-- Article Header -->
<article class="bg-white">
    <!-- Featured Image -->
    @if($post->featured_image)
    <div class="relative h-96 md:h-[500px] bg-gray-900">
        <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->featured_image_alt ?? $post->title }}" class="w-full h-full object-cover opacity-90">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
    </div>
    @endif

    <!-- Article Content -->
    <div class="container-custom py-12">
        <div class="max-w-4xl mx-auto">
            <!-- Breadcrumb -->
            <nav class="flex items-center text-sm text-npsc-gray mb-6">
                <a href="{{ route('home') }}" class="hover:text-npsc-gold transition-colors">Home</a>
                <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <a href="{{ route('news.index') }}" class="hover:text-npsc-gold transition-colors">News</a>
                @if($post->category)
                <svg class="w-4 h-4 mx-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span class="text-npsc-gold">{{ $post->category->name }}</span>
                @endif
            </nav>

            <!-- Category Badge -->
            @if($post->category)
            <div class="mb-4">
                <span class="inline-block bg-npsc-gold text-npsc-black text-sm font-bold px-4 py-2 rounded-full">
                    {{ $post->category->name }}
                </span>
            </div>
            @endif

            <!-- Title -->
            <h1 class="font-heading text-4xl md:text-5xl font-bold text-npsc-black mb-6">
                {{ $post->title }}
            </h1>

            <!-- Meta Info -->
            <div class="flex flex-wrap items-center gap-6 pb-6 mb-6 border-b border-gray-200">
                <div class="flex items-center text-npsc-gray">
                    <svg class="w-5 h-5 mr-2 text-npsc-gold" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="font-medium">{{ $post->author->name ?? 'NPSC Admin' }}</span>
                </div>
                @if($post->published_at)
                <div class="flex items-center text-npsc-gray">
                    <svg class="w-5 h-5 mr-2 text-npsc-gold" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                    </svg>
                    <span>{{ $post->published_at->format('F d, Y') }}</span>
                </div>
                @endif
                <div class="flex items-center text-npsc-gray">
                    <svg class="w-5 h-5 mr-2 text-npsc-gold" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span>{{ $post->views_count }} views</span>
                </div>
            </div>

            <!-- Article Body -->
            <div class="prose prose-lg max-w-none mb-12">
                {!! $post->content !!}
            </div>

            <!-- Share Buttons -->
            <div class="flex items-center gap-4 py-6 border-y border-gray-200 mb-12">
                <span class="font-semibold text-npsc-gray">Share:</span>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('news.show', $post->slug)) }}" target="_blank" class="flex items-center justify-center w-10 h-10 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('news.show', $post->slug)) }}&text={{ urlencode($post->title) }}" target="_blank" class="flex items-center justify-center w-10 h-10 bg-sky-500 text-white rounded-full hover:bg-sky-600 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                    </svg>
                </a>
                <a href="https://wa.me/?text={{ urlencode($post->title . ' - ' . route('news.show', $post->slug)) }}" target="_blank" class="flex items-center justify-center w-10 h-10 bg-green-500 text-white rounded-full hover:bg-green-600 transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</article>

<!-- Related Articles -->
@if($relatedPosts->count() > 0)
<section class="py-16 bg-gray-50">
    <div class="container-custom">
        <h2 class="section-title text-center mb-12">Related Articles</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedPosts as $relatedPost)
            <article class="news-card">
                <a href="{{ route('news.show', $relatedPost->slug) }}">
                    @if($relatedPost->featured_image)
                    <img src="{{ Storage::url($relatedPost->featured_image) }}" alt="{{ $relatedPost->title }}" class="news-card-image">
                    @else
                    <div class="w-full h-64 bg-gradient-to-br from-npsc-gold to-npsc-blue flex items-center justify-center">
                        <img src="{{ asset('storage/images/NPSC Logo.png') }}" alt="NPSC" class="h-32 w-32 opacity-50">
                    </div>
                    @endif

                    <div class="news-card-content">
                        @if($relatedPost->category)
                        <span class="news-card-category">{{ $relatedPost->category->name }}</span>
                        @endif

                        <h3 class="news-card-title">{{ $relatedPost->title }}</h3>

                        <p class="news-card-excerpt">{{ $relatedPost->excerpt }}</p>

                        @if($relatedPost->published_at)
                        <span class="news-card-date">{{ $relatedPost->published_at->format('M d, Y') }}</span>
                        @else
                        <span class="news-card-date">Draft</span>
                        @endif
                    </div>
                </a>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Call to Action -->
<section class="py-16 bg-npsc-blue text-white">
    <div class="container-custom text-center">
        <h2 class="font-heading text-3xl md:text-4xl font-bold mb-4">Stay Updated</h2>
        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
            Subscribe to our newsletter to receive the latest news, match updates, and academy programs directly in your inbox.
        </p>
        <form action="{{ route('newsletter.subscribe') }}" method="POST" class="max-w-md mx-auto flex gap-2">
            @csrf
            <input type="email" name="email" placeholder="Your email address" required class="flex-1 px-6 py-3 rounded-lg text-npsc-black focus:outline-none focus:ring-2 focus:ring-npsc-gold">
            <button type="submit" class="btn-primary whitespace-nowrap">Subscribe</button>
        </form>
    </div>
</section>
@endsection

@push('styles')
<style>
    .prose {
        color: #1f2937;
    }
    .prose h2 {
        @apply font-heading text-3xl font-bold text-npsc-black mt-8 mb-4;
    }
    .prose h3 {
        @apply font-heading text-2xl font-bold text-npsc-black mt-6 mb-3;
    }
    .prose p {
        @apply mb-4 leading-relaxed;
    }
    .prose a {
        @apply text-npsc-gold hover:text-npsc-blue font-medium transition-colors;
    }
    .prose img {
        @apply rounded-lg shadow-lg my-8;
    }
    .prose ul, .prose ol {
        @apply mb-4 ml-6;
    }
    .prose li {
        @apply mb-2;
    }
    .prose blockquote {
        @apply border-l-4 border-npsc-gold pl-6 py-2 my-6 italic text-npsc-gray bg-gray-50 rounded-r-lg;
    }
</style>
@endpush
