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

@section("title")
    Welcome to blank school
@endsection

@section("content")
    <div class="container">
        <h1 class="welcome">Welcome to the school network</h1>
        <p class="lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur deserunt doloremque dolorum eius et eveniet id illum iste iure iusto magni molestiae nesciunt quaerat repellat repudiandae, sint sunt, suscipit voluptatem.</p>
        <h1 class="welcome">Header No 2</h1>
        <p class="lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi asperiores at debitis dignissimos doloremque eius enim, expedita facere ipsa iusto natus porro quae, quia sequi totam ut voluptas voluptatibus.</p>
    </div>
@endsection
