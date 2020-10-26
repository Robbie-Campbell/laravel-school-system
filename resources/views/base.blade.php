<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>@yield("title")</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light nav-pills">
    <a>
        <div id="dark-mode" class="dark-mode justify-content-center">
            <img class="moon" src="{{asset("images/moon.png")}}">
            <caption class="caption">Dark Mode</caption>
        </div>
    </a>
    <a class="navbar-brand" href="/">Blank School</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-space-evenly nav-fill" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active ml-4">
                <a class="nav-link {{Request::path() === "/" ? "active" : ""}}" href="/">Home</a>
            </li>
            <li class="nav-item ml-4">
                <a class="nav-link {{Request::path() === "about" ? "active" : ""}}" href="/about">About</a>
            </li>
            <li class="nav-item ml-4">
                <a class="nav-link {{Request::path() === "contact" ? "active" : ""}}" href="/contact">Contact</a>
            </li>
            <li class="nav-item ml-4">
                <a class="nav-link" href="#">Updates</a>
            </li>
            <li class="nav-item ml-4">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item ml-4">
                <a class="nav-link {{Request::path() === "register" ? "active" : ""}}" href="/register">Register</a>
            </li>
        </ul>
    </div>
</nav>
@yield("carousel")
@yield("content")
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="{{asset("/js/app.js")}}"></script>
    </body>
</html>
