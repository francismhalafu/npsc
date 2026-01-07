@extends('layouts.app')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-npsc-blue to-npsc-black text-white py-16">
    <div class="container-custom">
        <h1 class="font-heading text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
        <p class="text-xl text-gray-200">Get in touch with Northern Pride Sports Club</p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-16 bg-gray-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h2 class="font-heading text-3xl font-bold text-npsc-black mb-6">Send us a Message</h2>

                    @if(session('success'))
                    <div class="bg-green-50 border border-green-200 text-green-800 px-6 py-4 rounded-lg mb-6 flex items-start">
                        <svg class="w-6 h-6 mr-3 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <p class="font-semibold">Success!</p>
                            <p>{{ session('success') }}</p>
                        </div>
                    </div>
                    @endif

                    @if($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-800 px-6 py-4 rounded-lg mb-6">
                        <p class="font-semibold mb-2">Please correct the following errors:</p>
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-npsc-gray mb-2">Full Name *</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required class="form-input">
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-semibold text-npsc-gray mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required class="form-input">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-npsc-gray mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="form-input">
                            </div>

                            <div>
                                <label for="inquiry_type" class="block text-sm font-semibold text-npsc-gray mb-2">Inquiry Type *</label>
                                <select id="inquiry_type" name="inquiry_type" required class="form-input">
                                    <option value="">Select Inquiry Type</option>
                                    <option value="general" {{ old('inquiry_type') == 'general' ? 'selected' : '' }}>General Inquiry</option>
                                    <option value="academy" {{ old('inquiry_type') == 'academy' ? 'selected' : '' }}>Academy Enrollment</option>
                                    <option value="sponsorship" {{ old('inquiry_type') == 'sponsorship' ? 'selected' : '' }}>Sponsorship</option>
                                    <option value="partnership" {{ old('inquiry_type') == 'partnership' ? 'selected' : '' }}>Partnership Opportunity</option>
                                    <option value="media" {{ old('inquiry_type') == 'media' ? 'selected' : '' }}>Media & Press</option>
                                    <option value="volunteer" {{ old('inquiry_type') == 'volunteer' ? 'selected' : '' }}>Volunteer</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-semibold text-npsc-gray mb-2">Subject *</label>
                            <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required class="form-input">
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-semibold text-npsc-gray mb-2">Message *</label>
                            <textarea id="message" name="message" rows="6" required class="form-textarea">{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="btn-primary w-full md:w-auto">
                            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="space-y-6">
                <!-- Contact Details Card -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="font-heading text-2xl font-bold text-npsc-black mb-6">Contact Information</h3>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-npsc-gold rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-npsc-black" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold text-npsc-black mb-1">Address</h4>
                                <p class="text-npsc-gray">Arusha, Tanzania</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-npsc-gold rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-npsc-black" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold text-npsc-black mb-1">Email</h4>
                                <a href="mailto:info@northern-pride.org" class="text-npsc-gold hover:text-npsc-blue transition-colors">
                                    info@northern-pride.org
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-npsc-gold rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-npsc-black" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold text-npsc-black mb-1">Phone</h4>
                                <a href="tel:+255123456789" class="text-npsc-gold hover:text-npsc-blue transition-colors">
                                    +255 123 456 789
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-12 h-12 bg-npsc-gold rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-npsc-black" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold text-npsc-black mb-1">Office Hours</h4>
                                <p class="text-npsc-gray">Monday - Friday</p>
                                <p class="text-npsc-gray">8:00 AM - 5:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Media Card -->
                <div class="bg-gradient-to-br from-npsc-gold to-npsc-blue rounded-xl shadow-lg p-8 text-white">
                    <h3 class="font-heading text-2xl font-bold mb-4">Follow Us</h3>
                    <p class="mb-6">Stay connected on social media for the latest updates</p>

                    <div class="flex space-x-4">
                        <a href="#" class="flex items-center justify-center w-12 h-12 bg-white/20 hover:bg-white/30 rounded-lg transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="flex items-center justify-center w-12 h-12 bg-white/20 hover:bg-white/30 rounded-lg transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="flex items-center justify-center w-12 h-12 bg-white/20 hover:bg-white/30 rounded-lg transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                            </svg>
                        </a>
                        <a href="#" class="flex items-center justify-center w-12 h-12 bg-white/20 hover:bg-white/30 rounded-lg transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links Card -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="font-heading text-2xl font-bold text-npsc-black mb-4">Quick Links</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('academy') }}" class="text-npsc-gray hover:text-npsc-gold transition-colors flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Academy Enrollment
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('grassroots') }}" class="text-npsc-gray hover:text-npsc-gold transition-colors flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Grassroots Programs
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about.strategic-plan') }}" class="text-npsc-gray hover:text-npsc-gold transition-colors flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Strategic Plan 2025-2030
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('news.index') }}" class="text-npsc-gray hover:text-npsc-gold transition-colors flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Latest News
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section (Placeholder) -->
<section class="h-96 bg-gray-200">
    <div class="w-full h-full flex items-center justify-center text-npsc-gray">
        <div class="text-center">
            <svg class="w-16 h-16 mx-auto mb-4 text-npsc-gold" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
            </svg>
            <p class="font-semibold">Arusha, Tanzania</p>
            <p class="text-sm">(Interactive map can be added here)</p>
        </div>
    </div>
</section>
@endsection
