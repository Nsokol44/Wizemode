<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Wizemode - Websites, Web Apps, PWAs')</title>
    <meta name="description" content="@yield('meta_description', 'Wizemode builds beautiful, fast websites and apps for your business.')">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Wizemode')" />
    <meta property="og:description" content="@yield('meta_description', 'Wizemode builds beautiful, fast websites and apps for your business.')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    @livewireStyles
</head>
<body>
    @yield('content')
    @livewireScripts
</body>
</html>
