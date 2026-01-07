@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-npsc-blue to-npsc-black text-white py-16">
    <div class="container-custom">
        <h1 class="font-heading text-4xl md:text-5xl font-bold mb-4">Strategic Plan 2025-2030</h1>
        <p class="text-xl text-gray-200">Our roadmap to becoming Tanzania's premier football organization</p>
    </div>
</section>

<!-- Strategic Plan Overview -->
<section class="py-16 bg-white">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="section-title">Five-Year Vision</h2>
                <p class="text-lg text-npsc-gray leading-relaxed">
                    Our comprehensive strategic plan outlines ambitious goals across player development, infrastructure, community impact, and financial sustainability.
                </p>
            </div>

            <!-- Key Highlights -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <div class="bg-gradient-to-br from-npsc-gold to-yellow-600 rounded-xl p-8 text-white">
                    <div class="text-5xl font-heading font-bold mb-2">500+</div>
                    <div class="text-xl font-semibold mb-2">Players Trained</div>
                    <p class="text-sm opacity-90">Target enrollment across all age groups by 2030</p>
                </div>

                <div class="bg-gradient-to-br from-npsc-blue to-purple-600 rounded-xl p-8 text-white">
                    <div class="text-5xl font-heading font-bold mb-2">15+</div>
                    <div class="text-xl font-semibold mb-2">Community Programs</div>
                    <p class="text-sm opacity-90">Grassroots initiatives across Arusha region</p>
                </div>

                <div class="bg-gradient-to-br from-green-500 to-npsc-blue rounded-xl p-8 text-white">
                    <div class="text-5xl font-heading font-bold mb-2">10</div>
                    <div class="text-xl font-semibold mb-2">International Players</div>
                    <p class="text-sm opacity-90">Alumni representing Tanzania at international level</p>
                </div>

                <div class="bg-gradient-to-br from-red-500 to-npsc-gold rounded-xl p-8 text-white">
                    <div class="text-5xl font-heading font-bold mb-2">100%</div>
                    <div class="text-xl font-semibold mb-2">Self-Sustainable</div>
                    <p class="text-sm opacity-90">Financial independence through diverse revenue streams</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Strategic Pillars -->
<section class="py-16 bg-gray-50">
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 class="section-title">Strategic Pillars</h2>
            <p class="section-subtitle">Six key areas driving our growth strategy</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Pillar 1 -->
            <div class="card">
                <div class="h-48 bg-gradient-to-br from-npsc-gold to-npsc-blue flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-heading text-xl font-bold text-npsc-black mb-3">Player Development</h3>
                    <p class="text-npsc-gray text-sm mb-4">
                        Elite training programs with GPS tracking, video analysis, and European coaching methodologies to develop world-class talent.
                    </p>
                    <ul class="space-y-2 text-sm text-npsc-gray">
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Age-specific development pathways</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Performance tracking & analytics</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>International exposure programs</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Pillar 2 -->
            <div class="card">
                <div class="h-48 bg-gradient-to-br from-npsc-blue to-purple-600 flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-heading text-xl font-bold text-npsc-black mb-3">Infrastructure</h3>
                    <p class="text-npsc-gray text-sm mb-4">
                        World-class training facilities including modern pitches, gym, medical center, and technology-enabled analysis rooms.
                    </p>
                    <ul class="space-y-2 text-sm text-npsc-gray">
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>FIFA-standard training pitches</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Strength & conditioning center</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Medical & rehabilitation facilities</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Pillar 3 -->
            <div class="card">
                <div class="h-48 bg-gradient-to-br from-green-500 to-npsc-blue flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-heading text-xl font-bold text-npsc-black mb-3">Community Impact</h3>
                    <p class="text-npsc-gray text-sm mb-4">
                        Grassroots programs making football accessible to all, with focus on underserved communities and inclusive development.
                    </p>
                    <ul class="space-y-2 text-sm text-npsc-gray">
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Free community football clinics</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>School partnership programs</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Girls' football initiatives</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Pillar 4 -->
            <div class="card">
                <div class="h-48 bg-gradient-to-br from-red-500 to-npsc-gold flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-heading text-xl font-bold text-npsc-black mb-3">Partnerships</h3>
                    <p class="text-npsc-gray text-sm mb-4">
                        Strategic collaborations with international clubs, sponsors, and organizations to enhance our programs and opportunities.
                    </p>
                    <ul class="space-y-2 text-sm text-npsc-gray">
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>European club partnerships</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Corporate sponsorship agreements</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>WMA collaboration programs</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Pillar 5 -->
            <div class="card">
                <div class="h-48 bg-gradient-to-br from-purple-500 to-npsc-blue flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-heading text-xl font-bold text-npsc-black mb-3">Revenue Streams</h3>
                    <p class="text-npsc-gray text-sm mb-4">
                        Diverse income sources ensuring long-term financial sustainability and independence from external funding.
                    </p>
                    <ul class="space-y-2 text-sm text-npsc-gray">
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Academy enrollment fees</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Player transfer commissions</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Merchandise & licensing</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Pillar 6 -->
            <div class="card">
                <div class="h-48 bg-gradient-to-br from-npsc-gold to-yellow-600 flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-heading text-xl font-bold text-npsc-black mb-3">Technology & Innovation</h3>
                    <p class="text-npsc-gray text-sm mb-4">
                        Leveraging cutting-edge technology for player development, performance tracking, and operational efficiency.
                    </p>
                    <ul class="space-y-2 text-sm text-npsc-gray">
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>GPS player tracking systems</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Video analysis & AI coaching</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Digital player database</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PDF Viewer Section -->
<section class="py-16 bg-white">
    <div class="container-custom">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-8">
                <h2 class="section-title">Full Strategic Plan Document</h2>
                <p class="text-npsc-gray mb-6">Download or view our comprehensive 5-year strategic plan</p>
                <a href="#" class="btn-primary inline-flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Download Strategic Plan (PDF)
                </a>
            </div>

            <!-- PDF Viewer Placeholder -->
            <div class="bg-gray-100 rounded-xl shadow-xl p-8 border-2 border-dashed border-gray-300 min-h-[600px] flex items-center justify-center">
                <div class="text-center">
                    <svg class="w-24 h-24 mx-auto text-npsc-gold mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <h3 class="font-heading text-2xl font-bold text-npsc-black mb-2">Strategic Plan 2025-2030</h3>
                    <p class="text-npsc-gray mb-6">PDF viewer will be embedded here</p>
                    <p class="text-sm text-npsc-gray">Upload your strategic plan PDF to: <code class="bg-gray-200 px-2 py-1 rounded">public/documents/strategic-plan.pdf</code></p>
                </div>
            </div>

            <!--
            Uncomment when PDF is available:
            <div class="bg-white rounded-xl shadow-xl overflow-hidden">
                <iframe src="{{ asset('documents/strategic-plan.pdf') }}" class="w-full h-[800px]" frameborder="0"></iframe>
            </div>
            -->
        </div>
    </div>
