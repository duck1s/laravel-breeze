<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<header class="header">
    <h2>Title</h2>
    <nav class="navigationbar">
        <ul class="navigationbar__list">
            <li class="navigationbar__listitem"><a class="navigationbar__link" href="{{ route('home') }}">Home</a></li>
            <li class="navigationbar__listitem"><a class="navigationbar__link" href="{{ route('blog') }}">Blog</a></li>
        </ul>
    </nav>
</header>
<main class="main">
    {{ $slot }}
</main>
<footer class="footer">
    <p>Made by Joeri Breedveld</p>
</footer>

</body>
</html>
