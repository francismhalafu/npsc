<?php

namespace App\Http\Controllers;

use App\Models\ContactInquiry;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'inquiry_type' => 'required|in:general,sponsorship,academy,media,volunteer,partnership',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        ContactInquiry::create($validated);

        return redirect()->route('contact')
            ->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
