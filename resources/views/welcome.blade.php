@extends("layouts.app")

@section("title")
Employes Management 
@endsection

@section("linkcss")
  <link rel="stylesheet" href="{{ asset("css/welcome.css") }}">
@endsection


@section('content')

<div class="overlay">
  <div class="content">

    <div class="text">
      <h2 class="lead text-light ">Employes Management</h2>
      <p class="lead text-white">You Can Manage ALL Employes Easly.</p>
      <button>
        @auth
        <a href="{{ url("/home") }}" class="text-light">Dashboard</a>
        @endauth
        @guest
        <a href="{{ route("login") }}" class="text-light">Login</a>  
        @endguest
      </button>
    </div>

  </div>

</div>




  {{-- <div class="con">
      <nav class="navbar navbar-expand-lg bg-light container">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">ANB.net</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Welcome</a>
                </li>


                @guest
                <li class="nav-item">
                  <a class="nav-link btn btn-primary text-light" href="{{ route("login") }}">Login</a>
                </li>
                @endguest

                @auth
                <li class="nav-item">
                  <a class="nav-link active lead text-success" aria-current="page" href="{{ url("/home") }}">You are connected</a>
                </li>
                @endauth

                {{-- @auth
                <li class="nav-item">
                  <a class="nav-link btn btn-primary" href="#">Login</a>
                </li>
                @endauth --}}

              {{-- </ul>
            </div>
          </div>
        </nav>
  </div> --}} 
@endsection