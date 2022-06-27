<!doctype html>
<html lang="en">
  <head>
    <title>php app</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href=" {{route('products.index')}} ">Crud App</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

            <li class="nav-item active">
                <a class="nav-link" href="{{route('products.index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            @auth
            <li class="nav-item active">
                <a class="nav-link" href="{{route('products.index')}}">Dashbooard <i class="fa fa-dashboard" aria-hidden="true"></i><span class="sr-only">(current)</span></a>
            </li>
            @endauth
             @guest
             <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
            </li>
             @endguest


        </ul>
            @guest
            <form class="form-inline my-2 my-lg-0" action="{{route('login')}}">
                <button class="btn btn-outline-success my-2 my-sm-0" >
                     Login </button>
            </form>

            @endguest
            @auth
            <form action=" {{route('logout')}} " method="post">
                @csrf
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>

            </form>
            @endauth


    </div>
</nav>
    <div class="container">

        @yield('content')
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
