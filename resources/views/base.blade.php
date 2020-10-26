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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div id="dark-mode" class="dark-mode justify-content-center">
        <img class="moon" src="{{asset("images/moon.png")}}">
        <caption class="caption">Dark Mode</caption>
    </div>
    <a class="navbar-brand" href="/">Blank School</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active ml-4">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ml-4">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item ml-4">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item ml-4">
                <a class="nav-link" href="#">Updates</a>
            </li>
        </ul>
        <ul class="navbar-nav form-inline my-2 my-lg-0">
            <li class="nav-item mr-5">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="#">Register</a>
            </li>
        </ul>
    </div>
</nav>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('images/image1.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/image2.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/image3.jpg') }}" alt="Third slide">
        </div>
    </div>
</div>
    @yield("content")
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="{{asset("/js/app.js")}}"></script>
</body>
</html>