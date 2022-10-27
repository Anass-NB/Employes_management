@extends('adminlte::page')

@section('title')
    {{ $employe->fullname }}
@endsection

@section('content')
  <div class="container">
    <div class="card my-4">
      <div class="card-header text-center text-uppercase font-weight-bold text-white bg-light">
        Employee Details :  {{ $employe->fullname }}
      </div>
      <div class="card-body">
          <div class="text-center mb-2">
            <a href="{{ route("vacationemp",$employe->registration_number) }}" class="btn btn-outline-success" >Vacation Request</a>
          </div>
          <div class="mb-3">
            <label for="registration_number" class="form-label">registration number</label>
            <input type="number" disabled  class="form-control rounded-0" id="registration_number" name="registration_number" value="{{ old("registration_number",$employe->registration_number) }}">
          </div>
          <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" disabled class="form-control" id="fullname" name="fullname" value="{{ old("fullname",$employe->fullname) }}">
          </div>
          
          <div class="mb-3">
            <label for="depart" class="form-label">Departement</label>
            <input type="text" disabled class="form-control" id="depart" name="depart" value="{{ old("depart",$employe->depart) }}">
          </div>
          
          <div class="mb-3">
            <label for="hire_date" class="form-label">Hired Date</label>
            <input type="date" disabled class="form-control" id="hire_date" name="hire_date" value="{{ old("hire_date",$employe->hire_date) }}">
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="tel" disabled class="form-control" id="phone" name="phone" value="{{ old("phone",$employe->phone) }}">
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Adress</label>
            <input type="text" disabled class="form-control" id="address" name="address" value="{{ old("address",$employe->address) }}">
          </div>
          <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" disabled class="form-control" id="city" name="city" value="{{ $employe->city }}">
          </div>
          



      </div>
    </div>
    
  </div>
@endsection


@section("js")

{{-- Sweet Alert 2 --}}


@endsection