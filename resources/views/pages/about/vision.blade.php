@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-npsc-blue to-npsc-black text-white py-16">
    <div class="container-custom">
        <h1 class="font-heading text-4xl md:text-5xl font-bold mb-4">Our Vision & Mission</h1>
        <p class="text-xl text-gray-200">Building excellence through football in Tanzania</p>
    </div>
</section>

<!-- Vision Section -->
<section class="py-16 bg-white">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <div class="inline-block p-4 bg-npsc-gold rounded-full mb-6">
                    <svg class="w-16 h-16 text-npsc-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
                <h2 class="section-title">Our Vision</h2>
            </div>

            <div class="bg-gradient-to-br from-npsc-gold to-npsc-blue text-white rounded-2xl shadow-2xl p-8 md:p-12 mb-12">
                <p class="text-2xl md:text-3xl font-heading font-bold text-center leading-relaxed">
                    To be Tanzania's premier football development organization, recognized internationally for excellence in player development, community impact, and sustainable growth.
                </p>
            </div>

            <div class="prose prose-lg max-w-none text-npsc-gray">
                <p class="text-lg leading-relaxed mb-6">
                    Northern Pride Sports Club envisions a future where Tanzanian football talent competes and excels at the highest international levels. We see a thriving football ecosystem in Arusha and beyond, where every young person has access to quality football education, cutting-edge training facilities, and pathways to professional careers.
                </p>
                <p class="text-lg leading-relaxed">
                    By 2030, we aim to have developed multiple players who represent Tanzania at international tournaments, established partnerships with elite European clubs, and created a self-sustaining model that generates revenue while maintaining our commitment to community development and grassroots football.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-16 bg-gray-50">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <div class="inline-block p-4 bg-npsc-blue rounded-full mb-6">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h2 class="section-title">Our Mission</h2>
            </div>

            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 mb-12">
                <p class="text-xl md:text-2xl font-heading font-semibold text-npsc-black text-center leading-relaxed mb-8">
                    To develop world-class football talent while building character, creating opportunities, and making lasting positive impact in our community.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-12 h-12 bg-npsc-gold rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-npsc-black" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-heading font-bold text-lg text-npsc-black mb-2">Excellence in Training</h3>
                            <p class="text-npsc-gray">Provide world-class football education using GPS tracking, video analysis, and proven European methodologies.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-12 h-12 bg-npsc-gold rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-npsc-black" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-heading font-bold text-lg text-npsc-black mb-2">Character Development</h3>
                            <p class="text-npsc-gray">Build disciplined, respectful, and resilient individuals who excel both on and off the pitch.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-12 h-12 bg-npsc-gold rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-npsc-black" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-heading font-bold text-lg text-npsc-black mb-2">Community Impact</h3>
                            <p class="text-npsc-gray">Make football accessible through grassroots programs, free clinics, and school partnerships.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-12 h-12 bg-npsc-gold rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-npsc-black" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-heading font-bold text-lg text-npsc-black mb-2">Sustainable Growth</h3>
                            <p class="text-npsc-gray">Build a financially sustainable model through diverse revenue streams and strategic partnerships.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="py-16 bg-white">
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 class="section-title">Our Core Values</h2>
            <p class="section-subtitle">The principles that guide everything we do</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="card text-center">
                <div class="h-48 bg-gradient-to-br from-npsc-gold to-npsc-blue flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-heading text-2xl font-bold text-npsc-black mb-3">Excellence</h3>
                    <p class="text-npsc-gray">We pursue the highest standards in everything we do, from training methodologies to player care and community engagement.</p>
                </div>
            </div>

            <div class="card text-center">
                <div class="h-48 bg-gradient-to-br from-npsc-blue to-npsc-gray flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-heading text-2xl font-bold text-npsc-black mb-3">Integrity</h3>
                    <p class="text-npsc-gray">We operate with honesty, transparency, and accountability in all our dealings with players, parents, and partners.</p>
                </div>
            </div>

            <div class="card text-center">
                <div class="h-48 bg-gradient-to-br from-green-500 to-npsc-blue flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-heading text-2xl font-bold text-npsc-black mb-3">Community</h3>
                    <p class="text-npsc-gray">We believe in giving back and using football as a tool for positive social change and youth development.</p>
                </div>
            </div>

            <div class="card text-center">
                <div class="h-48 bg-gradient-to-br from-npsc-gold to-yellow-600 flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-heading text-2xl font-bold text-npsc-black mb-3">Innovation</h3>
                    <p class="text-npsc-gray">We embrace technology and modern training methods, constantly seeking new ways to improve player development.</p>
                </div>
            </div>

            <div class="card text-center">
                <div class="h-48 bg-gradient-to-br from-red-500 to-npsc-blue flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-heading text-2xl font-bold text-npsc-black mb-3">Passion</h3>
                    <p class="text-npsc-gray">Our love for football drives us to inspire the same passion in every young player who joins our programs.</p>
                </div>
            </div>

            <div class="card text-center">
                <div class="h-48 bg-gradient-to-br from-purple-500 to-npsc-blue flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-heading text-2xl font-bold text-npsc-black mb-3">Progress</h3>
                    <p class="text-npsc-gray">We measure success through continuous improvement and the holistic development of every player.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-r from-npsc-blue to-npsc-black text-white">
    <div class="container-custom text-center">
        <h2 class="font-heading text-3xl md:text-4xl font-bold mb-4">Be Part of Our Vision</h2>
        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
            Join us in building the future of Tanzanian football. Whether as a player, partner, or supporter.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('academy') }}" class="btn-primary">Join Our Academy</a>
            <a href="{{ route('contact') }}" class="btn-outline border-white text-white hover:bg-white hover:text-npsc-black">Get Involved</a>
        </div>
    </div>
</section>
@endsection
