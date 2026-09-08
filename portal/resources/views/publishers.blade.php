@extends('layouts.app')

@section('title', 'Monetise your website — DZD Ad Network Publishers')
@section('description', 'Earn from your Sri Lankan website traffic with brand-safe ads, fast async tags and monthly LKR bank transfer payouts. Up to 70% revenue share.')

<section class="page-hero">
    <div class="hero__glow hero__glow--2"></div>
    <div class="container">
        <span class="badge reveal">💰 For publishers</span>
        <h1 class="reveal">Turn your traffic into <span class="grad-text">monthly income</span></h1>
        <p class="lead reveal">Paste one ad tag. We fill your slots with reviewed, relevant campaigns — you watch earnings grow and get paid in LKR, every month.</p>
        <div class="hero__actions reveal">
            <a href="{{ route('contact') }}" class="btn btn--primary">Apply as publisher</a>
            <a href="{{ route('integration') }}" class="btn btn--ghost">See the integration guide</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Why publish with DZD</span>
            <h2>Fair rates. <span class="grad-text">Clean ads.</span> Fast tags.</h2>
        </div>
        <div class="grid grid--3 features">
            <div class="feature reveal"><span class="feature__icon">🏷️</span><h3>Up to 70% revenue share</h3><p>You keep the majority of every campaign served on your site. No stealth cuts.</p></div>
            <div class="feature reveal"><span class="feature__icon">🛡️</span><h3>Brand-safe demand</h3><p>Every advertiser and creative passes manual review — no sketchy pop-ups.</p></div>
            <div class="feature reveal"><span class="feature__icon">🪶</span><h3>Site-speed friendly</h3><p>Async tags that never block your page render. Your Core Web Vitals stay happy.</p></div>
            <div class="feature reveal"><span class="feature__icon">📈</span><h3>Live earnings stats</h3><p>Impressions, CTR and estimated LKR earnings, updated continuously.</p></div>
            <div class="feature reveal"><span class="feature__icon">🏦</span><h3>Monthly LKR payouts</h3><p>Bank transfer every month, minimum payout just LKR 2,500.</p></div>
            <div class="feature reveal"><span class="feature__icon">🧩</span><h3>Any stack welcome</h3><p>WordPress, Blogger, Laravel, plain HTML — if you can paste code, you're in.</p></div>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Getting started</span>
            <h2>Three steps to your <span class="grad-text">first payout</span></h2>
        </div>
        <div class="grid grid--3 steps">
            <div class="step reveal"><span class="step__num">01</span><h3>Apply in 2 minutes</h3><p>Send us your site URL. We review content quality and traffic — most reviews finish within 48 hours.</p></div>
            <div class="step reveal"><span class="step__num">02</span><h3>Paste your ad tag</h3><p>We create your zones and hand you a snippet. Drop it into your template — done.</p></div>
            <div class="step reveal"><span class="step__num">03</span><h3>Get paid monthly</h3><p>Earnings accumulate in your dashboard. On the 1st of each month we settle by bank transfer.</p></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container container--narrow">
        <div class="panel panel--lime reveal">
            <h3>Publisher requirements ✅</h3>
            <ul class="ticks">
                <li>Original content (no copied/aggregator-only sites)</li>
                <li>Some real Sri Lankan traffic (no bot traffic — we all lose)</li>
                <li>Ad placements visible without forcing clicks</li>
                <li>No adult, hate or illegal content</li>
            </ul>
            <div class="hero__actions">
                <a href="{{ route('contact') }}" class="btn btn--primary">Apply now — it's free</a>
            </div>
        </div>
    </div>
</section>
