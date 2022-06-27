@extends ('products.app')
@section('content')
<div class="container jumbotron mt-5" style="width:50%">
<h1>Sign Up</h1>
<p>Hi! Please kindly register to have our user experience</p>
<div class="">
    <form action="{{ route('signUp') }}" method="post">
        @csrf
        @method('post')
    <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" name="name" class="form-control">

    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="password_confirm">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control">
    </div>
    <div class="form-group">
<button type="submit" class="btn btn-primary" style="background-color: blue; color:whitesmoke;border:none"> Create Profile</button>
Already registered? Please kindly <a href="{{route('login')}}">Login</a> instead.
    </div>

</form>
</div>
</div>

@endsection
