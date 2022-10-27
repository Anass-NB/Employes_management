@extends('adminlte::page')

@section("plugins.Datatables",true)
@section('title')
    Employees 
@endsection

@section('content')

    <div class="card my-4">
      <div class="card-header text-center text-uppercase font-weight-bold text-white bg-primary">
        All Employees ({{ App\Models\Employee::count() }})
      </div>
      <div class="card-body">
        <table class="table table-hover" id="emp_table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">registration_number</th>
              <th scope="col">Fullname</th>
              <th scope="col">Departement</th>
              {{-- <th scope="col">hired_date</th> --}}
              <th scope="col">phone</th>
              {{-- <th scope="col">Adress</th> --}}
              <th scope="col">City</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($employees as $key => $employe )    
            <tr>
              <th scope="row">{{ $key+=1 }}</th>
              <td>{{ $employe->registration_number }}</td>
              <td>{{ $employe->fullname }}</td>
              <td>{{ $employe->depart }}</td>
              {{-- <td>{{ $employe->hire_date }}</td> --}}
              <td>{{ $employe->phone }}</td>
              {{-- <td>{{ $employe->address }}</td> --}}
              <td>{{ $employe->city }}</td>
              <td class="d-flex">
                <a href="{{ route("showemp",$employe->registration_number) }}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                <a href="{{ route("editemp",$employe->id) }}" class="btn btn-sm btn-secondary mx-2"><i class="fas fa-edit"></i></a>
                <a href="{{ route("deleteemp",$employe->id) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>

              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
    

@endsection

@section("js")
<script>
  $(document).ready( function () {
    $('#emp_table').DataTable({
      dom : "Bfrtip",
      Buttons : [
        "copy","excel","csv","pdf","print","colvis"
      ]
    });
} );
</script>


@if (session()->has("success"))
  <script>
    Swal.fire(
    'Add Employee',
    'Employee Added Successfully !',
    'success'
    )
  </script>
@endif()

@endsection