<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    <header class="bg-info p-3">
        <div class="container">
            <a class="btn btn-outline-light" href="{{ route('home') }}">Home</a>
        </div>
    </header>
    <main class="bg-warning">
        @yield('main_content')
    </main>
    <footer class="bg-info p-3">
        <div class="container">
            <span class="text-white">Footer</span>
        </div>
    </footer>
</body>

</html>
