@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-npsc-blue to-npsc-black text-white py-16">
    <div class="container-custom">
        <h1 class="font-heading text-4xl md:text-5xl font-bold mb-4">Leadership Team</h1>
        <p class="text-xl text-gray-200">Meet the people driving Northern Pride forward</p>
    </div>
</section>

<!-- Leadership Introduction -->
<section class="py-16 bg-white">
    <div class="container-custom">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="section-title">Experienced Leadership</h2>
            <p class="text-lg text-npsc-gray leading-relaxed">
                Our leadership team brings together decades of experience in football development, business management, and community development. Together, we're committed to building Tanzania's premier football organization.
            </p>
        </div>

        <!-- Executive Team -->
        <div class="mb-16">
            <h3 class="font-heading text-2xl font-bold text-npsc-black mb-8 text-center">Executive Team</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="card group">
                    <div class="h-80 bg-gradient-to-br from-npsc-gold to-npsc-blue flex items-center justify-center overflow-hidden">
                        <svg class="w-32 h-32 text-white opacity-50" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h4 class="font-heading text-xl font-bold text-npsc-black mb-1">Francis Mhalafu</h4>
                        <p class="text-npsc-gold font-semibold mb-3">Founder & President</p>
                        <p class="text-npsc-gray text-sm leading-relaxed">
                            Visionary leader with a passion for developing Tanzanian football talent and creating opportunities for youth through sports.
                        </p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="card group">
                    <div class="h-80 bg-gradient-to-br from-npsc-blue to-npsc-gray flex items-center justify-center overflow-hidden">
                        <svg class="w-32 h-32 text-white opacity-50" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h4 class="font-heading text-xl font-bold text-npsc-black mb-1">Technical Director</h4>
                        <p class="text-npsc-gold font-semibold mb-3">Head of Football Operations</p>
                        <p class="text-npsc-gray text-sm leading-relaxed">
                            UEFA-licensed coach with 15+ years experience in player development and tactical training methodologies.
                        </p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="card group">
                    <div class="h-80 bg-gradient-to-br from-green-500 to-npsc-blue flex items-center justify-center overflow-hidden">
                        <svg class="w-32 h-32 text-white opacity-50" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h4 class="font-heading text-xl font-bold text-npsc-black mb-1">Academy Director</h4>
                        <p class="text-npsc-gold font-semibold mb-3">Youth Development Lead</p>
                        <p class="text-npsc-gray text-sm leading-relaxed">
                            Specialist in youth football development with experience in top European academy systems.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coaching Staff -->
        <div class="mb-16">
            <h3 class="font-heading text-2xl font-bold text-npsc-black mb-8 text-center">Coaching Staff</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="card">
                    <div class="h-64 bg-gradient-to-br from-npsc-gold to-yellow-600 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white opacity-50" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="font-heading font-bold text-npsc-black mb-1">Head Coach</h4>
                        <p class="text-sm text-npsc-gold font-semibold mb-2">First Team</p>
                        <p class="text-xs text-npsc-gray">CAF A License</p>
                    </div>
                </div>

                <div class="card">
                    <div class="h-64 bg-gradient-to-br from-npsc-blue to-purple-600 flex items-center justify-center">
                        <svg class="w-24 h-24 text-white opacity-50" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="font-heading font-bold text-npsc-black mb-1">U-18 Coach</h4>
                        <p class="text-sm text-npsc-gold font-semibold mb-2">Youth Academy</p>
                        <p class="text-xs text-npsc-gray">CAF B License</p>
                    </div>
                </div>

                <div class="card">
                    <div class="h-64 bg-gradient-to-br from-red-500 to-npsc-gold flex items-center justify-center">
                        <svg class="w-24 h-24 text-white opacity-50" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="font-heading font-bold text-npsc-black mb-1">U-15 Coach</h4>
                        <p class="text-sm text-npsc-gold font-semibold mb-2">Youth Academy</p>
                        <p class="text-xs text-npsc-gray">CAF C License</p>
                    </div>
                </div>

                <div class="card">
                    <div class="h-64 bg-gradient-to-br from-green-500 to-npsc-blue flex items-center justify-center">
                        <svg class="w-24 h-24 text-white opacity-50" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="font-heading font-bold text-npsc-black mb-1">Grassroots Coordinator</h4>
                        <p class="text-sm text-npsc-gold font-semibold mb-2">Community Programs</p>
                        <p class="text-xs text-npsc-gray">CAF Grassroots</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Support Staff -->
        <div>
            <h3 class="font-heading text-2xl font-bold text-npsc-black mb-8 text-center">Support Staff</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-6 text-center">
                    <div class="inline-block p-4 bg-npsc-gold rounded-full mb-4">
                        <svg class="w-12 h-12 text-npsc-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-heading text-lg font-bold text-npsc-black mb-2">Sports Medicine Team</h4>
                    <p class="text-sm text-npsc-gray">Physiotherapists and medical staff ensuring player health and injury prevention</p>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 text-center">
                    <div class="inline-block p-4 bg-npsc-blue rounded-full mb-4">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h4 class="font-heading text-lg font-bold text-npsc-black mb-2">Performance Analysts</h4>
                    <p class="text-sm text-npsc-gray">GPS tracking and data analysis specialists optimizing player development</p>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 text-center">
                    <div class="inline-block p-4 bg-green-500 rounded-full mb-4">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h4 class="font-heading text-lg font-bold text-npsc-black mb-2">Education Coordinators</h4>
                    <p class="text-sm text-npsc-gray">Supporting player education and personal development programs</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advisory Board -->
