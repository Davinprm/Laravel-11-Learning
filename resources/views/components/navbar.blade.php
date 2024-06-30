    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $slot }}</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="https://kit.fontawesome.com/a8cf426a44.js" crossorigin="anonymous"></script>    </head>
    <body>
        <header>
            <div class="logo">
                <p class="logoText">Blog</p>
            </div>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/article/">Article</a></li>
                <li><a href="/about">About</a></li>
            </ul>
        </header>