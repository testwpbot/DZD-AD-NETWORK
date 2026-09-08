@extends('layouts.app')

@section('title', 'Integration Guide — Add DZD ads to your site')
@section('description', 'Copy-paste guide: add DZD ad zones to any website — WordPress, Blogger, Laravel or plain HTML — with fast async tags.')

<section class="page-hero">
    <div class="container">
        <span class="badge reveal">🧩 Integration</span>
        <h1 class="reveal">Add DZD ads in <span class="grad-text">one paste</span></h1>
        <p class="lead reveal">Once we approve your site, you get an <strong>invocation code</strong> for each ad slot (zone). Paste it where the ad should appear. That's the whole integration.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-head reveal">
            <span class="eyebrow">Step by step</span>
            <h2>From zero to <span class="grad-text">serving ads</span></h2>
        </div>

        <div class="steps-vertical">
            <div class="step-v reveal">
                <span class="step-v__num">1</span>
                <div>
                    <h3>Get your zones</h3>
                    <p>After approval we create zones for your placements — e.g. a 728×90 header, a 300×250 sidebar, a 320×50 mobile banner. Each zone has its own code snippet.</p>
                </div>
            </div>
            <div class="step-v reveal">
                <span class="step-v__num">2</span>
                <div>
                    <h3>Copy the invocation code</h3>
                    <p>Use the <strong>Async JavaScript Tag</strong> type — it's the fastest and never blocks your page. It looks like this (yours will carry your real zone ID and server address):</p>
                    <pre class="code"><code>&lt;ins data-revive-zoneid="1" data-revive-id="YOUR-ZONE-TOKEN"&gt;&lt;/ins&gt;
&lt;script async src="https://ads.yourdomain.lk/www/delivery/asyncjs.php"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>
            <div class="step-v reveal">
                <span class="step-v__num">3</span>
                <div>
                    <h3>Paste it into your site</h3>
                    <p><strong>WordPress:</strong> use a "Custom HTML" block or your theme's header widget slot.<br>
                       <strong>Blogger:</strong> add an HTML/JavaScript gadget.<br>
                       <strong>Plain HTML / Laravel:</strong> paste directly into your template where the banner should render.</p>
                </div>
            </div>
            <div class="step-v reveal">
                <span class="step-v__num">4</span>
                <div>
                    <h3>Check &amp; earn</h3>
                    <p>Reload your page — a banner appears. Impressions and estimated earnings start flowing into your dashboard immediately.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container container--narrow">
        <div class="section-head reveal">
            <span class="eyebrow">Good to know</span>
            <h2>Rules that keep <span class="grad-text">CPMs high</span></h2>
        </div>
        <div class="panel reveal">
            <ul class="ticks">
                <li><strong>One tag per slot</strong> — don't stack two zones in the same place.</li>
                <li><strong>Match the sizes</strong> — a 300×250 zone expects a 300×250 slot on your layout.</li>
                <li><strong>Don't refresh-trick</strong> — auto-refreshing tags to inflate impressions breaks our terms.</li>
                <li><strong>Mobile matters</strong> — most Sri Lankan traffic is mobile; place a 320×50 unit near the top.</li>
                <li><strong>Above the fold earns more</strong> — header and in-content slots outperform footers.</li>
            </ul>
            <p class="micro-note">Tip: our team can review your layout and recommend the best placements for earnings — just ask on WhatsApp.</p>
            <div class="hero__actions">
                <a href="{{ route('contact') }}" class="btn btn--primary">Apply for zones</a>
                <a href="{{ route('publishers') }}" class="btn btn--ghost">Publisher benefits</a>
            </div>
        </div>
    </div>
</section>
