<!-- Header Navigation - Clean and Minimal -->
<header class="sticky top-0 z-50 bg-white shadow-sm border-b border-gray-100">
    <nav>
        <div class="container-custom">
            <div class="flex items-center justify-between py-5">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center space-x-3">
                    <img src="{{ asset('storage/images/NPSC Logo.png') }}" alt="NPSC Logo" class="h-12 w-12">
                    <div class="hidden sm:block">
                        <div class="font-bold text-lg text-npsc-black leading-tight">NORTHERN PRIDE</div>
                        <div class="text-xs text-npsc-gray tracking-wider">SPORTS CLUB</div>
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-1">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'nav-link-active' : '' }}">
                        Home
                    </a>
                    <div class="relative group">
                        <button class="nav-link flex items-center">
                            About
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div class="absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 border border-gray-100">
                            <a href="{{ route('about.vision') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-npsc-gold transition-colors first:rounded-t-lg">Vision & Mission</a>
                            <a href="{{ route('about.leadership') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-npsc-gold transition-colors border-t border-gray-100">Leadership</a>
                            <a href="{{ route('about.strategic-plan') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 hover:text-npsc-gold transition-colors border-t border-gray-100 last:rounded-b-lg">Strategic Plan</a>
                        </div>
                    </div>
                    <a href="{{ route('academy') }}" class="nav-link {{ request()->routeIs('academy') ? 'nav-link-active' : '' }}">
                        Academy
                    </a>
                    <a href="{{ route('grassroots') }}" class="nav-link {{ request()->routeIs('grassroots') ? 'nav-link-active' : '' }}">
                        Grassroots
                    </a>
                    <a href="{{ route('news.index') }}" class="nav-link {{ request()->routeIs('news.*') ? 'nav-link-active' : '' }}">
                        News
                    </a>
                    <a href="{{ route('matches.index') }}" class="nav-link {{ request()->routeIs('matches.*') ? 'nav-link-active' : '' }}">
                        Fixtures
                    </a>
                    <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'nav-link-active' : '' }}">
                        Contact
                    </a>
                </div>

                <!-- CTA Button -->
                <div class="hidden lg:block">
                    <a href="{{ route('academy') }}" class="btn-primary text-sm py-2.5 px-5">
                        Join Academy
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden p-2 rounded-lg hover:bg-gray-50 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" style="display: none;"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-transition class="lg:hidden bg-white border-t border-gray-100" style="display: none;">
        <div class="container-custom py-6 space-y-1">
            <a href="{{ route('home') }}" class="block py-2.5 px-4 text-gray-700 hover:text-npsc-gold hover:bg-gray-50 rounded-lg transition-colors font-medium">Home</a>
            <div x-data="{ aboutOpen: false }">
                <button @click="aboutOpen = !aboutOpen" class="flex items-center justify-between w-full py-2.5 px-4 text-gray-700 hover:text-npsc-gold hover:bg-gray-50 rounded-lg transition-colors font-medium">
                    About
                    <svg class="w-4 h-4 transition-transform" :class="aboutOpen ? 'rotate-180' : ''" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div x-show="aboutOpen" class="pl-4 space-y-1 mt-1" style="display: none;">
                    <a href="{{ route('about.vision') }}" class="block py-2 px-4 text-sm text-gray-600 hover:text-npsc-gold hover:bg-gray-50 rounded-lg transition-colors">Vision & Mission</a>
                    <a href="{{ route('about.leadership') }}" class="block py-2 px-4 text-sm text-gray-600 hover:text-npsc-gold hover:bg-gray-50 rounded-lg transition-colors">Leadership</a>
                    <a href="{{ route('about.strategic-plan') }}" class="block py-2 px-4 text-sm text-gray-600 hover:text-npsc-gold hover:bg-gray-50 rounded-lg transition-colors">Strategic Plan</a>
                </div>
            </div>
            <a href="{{ route('academy') }}" class="block py-2.5 px-4 text-gray-700 hover:text-npsc-gold hover:bg-gray-50 rounded-lg transition-colors font-medium">Academy</a>
            <a href="{{ route('grassroots') }}" class="block py-2.5 px-4 text-gray-700 hover:text-npsc-gold hover:bg-gray-50 rounded-lg transition-colors font-medium">Grassroots</a>
            <a href="{{ route('news.index') }}" class="block py-2.5 px-4 text-gray-700 hover:text-npsc-gold hover:bg-gray-50 rounded-lg transition-colors font-medium">News</a>
            <a href="{{ route('matches.index') }}" class="block py-2.5 px-4 text-gray-700 hover:text-npsc-gold hover:bg-gray-50 rounded-lg transition-colors font-medium">Fixtures</a>
            <a href="{{ route('contact') }}" class="block py-2.5 px-4 text-gray-700 hover:text-npsc-gold hover:bg-gray-50 rounded-lg transition-colors font-medium">Contact</a>
            <div class="pt-4 px-4">
                <a href="{{ route('academy') }}" class="btn-primary block text-center">Join Academy</a>
            </div>
        </div>
    </div>
</header>
