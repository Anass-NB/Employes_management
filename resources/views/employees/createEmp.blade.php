@extends('adminlte::page')

@section('title')
    Add Employe 
@endsection

@section('content')
  <div class="container">
    <div class="card my-4">
      <div class="card-header text-center text-uppercase font-weight-bold text-primary">
        Add New Employee
      </div>
      <div class="card-body">
        <form action="{{ route("storeemp") }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="registration_number" class="form-label">registration number</label>
            <input type="number"  class="form-control" id="registration_number" name="registration_number" value="{{ old("registration_number") }}">
          </div>
          <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" value="{{ old("fullname") }}">
          </div>
          
          <div class="mb-3">
            <label for="depart" class="form-label">Departement</label>
            <input type="text" class="form-control" id="depart" name="depart" value="{{ old("depart") }}">
          </div>
          
          <div class="mb-3">
            <label for="hire_date" class="form-label">Hired Date</label>
            <input type="date" class="form-control" id="hire_date" name="hire_date" value="{{ old("hire_date") }}">
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="tel" class="form-control" id="phone" name="phone" value="{{ old("phone") }}">
          </div>
          <div class="mb-3">
            <label for="address" class="form-label">Adress</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old("address") }}">
          </div>
          <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" value="{{ old("city") }}">
          </div>
          
          <button type="submit" class="btn btn-primary">Create Employe</button>
        </form>

      </div>
    </div>
    
  </div>
@endsection

