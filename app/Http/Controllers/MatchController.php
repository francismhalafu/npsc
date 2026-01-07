<?php

namespace App\Http\Controllers;

use App\Models\FootballMatch;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function index()
    {
        // Upcoming matches
        $upcomingMatches = FootballMatch::where('status', 'scheduled')
            ->where('match_date', '>=', now())
            ->orderBy('match_date', 'asc')
            ->get();

        // Recent results
        $recentResults = FootballMatch::where('status', 'completed')
            ->orderBy('match_date', 'desc')
            ->take(10)
            ->get();

        return view('pages.matches.index', compact('upcomingMatches', 'recentResults'));
    }

    public function show($id)
    {
        $match = FootballMatch::findOrFail($id);

        return view('pages.matches.show', compact('match'));
    }
}
