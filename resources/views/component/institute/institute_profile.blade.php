@extends('root.main')
@section('main')
<h1>Institute name : {{$ins->name}}</h1>
<div class="container" style="display: flex;">
    <a href="{{route('applicant')}}">
<div class="card" style="width: 18rem;background-color:lightsteelblue">
  <div class="card-body">
    <p class="card-text">
    <i class="fa fa-eye" aria-hidden="true"></i><br><br>
        View Applicant
    </p>
  </div>
</div>
</a>
<a href="{{route('institute_logout')}}">
<div class="card" style="width: 18rem;background-color:lightsteelblue">
  <div class="card-body">
    <p class="card-text">
    <i class="fa fa-logout" aria-hidden="true"></i><br><br>
        Logout
    </p>
  </div>
</div>
</a>
</div>
@endsection