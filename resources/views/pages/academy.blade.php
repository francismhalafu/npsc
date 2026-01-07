@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-npsc-blue to-npsc-black text-white py-16">
    <div class="container-custom">
        <h1 class="font-heading text-4xl md:text-5xl font-bold mb-4">Elite Academy</h1>
        <p class="text-xl text-gray-200">Professional football development for ages 8-18</p>
    </div>
</section>

<!-- Academy Overview -->
<section class="py-16 bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
            <div>
                <h2 class="section-title">World-Class Training Program</h2>
                <p class="text-npsc-gray mb-6 leading-relaxed">
                    Our elite academy program combines European coaching methodologies with cutting-edge technology to develop the next generation of Tanzanian football stars.
                </p>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-npsc-gold mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <h3 class="font-semibold text-npsc-black">GPS Tracking & Performance Analysis</h3>
                            <p class="text-sm text-npsc-gray">Track every movement, analyze performance, optimize training</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-npsc-gold mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <h3 class="font-semibold text-npsc-black">UEFA-Licensed Coaches</h3>
                            <p class="text-sm text-npsc-gray">Learn from professionally qualified coaching staff</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-npsc-gold mr-3 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <h3 class="font-semibold text-npsc-black">International Exposure</h3>
                            <p class="text-sm text-npsc-gray">Opportunities to train and play abroad</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="bg-gradient-to-br from-npsc-gold to-npsc-blue rounded-2xl shadow-2xl p-12 text-white text-center">
                    <svg class="w-32 h-32 mx-auto mb-6 opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    <h3 class="font-heading text-3xl font-bold mb-4">Join Our Academy</h3>
                    <p class="mb-6">Start your journey to professional football</p>
                    <a href="{{ route('contact') }}?inquiry_type=academy" class="btn-outline border-white text-white hover:bg-white hover:text-npsc-black">Apply Now</a>
                </div>
            </div>
        </div>

        <!-- Age Groups -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="card text-center">
                <div class="h-40 bg-gradient-to-br from-npsc-gold to-yellow-600 flex items-center justify-center">
                    <div class="text-white">
                        <div class="font-heading text-4xl font-bold">U-10</div>
                        <div class="text-sm">Ages 8-10</div>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-heading font-bold text-npsc-black mb-2">Foundation</h3>
                    <p class="text-sm text-npsc-gray">Basic skills, coordination, love for the game</p>
                </div>
            </div>

            <div class="card text-center">
                <div class="h-40 bg-gradient-to-br from-npsc-blue to-purple-600 flex items-center justify-center">
                    <div class="text-white">
                        <div class="font-heading text-4xl font-bold">U-13</div>
                        <div class="text-sm">Ages 11-13</div>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-heading font-bold text-npsc-black mb-2">Development</h3>
                    <p class="text-sm text-npsc-gray">Technical skills, tactical awareness</p>
                </div>
            </div>

            <div class="card text-center">
                <div class="h-40 bg-gradient-to-br from-green-500 to-npsc-blue flex items-center justify-center">
                    <div class="text-white">
                        <div class="font-heading text-4xl font-bold">U-15</div>
                        <div class="text-sm">Ages 14-15</div>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-heading font-bold text-npsc-black mb-2">Advancement</h3>
                    <p class="text-sm text-npsc-gray">Advanced tactics, physical conditioning</p>
                </div>
            </div>

            <div class="card text-center">
                <div class="h-40 bg-gradient-to-br from-red-500 to-npsc-gold flex items-center justify-center">
                    <div class="text-white">
                        <div class="font-heading text-4xl font-bold">U-18</div>
                        <div class="text-sm">Ages 16-18</div>
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-heading font-bold text-npsc-black mb-2">Elite</h3>
                    <p class="text-sm text-npsc-gray">Pre-professional preparation</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Offer -->
<section class="py-16 bg-gray-50">
    <div class="container-custom">
        <h2 class="section-title text-center mb-12">What We Offer</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-8 text-center">
                <div class="inline-block p-4 bg-npsc-gold rounded-full mb-4">
                    <svg class="w-12 h-12 text-npsc-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-npsc-black mb-3">Professional Training</h3>
                <p class="text-npsc-gray">4-5 training sessions per week with qualified coaches</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 text-center">
                <div class="inline-block p-4 bg-npsc-blue rounded-full mb-4">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-npsc-black mb-3">Performance Tracking</h3>
                <p class="text-npsc-gray">GPS tracking and detailed performance reports</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 text-center">
                <div class="inline-block p-4 bg-green-500 rounded-full mb-4">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-npsc-black mb-3">Holistic Development</h3>
                <p class="text-npsc-gray">Character building, education support, life skills</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 text-center">
                <div class="inline-block p-4 bg-purple-500 rounded-full mb-4">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path>
                    </svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-npsc-black mb-3">Competitive Matches</h3>
                <p class="text-npsc-gray">Regular fixtures against top-level opponents</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 text-center">
                <div class="inline-block p-4 bg-red-500 rounded-full mb-4">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-npsc-black mb-3">Pathway to Pro</h3>
                <p class="text-npsc-gray">Connections with professional clubs worldwide</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-8 text-center">
                <div class="inline-block p-4 bg-yellow-500 rounded-full mb-4">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="font-heading text-xl font-bold text-npsc-black mb-3">Parent Engagement</h3>
                <p class="text-npsc-gray">Regular updates and family involvement programs</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 bg-gradient-to-r from-npsc-blue to-npsc-black text-white">
    <div class="container-custom text-center">
        <h2 class="font-heading text-3xl md:text-4xl font-bold mb-4">Ready to Join Our Academy?</h2>
        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
            Applications are now open. Start your journey to becoming a professional footballer.
        </p>
        <a href="{{ route('contact') }}?inquiry_type=academy" class="btn-primary">Apply Today</a>
    </div>
</section>
@endsection
