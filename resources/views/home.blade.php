@extends('adminlte::page')


@section('title')
    Home page
@endsection

@section('content')
  <div class="container">
    <h1 class=" display-4 my-2">Welcome {{ auth()->user()->name }}</h1>
    <div class="row mb-5">
      <div class="col-md-4">
        <div class="small-box bg-info">
          <div class="inner">
            <h2 class="lead">{{ \App\Models\Employee::count() }}</h2>
            <p>Employes</p>
          </div>
          <div class="icon">
            <div class="fas fa-users"></div>
          </div>
          <a href="{{ route("allemployees") }}" class="small-box-footer">More Info <i class="fas fa-arrow-circle-right"></i></a>
        </div>      
      </div>
    </div>
  </div>
@endsection