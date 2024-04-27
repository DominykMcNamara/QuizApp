<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      x-data="{ darkMode: '{{ session('theme', 'light') }}' === 'dark' }" :class="{ 'dark': darkMode }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @hasSection('title')

        <title>@yield('title') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class=" min-h-screen
    bg-white
    bg-pattern-background-mobile-light
    desktop:bg-pattern-background-desktop-light
    tablet:bg-pattern-background-tablet-light bg-cover bg-center
    dark:bg-navy
    dark:bg-pattern-background-mobile-dark
    dark:tablet:bg-pattern-background-tablet-dark
    dark:desktop:bg-pattern-background-desktop-dark
    dark:text-white ">
<x-Navbar />
@yield('body')

</body>
</html>
