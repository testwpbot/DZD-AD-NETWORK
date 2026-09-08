@php
    $smm  = env('DZD_SMM_PANEL_URL', 'https://dzd-marketing.site');
    $mail = env('DZD_CONTACT_EMAIL', 'hello@dzd-marketing.site');
@endphp

<footer class="footer">
    <div class="container footer__grid">
        <div class="footer__brand">
            <a href="{{ route('home') }}" class="brand">
                <span class="brand__mark">
                    <svg viewBox="0 0 64 64" width="30" height="30" fill="none">
                        <rect width="64" height="64" rx="16" fill="url(#brandGrad)"/>
                        <path d="M20 40c6-1 10-4 12-10M14 34c9-1 16-6 19-18M44 22l6 6-20 20-8 2 2-8 20-20z"
                              stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                <span class="brand__name">DZD <em>ADS</em></span>
            </a>
            <p>Sri Lanka's modern ad network. We connect advertisers with local audiences and help publishers earn from their traffic — powered by the team behind <a href="{{ $smm }}" rel="noopener" target="_blank">DZD-Marketing</a>.</p>
        </div>

        <div>
            <h4>Platform</h4>
            <a href="{{ route('advertisers') }}">For advertisers</a>
            <a href="{{ route('publishers') }}">For publishers</a>
            <a href="{{ route('pricing') }}">Pricing &amp; rates</a>
            <a href="{{ route('integration') }}">Integration guide</a>
        </div>

        <div>
            <h4>Company</h4>
            <a href="{{ route('contact') }}">Contact us</a>
            <a href="{{ $smm }}" target="_blank" rel="noopener">DZD-Marketing SMM</a>
            <a href="{{ env('DZD_ADSERVER_URL', 'http://localhost:8080') }}/www/admin/" target="_blank" rel="noopener">Ad server login</a>
        </div>

        <div>
            <h4>Get in touch</h4>
            <a href="mailto:{{ $mail }}">{{ $mail }}</a>
            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', env('DZD_WHATSAPP', '')) }}" target="_blank" rel="noopener">WhatsApp us</a>
            <p class="footer__note">Kurunegala, Sri Lanka 🇱🇰<br>Support: 24/7</p>
        </div>
    </div>

    <div class="container footer__bottom">
        <span>© <span id="year">{{ date('Y') }}</span> DZD Ad Network. All rights reserved.</span>
        <span>Made with 💙 in Sri Lanka</span>
    </div>
</footer>
