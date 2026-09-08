@extends('layouts.app')

@section('title', 'Pricing & Rates — DZD Ad Network')
@section('description', 'Transparent LKR pricing: CPM campaigns from LKR 50, publisher revenue share up to 70%, no contracts, pay by bank transfer.')

<section class="page-hero">
    <div class="container">
        <span class="badge reveal">💳 Pricing</span>
        <h1 class="reveal">Simple rates in <span class="grad-text">LKR</span>. No surprises.</h1>
        <p class="lead reveal">Advertisers pay per thousand impressions (CPM) with a daily cap they control. Publishers earn a share of every campaign value on their site.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Advertisers</span>
            <h2>Campaign <span class="grad-text">packages</span></h2>
            <p>* Indicative CPM rates — final quote depends on targeting, volume and formats.</p>
        </div>
        <div class="grid grid--3 pricing">
            <div class="price reveal">
                <h3>Starter</h3>
                <div class="price__amount"><em>LKR</em> 50<small> CPM*</small></div>
                <ul class="ticks">
                    <li>Island-wide targeting</li>
                    <li>All standard banner formats</li>
                    <li>Daily budget cap</li>
                    <li>Email support</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn--ghost btn--block">Start small</a>
            </div>
            <div class="price price--featured reveal">
                <span class="price__flag">Most popular</span>
                <h3>Growth</h3>
                <div class="price__amount"><em>LKR</em> 120<small> CPM*</small></div>
                <ul class="ticks">
                    <li>District + device + time targeting</li>
                    <li>Frequency capping</li>
                    <li>Conversion tracking</li>
                    <li>Creative optimisation help</li>
                    <li>Priority WhatsApp support</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn--primary btn--block">Scale up</a>
            </div>
            <div class="price reveal">
                <h3>Enterprise</h3>
                <div class="price__amount"><em>Custom</em></div>
                <ul class="ticks">
                    <li>Sponsorships &amp; takeover slots</li>
                    <li>Managed campaign service</li>
                    <li>Company invoicing</li>
                    <li>Dedicated account manager</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn--ghost btn--block">Talk to sales</a>
            </div>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Publishers</span>
            <h2>You do the content, <span class="grad-text">we bring the money</span></h2>
        </div>
        <div class="grid grid--2">
            <div class="card reveal">
                <div class="card__icon">💸</div>
                <h3>Revenue share</h3>
                <p class="price__amount price__amount--inline"><em>Up to</em> 70%</p>
                <p class="micro-note">of campaign value for the ad impressions your site delivers, based on traffic quality and volumes.</p>
            </div>
            <div class="card reveal">
                <div class="card__icon">🏦</div>
                <h3>Payout terms</h3>
                <ul class="ticks">
                    <li>Monthly settlement (1st of the month)</li>
                    <li>Minimum payout: LKR 2,500</li>
                    <li>LKR bank transfer — no fees on our side</li>
                    <li>Live estimated earnings in your dashboard</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container container--narrow">
        <div class="section-head reveal">
            <span class="eyebrow">Payments</span>
            <h2>How <span class="grad-text">billing</span> works</h2>
        </div>
        <div class="faq reveal">
            <details open>
                <summary>How do advertisers pay?</summary>
                <p>LKR bank transfer — the same easy flow as our DZD-Marketing panel. You top up your campaign balance, and impressions are deducted at your campaign's CPM rate.</p>
            </details>
            <details>
                <summary>Do you support international advertisers?</summary>
                <p>Yes — we accept PayPal and USDT for advertisers outside Sri Lanka. Contact us for a USD quote.</p>
            </details>
            <details>
                <summary>Is there a minimum campaign budget?</summary>
                <p>Starter campaigns begin from around LKR 5,000 total budget. Enterprise sponsorships are quoted individually.</p>
            </details>
            <details>
                <summary>Are there contracts or hidden fees?</summary>
                <p>No contracts, no lock-in, no "platform fee". You pay the agreed CPM; publishers receive the agreed share. Simple.</p>
            </details>
        </div>
    </div>
</section>
