<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function vision()
    {
        $page = Page::where('slug', 'vision-mission')->first();
        return view('pages.about.vision', compact('page'));
    }

    public function leadership()
    {
        $page = Page::where('slug', 'leadership')->first();
        return view('pages.about.leadership', compact('page'));
    }

    public function strategicPlan()
    {
        $page = Page::where('slug', 'strategic-plan')->first();
        return view('pages.about.strategic-plan', compact('page'));
    }

    public function academy()
    {
        $page = Page::where('slug', 'academy')->first();
        return view('pages.academy', compact('page'));
    }

    public function grassroots()
    {
        $page = Page::where('slug', 'grassroots')->first();
        return view('pages.grassroots', compact('page'));
    }
}
