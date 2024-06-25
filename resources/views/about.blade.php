<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <p class="logoText">Blog</p>
        </div>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
        </ul>
    </header>

    <main>
        <article class="content">
            <p class="contentTitle">About Me</p>
            <div class="contentArticle">
                <p>
                    Name: {{ $name }} <br>
                    Email: {{ $email }} <br>
                    GitHub: <a href="https://github.com/Davinprm" style="text-decoration:underline;">Davinprm</a>
                </p>
            </div>
        </article>
    </main>
</body>
</html>