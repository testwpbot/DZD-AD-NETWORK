@extends('layouts.app')

@section('title', 'Contact DZD Ad Network — Advertisers & Publishers')
@section('description', 'Talk to the DZD team. Advertiser campaigns, publisher applications and support — WhatsApp and email, 24/7.')

<section class="page-hero">
    <div class="container">
        <span class="badge reveal">🤝 Contact</span>
        <h1 class="reveal">Let's talk <span class="grad-text">ads &amp; earnings</span></h1>
        <p class="lead reveal">Advertiser campaigns, publisher applications, or just a question — the DZD team replies within 24 hours.</p>
    </div>
</section>

<section class="section">
    <div class="container contact-grid">

        <div class="contact-info reveal">
            <h2>Reach us directly</h2>
            <p class="lead">Prefer chat? WhatsApp is fastest — we're online 24/7, in Sinhala, Tamil or English.</p>

            <div class="contact-tile">
                <span class="contact-tile__icon">💬</span>
                <div>
                    <b>WhatsApp</b>
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', env('DZD_WHATSAPP', '')) }}" target="_blank" rel="noopener">{{ env('DZD_WHATSAPP', '+94 70 000 0000') }}</a>
                </div>
            </div>
            <div class="contact-tile">
                <span class="contact-tile__icon">✉️</span>
                <div>
                    <b>Email</b>
                    <a href="mailto:{{ env('DZD_CONTACT_EMAIL') }}">{{ env('DZD_CONTACT_EMAIL', 'hello@dzd-marketing.site') }}</a>
                </div>
            </div>
            <div class="contact-tile">
                <span class="contact-tile__icon">📍</span>
                <div>
                    <b>Based in</b>
                    <span>Kurunegala, Sri Lanka 🇱🇰</span>
                </div>
            </div>
            <div class="contact-tile">
                <span class="contact-tile__icon">🏢</span>
                <div>
                    <b>Part of the DZD family</b>
                    <a href="{{ env('DZD_SMM_PANEL_URL') }}" target="_blank" rel="noopener">dzd-marketing.site</a>
                </div>
            </div>
        </div>

        <div class="contact-form-wrap reveal">
            <h2 id="contact-form">Send us a message</h2>

            @if (session('success'))
                <div class="alert alert--success" role="status">
                    ✅ {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('contact.store') }}" class="contact-form">
                @csrf

                <div class="field-row">
                    <label class="field">
                        <span>Your name *</span>
                        <input type="text" name="name" value="{{ old('name') }}" required minlength="3" placeholder="Danuka Perera">
                        @error('name') <em class="field__error">{{ $message }}</em> @enderror
                    </label>
                    <label class="field">
                        <span>Email *</span>
                        <input type="email" name="email" value="{{ old('email') }}" required placeholder="you@example.com">
                        @error('email') <em class="field__error">{{ $message }}</em> @enderror
                    </label>
                </div>

                <div class="field-row">
                    <label class="field">
                        <span>Phone / WhatsApp</span>
                        <input type="text" name="phone" value="{{ old('phone') }}" placeholder="+94 7X XXX XXXX">
                        @error('phone') <em class="field__error">{{ $message }}</em> @enderror
                    </label>
                    <label class="field">
                        <span>Company / Website</span>
                        <input type="text" name="company" value="{{ old('company') }}" placeholder="example.lk">
                        @error('company') <em class="field__error">{{ $message }}</em> @enderror
                    </label>
                </div>

                <label class="field">
                    <span>I am an... *</span>
                    <select name="type" required>
                        <option value="" disabled {{ old('type') ? '' : 'selected' }}>Choose one…</option>
                        <option value="advertiser" {{ old('type') === 'advertiser' ? 'selected' : '' }}>Advertiser — I want to run campaigns</option>
                        <option value="publisher" {{ old('type') === 'publisher' ? 'selected' : '' }}>Publisher — I want to earn from my site</option>
                        <option value="other" {{ old('type') === 'other' ? 'selected' : '' }}>Other / just asking</option>
                    </select>
                    @error('type') <em class="field__error">{{ $message }}</em> @enderror
                </label>

                <label class="field">
                    <span>Message *</span>
                    <textarea name="message" rows="5" required minlength="10" placeholder="Tell us about your brand or your website, traffic, goals…">{{ old('message') }}</textarea>
                    @error('message') <em class="field__error">{{ $message }}</em> @enderror
                </label>

                <button type="submit" class="btn btn--primary btn--block">Send message →</button>
                <p class="micro-note">By sending, you agree to be contacted about DZD Ad Network services. We never spam.</p>
            </form>
        </div>

    </div>
</section>