<section class="py-16 bg-gray-50">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="section-title">Advisory Board</h2>
            <p class="section-subtitle">Strategic guidance from industry experts</p>

            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
                <p class="text-lg text-npsc-gray leading-relaxed mb-8">
                    Our advisory board consists of experienced professionals from football, business, education, and community development sectors. They provide strategic guidance to ensure NPSC achieves its ambitious 2025-2030 goals.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
                    <div class="flex items-start p-4 bg-gray-50 rounded-lg">
                        <div class="flex-shrink-0 w-12 h-12 bg-npsc-gold rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-npsc-black" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-npsc-black mb-1">Football Development Experts</h4>
                            <p class="text-sm text-npsc-gray">Former professional players and international coaches</p>
                        </div>
                    </div>

                    <div class="flex items-start p-4 bg-gray-50 rounded-lg">
                        <div class="flex-shrink-0 w-12 h-12 bg-npsc-gold rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-npsc-black" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-npsc-black mb-1">Business Leaders</h4>
                            <p class="text-sm text-npsc-gray">Executives with expertise in sustainable growth and revenue generation</p>
                        </div>
                    </div>

                    <div class="flex items-start p-4 bg-gray-50 rounded-lg">
                        <div class="flex-shrink-0 w-12 h-12 bg-npsc-gold rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-npsc-black" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-npsc-black mb-1">Sports Science Specialists</h4>
                            <p class="text-sm text-npsc-gray">PhDs in performance optimization and player development</p>
                        </div>
                    </div>

                    <div class="flex items-start p-4 bg-gray-50 rounded-lg">
                        <div class="flex-shrink-0 w-12 h-12 bg-npsc-gold rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-npsc-black" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-npsc-black mb-1">Community Leaders</h4>
                            <p class="text-sm text-npsc-gray">Local influencers ensuring grassroots impact and accessibility</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Join Our Team CTA -->
<section class="py-16 bg-npsc-black text-white">
    <div class="container-custom text-center">
        <h2 class="font-heading text-3xl md:text-4xl font-bold mb-4">Join Our Team</h2>
        <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
            We're always looking for passionate individuals who share our vision. Explore opportunities in coaching, administration, and community development.
        </p>
        <a href="{{ route('contact') }}" class="btn-primary">View Open Positions</a>
    </div>
</section>
@endsection
