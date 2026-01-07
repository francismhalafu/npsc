@extends('layouts.app')

@section('content')
<section class="bg-gradient-to-r from-npsc-blue to-npsc-black text-white py-16">
    <div class="container-custom">
        <h1 class="font-heading text-4xl md:text-5xl font-bold mb-4">Fixtures & Results</h1>
        <p class="text-xl text-gray-200">Follow our matches and track our performance</p>
    </div>
</section>

<!-- Upcoming Matches -->
<section class="py-16 bg-white">
    <div class="container-custom">
        <h2 class="section-title mb-8">Upcoming Fixtures</h2>

        @if($upcomingMatches->count() > 0)
        <div class="space-y-4">
            @foreach($upcomingMatches as $match)
            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition-shadow">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="flex-1 text-center md:text-right">
                        <div class="font-heading text-2xl font-bold text-npsc-black">NORTHERN PRIDE SC</div>
                        <div class="text-sm text-npsc-gray">{{ $match->match_type === 'home' ? 'HOME' : 'AWAY' }}</div>
                    </div>

                    <div class="my-4 md:my-0 md:mx-8">
                        <div class="text-center bg-npsc-gold text-npsc-black rounded-lg px-6 py-3">
                            <div class="font-heading text-xs font-bold mb-1">{{ $match->match_date->format('D') }}</div>
                            <div class="font-heading text-3xl font-bold">{{ $match->match_date->format('d') }}</div>
                            <div class="text-xs">{{ $match->match_date->format('M Y') }}</div>
                            <div class="text-xs mt-1">{{ $match->match_date->format('H:i') }}</div>
                        </div>
                    </div>

                    <div class="flex-1 text-center md:text-left">
                        <div class="font-heading text-2xl font-bold text-npsc-black">{{ strtoupper($match->opponent) }}</div>
                        <div class="text-sm text-npsc-gray">OPPONENT</div>
                    </div>
                </div>

                <div class="mt-4 pt-4 border-t border-gray-200 flex flex-wrap items-center justify-between text-sm">
                    <div class="flex items-center text-npsc-gray">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                        {{ $match->venue }}
                    </div>
                    <div>
                        <span class="inline-block bg-npsc-blue text-white text-xs font-bold px-3 py-1 rounded-full">
                            {{ $match->competition }}
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-12 bg-gray-50 rounded-xl">
            <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <p class="text-npsc-gray">No upcoming fixtures scheduled</p>
        </div>
        @endif
    </div>
</section>

<!-- Recent Results -->
<section class="py-16 bg-gray-50">
    <div class="container-custom">
        <h2 class="section-title mb-8">Recent Results</h2>

        @if($recentResults->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($recentResults as $match)
            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs text-npsc-gray">{{ $match->match_date->format('M d, Y') }}</span>
                    <span class="inline-block bg-npsc-blue text-white text-xs font-bold px-3 py-1 rounded-full">
                        {{ $match->competition }}
                    </span>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex-1 text-center">
                        <div class="font-heading text-lg font-bold text-npsc-black mb-2">NPSC</div>
                        <div class="font-heading text-4xl font-bold {{ $match->result === 'win' ? 'text-green-600' : ($match->result === 'loss' ? 'text-red-600' : 'text-gray-600') }}">
                            {{ $match->npsc_score ?? '-' }}
                        </div>
                    </div>

                    <div class="px-6">
                        <div class="text-2xl font-bold text-gray-300">:</div>
                    </div>

                    <div class="flex-1 text-center">
                        <div class="font-heading text-lg font-bold text-npsc-black mb-2">{{ strtoupper($match->opponent) }}</div>
                        <div class="font-heading text-4xl font-bold text-gray-600">
                            {{ $match->opponent_score ?? '-' }}
                        </div>
                    </div>
                </div>

                <div class="mt-4 pt-4 border-t border-gray-200 text-center">
                    @if($match->result === 'win')
                    <span class="inline-block bg-green-500 text-white text-sm font-bold px-4 py-2 rounded-full">VICTORY</span>
                    @elseif($match->result === 'draw')
                    <span class="inline-block bg-yellow-500 text-white text-sm font-bold px-4 py-2 rounded-full">DRAW</span>
                    @else
                    <span class="inline-block bg-red-500 text-white text-sm font-bold px-4 py-2 rounded-full">DEFEAT</span>
                    @endif
                </div>

                @if($match->match_report)
                <div class="mt-4">
                    <a href="{{ route('matches.show', $match->id) }}" class="text-npsc-gold hover:text-npsc-blue font-semibold text-sm">
                        Read Match Report →
                    </a>
                </div>
                @endif
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-12 bg-white rounded-xl">
            <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
            <p class="text-npsc-gray">No match results available</p>
        </div>
        @endif
    </div>
</section>
@endsection