</section>

<!-- Timeline -->
<section class="py-16 bg-gray-50">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto">
            <h2 class="section-title text-center mb-12">Implementation Timeline</h2>

            <div class="space-y-8">
                <!-- Year 1 -->
                <div class="flex">
                    <div class="flex-shrink-0 w-32 font-heading text-2xl font-bold text-npsc-gold">2025</div>
                    <div class="flex-1">
                        <div class="bg-white rounded-xl shadow-lg p-6">
                            <h3 class="font-heading text-xl font-bold text-npsc-black mb-3">Foundation Year</h3>
                            <ul class="space-y-2 text-npsc-gray">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Launch elite academy with 100 players</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Implement GPS tracking system</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Establish 5 grassroots programs</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Year 2-3 -->
                <div class="flex">
                    <div class="flex-shrink-0 w-32 font-heading text-2xl font-bold text-npsc-blue">2026-27</div>
                    <div class="flex-1">
                        <div class="bg-white rounded-xl shadow-lg p-6">
                            <h3 class="font-heading text-xl font-bold text-npsc-black mb-3">Growth Phase</h3>
                            <ul class="space-y-2 text-npsc-gray">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Expand to 250 academy players</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Build training facility infrastructure</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Secure European club partnerships</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Year 4-5 -->
                <div class="flex">
                    <div class="flex-shrink-0 w-32 font-heading text-2xl font-bold text-green-600">2028-30</div>
                    <div class="flex-1">
                        <div class="bg-white rounded-xl shadow-lg p-6">
                            <h3 class="font-heading text-xl font-bold text-npsc-black mb-3">Maturity & Sustainability</h3>
                            <ul class="space-y-2 text-npsc-gray">
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Reach 500+ total players trained</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Achieve financial self-sustainability</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-npsc-gold mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>10 players in international competition</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16 bg-npsc-blue text-white">
    <div class="container-custom text-center">
        <h2 class="font-heading text-3xl md:text-4xl font-bold mb-4">Be Part of Our Journey</h2>
        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
            Join us in building the future of Tanzanian football. Opportunities available for players, partners, and supporters.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('academy') }}" class="btn-primary">Join Our Academy</a>
            <a href="{{ route('contact') }}" class="btn-outline border-white text-white hover:bg-white hover:text-npsc-blue">Become a Partner</a>
        </div>
    </div>
</section>
@endsection
