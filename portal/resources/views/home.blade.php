@extends('layouts.app')

@section('title', 'DZD Ad Network — Sri Lanka&#39;s Modern Ad Server')

@php
    // ✏️ Edit your live numbers here — they animate on scroll
    $stats = [
        ['value' => 120, 'suffix' => 'M+', 'label' => 'Monthly impressions'],
        ['value' => 85,  'suffix' => '+',  'label' => 'Active publishers'],
        ['value' => 240, 'suffix' => '+',  'label' => 'Advertisers served'],
        ['value' => 99.9, 'suffix' => '%', 'label' => 'Delivery uptime', 'decimals' => 1],
    ];
@endphp

<section class="hero">
    <div class="hero__glow hero__glow--1"></div>
    <div class="hero__glow hero__glow--2"></div>

    <div class="container hero__grid">
        <div class="hero__copy reveal">
            <span class="badge">🇱🇰 Sri Lanka's homegrown ad network</span>
            <h1>Run ads across Sri Lanka. <span class="grad-text">Measure everything.</span></h1>
            <p class="lead">
                DZD Ad Network connects advertisers with real local audiences and helps
                publishers earn from their traffic — with real-time stats, smart targeting
                and billing in <strong>LKR</strong>. Backed by the team behind
                <a href="{{ env('DZD_SMM_PANEL_URL') }}" target="_blank" rel="noopener">DZD-Marketing</a>.
            </p>
            <div class="hero__actions">
                <a href="{{ route('advertisers') }}" class="btn btn--primary">Start advertising</a>
                <a href="{{ route('publishers') }}" class="btn btn--ghost">Earn as a publisher →</a>
            </div>
            <div class="hero__trust">
                <span>⚡ Instant setup</span>
                <span>📊 Real-time stats</span>
                <span>💳 LKR bank transfer</span>
            </div>
        </div>

        {{-- Dashboard-style mock, in the spirit of the DZD family landing --}}
        <div class="hero__visual reveal" aria-hidden="true">
            <div class="mock">
                <div class="mock__bar"><span></span><span></span><span></span><i>dzd-ads.lk/dashboard</i></div>
                <div class="mock__head">
                    <div><b>Impressions</b><strong data-count="184502">0</strong><em class="up">▲ 18.2%</em></div>
                    <div><b>Clicks</b><strong data-count="3127">0</strong><em class="up">▲ 7.4%</em></div>
                    <div><b>Revenue</b><strong data-count="48650" data-prefix="LKR ">0</strong><em class="up">▲ 12.9%</em></div>
                </div>
                <div class="mock__chart">
                    <i style="--h:34%"></i><i style="--h:52%"></i><i style="--h:41%"></i><i style="--h:66%"></i>
                    <i style="--h:58%"></i><i style="--h:78%"></i><i style="--h:70%"></i><i style="--h:92%"></i>
                    <i style="--h:84%"></i><i style="--h:100%"></i>
                </div>
                <div class="mock__rows">
                    <div><span class="dot dot--c"></span>Leaderboard 728×90 <em>LKR 1,250</em></div>
                    <div><span class="dot dot--v"></span>Mobile banner 320×50 <em>LKR 890</em></div>
                    <div><span class="dot dot--l"></span>Sidebar 300×250 <em>LKR 640</em></div>
                </div>
            </div>
            <div class="float-chip float-chip--1">🎯 Geo-targeted</div>
            <div class="float-chip float-chip--2">📈 CTR 1.8%</div>
        </div>
    </div>
</section>

