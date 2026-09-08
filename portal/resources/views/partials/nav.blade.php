@php
    $routes = [
        'home'        => 'Home',
        'advertisers' => 'Advertisers',
        'publishers'  => 'Publishers',
        'pricing'     => 'Pricing',
        'integration' => 'Integration',
        'contact'     => 'Contact',
    ];
@endphp

<header class="nav" id="site-nav">
    <div class="container nav__inner">
        <a href="{{ route('home') }}" class="brand" aria-label="DZD Ad Network home">
            <span class="brand__mark" aria-hidden="true">
                <svg viewBox="0 0 64 64" width="34" height="34" fill="none">
                    <defs>
                        <linearGradient id="brandGrad" x1="0" y1="0" x2="64" y2="64" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#7c3aed"/>
                            <stop offset="1" stop-color="#22d3ee"/>
                        </linearGradient>
                    </defs>
                    <rect width="64" height="64" rx="16" fill="url(#brandGrad)"/>
                    <path d="M20 40c6-1 10-4 12-10M14 34c9-1 16-6 19-18M44 22l6 6-20 20-8 2 2-8 20-20z"
                          stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
            <span class="brand__name">DZD <em>ADS</em></span>
        </a>

        <nav class="nav__links" id="nav-links" aria-label="Main navigation">
            @foreach ($routes as $route => $label)
                <a href="{{ route($route) }}" @if(request()->routeIs($route)) class="is-active" @endif>{{ $label }}</a>
            @endforeach
            <a href="{{ route('contact') }}" class="btn btn--primary btn--sm nav__cta">Get started</a>
        </nav>

        <button class="nav__burger" id="nav-burger" aria-label="Toggle menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
