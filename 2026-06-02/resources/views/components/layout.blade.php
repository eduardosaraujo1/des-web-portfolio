@props(['title' => 'Laravel'])
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel="stylesheet" href="{{asset('css/atomic.css')}}">
</head>
<body>
    <header>
        <nav class="navbar">
            <a class="nav-brand" href="{{ route('home') }}">
                <span>LARAVEL</span>
            </a>
            <ul class="nav-items">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('eventos.index') }}">Eventos</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>