<section class="section stats-band">
    <div class="container stats">
        @foreach ($stats as $s)
            <div class="stat reveal">
                <strong data-count="{{ $s['value'] }}"
                        data-suffix="{{ $s['suffix'] }}"
                        @if(!empty($s['decimals'])) data-decimals="{{ $s['decimals'] }}" @endif>0</strong>
                <span>{{ $s['label'] }}</span>
            </div>
        @endforeach
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">One platform, two sides</span>
            <h2>Built for <span class="grad-text">advertisers</span> &amp; <span class="grad-text">publishers</span></h2>
            <p>Whether you want to promote your brand or monetise your website, DZD gives you the tools — the same engine, tuned for Sri Lanka.</p>
        </div>

        <div class="grid grid--2">
            <div class="card card--hover reveal">
                <div class="card__icon">📣</div>
                <h3>For advertisers</h3>
                <p>Launch banner campaigns on Sri Lankan websites within minutes. Target by location, device, time and audience — then watch results live.</p>
                <ul class="ticks">
                    <li>CPM billing from LKR 50</li>
                    <li>Geo, device &amp; time targeting</li>
                    <li>Frequency capping &amp; conversion tracking</li>
                </ul>
                <a href="{{ route('advertisers') }}" class="card__link">Advertise with DZD →</a>
            </div>

            <div class="card card--hover reveal">
                <div class="card__icon">💰</div>
                <h3>For publishers</h3>
                <p>Turn your website traffic into steady income. Paste one ad tag, we fill it with relevant campaigns and pay you monthly in LKR.</p>
                <ul class="ticks">
                    <li>Up to 70% revenue share</li>
                    <li>Monthly LKR bank transfers</li>
                    <li>Fill-optimised, brand-safe ads</li>
                </ul>
                <a href="{{ route('publishers') }}" class="card__link">Monetise your site →</a>
            </div>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">How it works</span>
            <h2>Live in <span class="grad-text">3 simple steps</span></h2>
        </div>
        <div class="grid grid--3 steps">
            <div class="step reveal">
                <span class="step__num">01</span>
                <h3>Create your account</h3>
                <p>Tell us about your brand or your website. We set you up on the DZD panel in under a day.</p>
            </div>
            <div class="step reveal">
                <span class="step__num">02</span>
                <h3>Launch or install</h3>
                <p>Advertisers upload banners and set targeting. Publishers paste one line of ad code on their site.</p>
            </div>
            <div class="step reveal">
                <span class="step__num">03</span>
                <h3>Track &amp; get paid</h3>
                <p>Impressions, clicks and conversions stream into your dashboard. Publishers are paid monthly via bank transfer.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Ad formats</span>
            <h2>Formats that <span class="grad-text">fit every site</span></h2>
        </div>
        <div class="grid grid--4 formats">
            <div class="format reveal">
                <div class="format__demo format__demo--leader"><span>728 × 90</span></div>
                <h3>Leaderboard</h3>
                <p>Header banners with premium visibility.</p>
            </div>
            <div class="format reveal">
                <div class="format__demo format__demo--square"><span>300 × 250</span></div>
                <h3>Medium rectangle</h3>
                <p>The highest-performing sidebar unit.</p>
            </div>
            <div class="format reveal">
                <div class="format__demo format__demo--mobile"><span>320 × 50</span></div>
                <h3>Mobile banner</h3>
                <p>Lightweight mobile web placements.</p>
            </div>
            <div class="format reveal">
                <div class="format__demo format__demo--native"><span>HTML5</span></div>
                <h3>Custom HTML</h3>
                <p>Rich media and interactive creatives.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Why DZD</span>
            <h2>Local by default, <span class="grad-text">serious by design</span></h2>
        </div>
        <div class="grid grid--3 features">
            <div class="feature reveal"><span class="feature__icon">🎯</span><h3>Sri Lankan audience targeting</h3><p>Reach users by district, city or island-wide — Colombo to Kurunegala to Jaffna.</p></div>
            <div class="feature reveal"><span class="feature__icon">📊</span><h3>Real-time reporting</h3><p>Hourly and daily impressions, clicks and CTR — no waiting for yesterday's report.</p></div>
            <div class="feature reveal"><span class="feature__icon">⚡</span><h3>Fast, light delivery</h3><p>Async ad tags that don't slow your site down. Serving from optimized infrastructure.</p></div>
            <div class="feature reveal"><span class="feature__icon">🛡️</span><h3>Brand-safe inventory</h3><p>Every publisher site is reviewed by our team before a single ad is served.</p></div>
            <div class="feature reveal"><span class="feature__icon">💳</span><h3>Pay &amp; earn in LKR</h3><p>Local bank transfer billing — no forex hassle, no hidden conversion fees.</p></div>
            <div class="feature reveal"><span class="feature__icon">🤝</span><h3>Support that answers</h3><p>WhatsApp &amp; email support in Sinhala, Tamil and English — 24/7.</p></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Simple pricing</span>
            <h2>Transparent <span class="grad-text">LKR rates</span></h2>
            <p>Indicative rates — final pricing depends on targeting and volume. Full details on the <a href="{{ route('pricing') }}">pricing page</a>.</p>
        </div>
        <div class="grid grid--3 pricing">
            <div class="price reveal">
                <h3>Starter</h3>
                <div class="price__amount"><em>LKR</em> 50<small> CPM*</small></div>
                <ul class="ticks">
                    <li>Island-wide targeting</li>
                    <li>All standard formats</li>
                    <li>Email support</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn--ghost btn--block">Get started</a>
            </div>
            <div class="price price--featured reveal">
                <span class="price__flag">Most popular</span>
                <h3>Growth</h3>
                <div class="price__amount"><em>LKR</em> 120<small> CPM*</small></div>
                <ul class="ticks">
                    <li>District + device targeting</li>
                    <li>Frequency capping</li>
                    <li>Conversion tracking</li>
                    <li>Priority support</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn--primary btn--block">Get started</a>
            </div>
            <div class="price reveal">
                <h3>Enterprise</h3>
                <div class="price__amount"><em>Custom</em></div>
                <ul class="ticks">
                    <li>Managed campaigns</li>
                    <li>Custom formats &amp; sponsors</li>
                    <li>Dedicated account manager</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn--ghost btn--block">Talk to us</a>
            </div>
        </div>
        <p class="micro-note reveal">* CPM = cost per 1,000 impressions. Publishers earn up to 70% of campaign value.</p>
    </div>
