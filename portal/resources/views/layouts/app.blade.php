<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'DZD Ad Network — Sri Lanka&#39;s Modern Ad Server')</title>
    <meta name="description" content="@yield('description', 'DZD Ad Network connects Sri Lankan advertisers and publishers. Serve, target and track ads with real-time stats — billed in LKR. Backed by DZD-Marketing.')">
    <meta name="theme-color" content="#05070d">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="DZD Ad Network">
    <meta property="og:title" content="@yield('title', 'DZD Ad Network — Sri Lanka&#39;s Modern Ad Server')">
    <meta property="og:description" content="@yield('description', 'Serve, target and track ads across Sri Lanka with real-time stats — billed in LKR.')">
    <meta property="og:url" content="@yield('og_url', url()->current())">

    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}?v=1">
</head>
<body>

@include('partials.nav')

<main>
    @yield('content')
</main>

@include('partials.footer')

<script src="{{ asset('assets/js/app.js') }}?v=1"></script>
</body>
</html>
