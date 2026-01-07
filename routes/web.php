<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PageController;

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// News & Posts
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

// Matches & Fixtures
Route::get('/fixtures-results', [MatchController::class, 'index'])->name('matches.index');
Route::get('/matches/{id}', [MatchController::class, 'show'])->name('matches.show');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Newsletter
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// About Pages
Route::get('/about/vision-mission', [PageController::class, 'vision'])->name('about.vision');
Route::get('/about/leadership', [PageController::class, 'leadership'])->name('about.leadership');
Route::get('/about/strategic-plan', [PageController::class, 'strategicPlan'])->name('about.strategic-plan');

// Academy & Programs
Route::get('/academy', [PageController::class, 'academy'])->name('academy');
Route::get('/grassroots', [PageController::class, 'grassroots'])->name('grassroots');