</section>

<section class="section section--alt">
    <div class="container container--narrow">
        <div class="section-head reveal">
            <span class="eyebrow">FAQ</span>
            <h2>Common questions, <span class="grad-text">straight answers</span></h2>
        </div>

        <div class="faq reveal">
            <details open>
                <summary>What is DZD Ad Network?</summary>
                <p>An ad-serving platform built for Sri Lanka. Advertisers run banner campaigns across our publisher network; website owners earn by showing those ads. Powered by the same team behind DZD-Marketing.</p>
            </details>
            <details>
                <summary>How do publishers get paid?</summary>
                <p>Monthly via bank transfer in LKR. Minimum payout is LKR 2,500. You see estimated earnings in your dashboard at any time.</p>
            </details>
            <details>
                <summary>What does it cost to advertise?</summary>
                <p>Campaigns start from LKR 50 CPM (per 1,000 impressions). You set the daily budget — we never overspend it.</p>
            </details>
            <details>
                <summary>Can I target only certain districts?</summary>
                <p>Yes. Choose island-wide or narrow down to districts and cities, on desktop or mobile, at the hours that matter to you.</p>
            </details>
            <details>
                <summary>How do I add DZD ads to my website?</summary>
                <p>We give you a small JavaScript tag for each ad slot. Paste it into your site — see the <a href="{{ route('integration') }}">integration guide</a> for a copy-paste example.</p>
            </details>
            <details>
                <summary>Is there a contract or lock-in?</summary>
                <p>No. Campaigns are self-serve and publishers can pause or remove tags anytime.</p>
            </details>
        </div>
    </div>
</section>

<section class="cta-band">
    <div class="container cta-band__inner reveal">
        <h2>Ready to grow with <span class="grad-text">DZD?</span></h2>
        <p>Join advertisers and publishers already on the network. Setup takes minutes.</p>
        <div class="hero__actions hero__actions--center">
            <a href="{{ route('contact') }}" class="btn btn--light">Create your account</a>
            <a href="{{ route('pricing') }}" class="btn btn--ghost btn--light-ghost">See pricing</a>
        </div>
    </div>
</section>
