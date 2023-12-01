<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <!-- TODO -->
        <ul>
            <li>
                <a href="{{ route('main.home') }}">
<button class="button_base" role="Accueil">Accueil</button> </a>
            </li>
            <li>
                <a href="/menu">
<button class="button_base" role="Menu">Menu</button></a>
            </li>
        </ul>
</header>
        @yield('content')
    <footer>
      <!-- TODO -->  
    </footer>
</body>
</html>