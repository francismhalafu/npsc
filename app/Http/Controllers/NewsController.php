<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::where('status', 'published')
            ->with('category', 'author');

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        // Filter by category
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        // Filter by date
        if ($request->filled('month') && $request->filled('year')) {
            $query->whereYear('published_at', $request->year)
                  ->whereMonth('published_at', $request->month);
        }

        $posts = $query->latest('published_at')->paginate(12);
        $categories = Category::where('is_active', true)->get();

        return view('pages.news.index', compact('posts', 'categories'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)
            ->where('status', 'published')
            ->with('category', 'author')
            ->firstOrFail();

        // Increment view count
        $post->increment('views_count');

        // Get related posts (same category, exclude current)
        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->where('status', 'published')
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('pages.news.show', compact('post', 'relatedPosts'));
    }
}
