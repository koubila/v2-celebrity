<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/@yield('css').css">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <div class="title">
            <h1>Profile Browser</h1>
        </div>
        <button><a href="/backOffice">Back Office</a></button>
        @yield('header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer></footer>
</body>

</html>
