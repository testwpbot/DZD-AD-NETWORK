<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Store a contact / signup request from the public site.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'min:3', 'max:120'],
            'email'   => ['required', 'email', 'max:190'],
            'phone'   => ['nullable', 'string', 'max:40'],
            'company' => ['nullable', 'string', 'max:190'],
            'type'    => ['required', 'in:advertiser,publisher,other'],
            'message' => ['required', 'string', 'min:10', 'max:3000'],
        ], [
            'type.required' => 'Please tell us if you are an advertiser or a publisher.',
            'message.min'   => 'Please give us a little more detail (at least 10 characters).',
        ]);

        Lead::create($validated);

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you! Our DZD team will contact you within 24 hours. 🚀');
    }
}
