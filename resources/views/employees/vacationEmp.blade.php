@extends('adminlte::page')

@section('title')
    {{ $employeVacation->fullname }} | Vacation Request
@endsection

@section('content')
  <div class="container">
    <div class="card my-4">
      <div class="card-header text-center text-uppercase font-weight-bold text-white bg-light">
        Vacation Request For :  {{ $employeVacation->fullname }}
      </div>
      <div class="card-body">

        <p class="lead text-center">
          <br>
          <h3 class="display-4">Vacation Request</h3>
          <h6>Date : {{ Carbon\Carbon::now() }}</h6>
          <h6>Regitration Number : {{ $employeVacation->registration_number }}</h6>
          <h6>Departement : {{ $employeVacation->depart }}</h6>
          <h6>Phone Number : {{ $employeVacation->phone }}</h6>
          <br>
          Dear __________ <br><br>
          I wanted to remind you that, per our conversation in this month <br><br><br>, I will be out of the office __________________  ,<br><br><br><br> I will return to the office as normal on _________________.
          <br><br><br>
          Thank you,
          <br><br>         
        {{ $employeVacation->fullname }} 
        </p>

      </div>
      <div class="card-footer">
        <button class="print-btn btn">
          <a class="btn btn-primary " onclick="
            document.querySelector('.print-btn').style.display = 'none'
            setTimeout(function(){
              document.querySelector('.print-btn').style.display = 'block'
            },2000)
            window.print()       
          ">
            <i class="fas fa-print text-light"></i> Print Now
          </a>
        </button>
      </div>
    </div>
    
  </div>
@endsection


@section("js")

{{-- Sweet Alert 2 --}}


@endsection