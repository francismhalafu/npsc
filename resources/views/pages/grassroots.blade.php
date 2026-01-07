@extends('layouts.app')

@section('content')
<section class="bg-gradient-to-r from-npsc-blue to-npsc-black text-white py-16">
    <div class="container-custom">
        <h1 class="font-heading text-4xl md:text-5xl font-bold mb-4">Grassroots Programs</h1>
        <p class="text-xl text-gray-200">Making football accessible to every child in Arusha</p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto text-center mb-12">
            <h2 class="section-title">Football For All</h2>
            <p class="text-lg text-npsc-gray leading-relaxed">
                Our grassroots programs bring quality football training to communities across Arusha, ensuring every child has the opportunity to play and develop through the beautiful game.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card">
                <div class="h-48 bg-gradient-to-br from-npsc-gold to-npsc-blue flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-heading text-xl font-bold text-npsc-black mb-3">Community Clinics</h3>
                    <p class="text-npsc-gray mb-4">Free weekend football clinics in neighborhoods across Arusha</p>
                    <ul class="space-y-2 text-sm text-npsc-gray">
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Ages 6-14</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>No fees required</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Equipment provided</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="h-48 bg-gradient-to-br from-green-500 to-npsc-blue flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-heading text-xl font-bold text-npsc-black mb-3">School Partnerships</h3>
                    <p class="text-npsc-gray mb-4">Football programs integrated into school sports curricula</p>
                    <ul class="space-y-2 text-sm text-npsc-gray">
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Weekly sessions</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Certified coaches</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Inter-school tournaments</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="h-48 bg-gradient-to-br from-purple-500 to-npsc-gold flex items-center justify-center">
                    <svg class="w-24 h-24 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="font-heading text-xl font-bold text-npsc-black mb-3">Girls Football</h3>
                    <p class="text-npsc-gray mb-4">Dedicated programs promoting female participation in football</p>
                    <ul class="space-y-2 text-sm text-npsc-gray">
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Girls-only sessions</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Female role models</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-4 h-4 text-npsc-gold mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Pathway to academy</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gradient-to-r from-npsc-blue to-npsc-black text-white">
    <div class="container-custom text-center">
        <h2 class="font-heading text-3xl md:text-4xl font-bold mb-4">Get Involved</h2>
        <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
            Support our grassroots programs through volunteering, sponsorship, or partnerships.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('contact') }}?inquiry_type=volunteer" class="btn-primary">Volunteer</a>
            <a href="{{ route('contact') }}?inquiry_type=partnership" class="btn-outline border-white text-white hover:bg-white hover:text-npsc-black">Partner With Us</a>
        </div>
    </div>
</section>
@endsection
