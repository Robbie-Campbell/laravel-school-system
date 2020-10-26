@extends("base")

@section("carousel")
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
@endsection

@section("content")
    <div class="container">
        <h1 class="welcome">Welcome to the about page</h1>
        <p class="lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis libero nulla quod saepe. A
            aliquam deserunt doloremque eos ex harum illo incidunt inventore, laudantium magni, officiis tempora totam ut vero!</p>
    </div>
@endsection
