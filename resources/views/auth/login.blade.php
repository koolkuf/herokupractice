@extends ('products.app')
@section('content')
<div class="container jumbotron mt-5" style="width:50%">
    <h1>Welcome! Please kindly login</h1>
    <p>Hi! Please kindly login to have our user experience</p>
    <div class="">
        <form action="{{ route('signIn') }}" method="post">
            @csrf
            @method('post')
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" name="password">
        </div>

        <div class="form-group">
    <button type="submit" style="background-color: blue; color:whitesmoke;border:none"> Sign In</button>
Not yet registered? Please kindly <a href="{{route('register')}}">Sign Up here</a> .

        </div>

    </form>
    </div>
    </div>

@endsection
