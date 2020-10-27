@extends("base")

@section("content")
    <form method="POST" action="/register/create">
        @csrf
        <div id="form" class="forms bg-light m-5 p-5">
            <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="name" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="name" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="InputPassword">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
