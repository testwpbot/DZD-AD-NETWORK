@extends('layouts.app')

@section('title', 'Advertise in Sri Lanka — DZD Ad Network')
@section('description', 'Launch banner campaigns across Sri Lankan websites with geo, device and time targeting. CPM from LKR 50, real-time stats, LKR billing.')

<section class="page-hero">
    <div class="hero__glow hero__glow--1"></div>
    <div class="container">
        <span class="badge reveal">📣 For advertisers</span>
        <h1 class="reveal">Your brand, on <span class="grad-text">every screen</span> in Sri Lanka</h1>
        <p class="lead reveal">Put your banners in front of real local audiences on reviewed, brand-safe websites — with budgets you control and stats you can trust.</p>
        <div class="hero__actions reveal">
            <a href="{{ route('contact') }}" class="btn btn--primary">Start a campaign</a>
            <a href="{{ route('pricing') }}" class="btn btn--ghost">See rates</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Targeting</span>
            <h2>Reach <span class="grad-text">exactly</span> who matters</h2>
        </div>
        <div class="grid grid--4 features">
            <div class="feature reveal"><span class="feature__icon">📍</span><h3>District &amp; city</h3><p>Island-wide or narrow: Colombo, Kandy, Kurunegala, Galle — you choose.</p></div>
            <div class="feature reveal"><span class="feature__icon">📱</span><h3>Device &amp; OS</h3><p>Desktop, Android or iOS — match your product to the right screen.</p></div>
            <div class="feature reveal"><span class="feature__icon">🕒</span><h3>Dayparting</h3><p>Serve only at lunch hour, evenings, weekends — any window you like.</p></div>
            <div class="feature reveal"><span class="feature__icon">🔁</span><h3>Frequency capping</h3><p>Limit how often the same user sees your ad to protect your budget.</p></div>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Campaign lifecycle</span>
            <h2>From idea to <span class="grad-text">impressions</span> in days</h2>
        </div>
        <div class="grid grid--3 steps">
            <div class="step reveal"><span class="step__num">01</span><h3>Brief us</h3><p>Send your banners or brief — our team reviews creatives and suggests the best placements.</p></div>
            <div class="step reveal"><span class="step__num">02</span><h3>Set budget &amp; targeting</h3><p>Daily caps, CPM bids, districts, devices. Top up by LKR bank transfer whenever you like.</p></div>
            <div class="step reveal"><span class="step__num">03</span><h3>Optimise with live data</h3><p>Watch clicks and CTR in real time. Pause, boost or retune anytime — no lock-in.</p></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container container--narrow">
        <div class="panel reveal">
            <h3>What you get as a DZD advertiser</h3>
            <ul class="ticks ticks--2col">
                <li>Self-serve campaign dashboard</li>
                <li>Hourly impression &amp; click stats</li>
                <li>Conversion tracking support</li>
                <li>Creative review &amp; advice</li>
                <li>LKR invoicing for companies</li>
                <li>WhatsApp support 24/7</li>
            </ul>
            <div class="hero__actions">
                <a href="{{ route('contact') }}" class="btn btn--primary">Request advertiser access</a>
                <a href="{{ route('integration') }}" class="btn btn--ghost">How serving works</a>
            </div>
        </div>
    </div>
</section>
