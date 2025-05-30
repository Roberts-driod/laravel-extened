

<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Manas lapas nosaukums')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <!-- Navigācijas josla -->
            <a href="{{ url('/books') }}">Books</a>
            <a href="{{ url('/contacts') }}">Contact</a>
        </nav>
    </header>

    <main>
        @yield('content')  
    </main>

    <footer>
        <p>Layouts</p>
    </footer>

   
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
