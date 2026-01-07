<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Partner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get hero post (main featured)
        $heroPost = Post::where('slot_position', 'hero')
            ->where('status', 'published')
            ->first();

        // Get 3 featured posts
        $featuredPosts = Post::whereIn('slot_position', ['featured_1', 'featured_2', 'featured_3'])
            ->where('status', 'published')
            ->orderByRaw("FIELD(slot_position, 'featured_1', 'featured_2', 'featured_3')")
            ->get();

        // Get active partners for homepage
        $partners = Partner::where('show_on_homepage', true)
            ->where('is_active', true)
            ->orderBy('display_order')
            ->get();

        return view('pages.home', compact('heroPost', 'featuredPosts', 'partners'));
    }
}
