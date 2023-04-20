@extends('root.main')
@section('main')
<div class="cont" style="display: flex;">
    <div class="sidenav">
        <img src="{{asset($student->image)}}" alt="" height="90" width="90">
        <div class="details">{{$student->name}}</div>
        <div class="details"><i class="fa fa-envelope" aria-hidden="true"> {{$student->email}}</i></div>
        <div class="details"><i class="fa fa-phone" aria-hidden="true"> {{$student->mobile}}</i></div>
        <div class="details"><a href="{{route('track')}}"><i class="fa fa-map-marker" aria-hidden="true"> Track Your Application</i></a></div>
        <div class="details">Change Password</div>
        <div class="details"><a href="{{route('logout')}}" class="btn btn-danger"><i class="fa fa-sign-out" aria-hidden="true"> LogOut</i></a></div>
    </div>
    <div class="content" style="margin-left: 43px;">
      @if (Session::has('apply'))
      <div class="alert alert-success" role="alert">
        {{Session::get('apply')}}
      </div>
      @endif
@if (!$student->scholarship_id)
@foreach ($scholarship as $i )
<div class="card">
  <div class="card-header">
    Scholarship
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$i->name}}</h5>
    <ul>
        <li class="card-text">Educational Qualifications: {{$i->qualification}}</li>
        <li class="card-text">Marks: {{$i->marks}} abve</li>
        <li class="card-text">Amount: {{$i->amount}}</li>
        <li class="card-text">Last Date: {{$i->last_date}}</li>
    </ul>
    <a href="{{route('apply',$i->id)}}" class="btn btn-success">Apply</a>
  </div>
</div>
@endforeach
@else
<div class="card">
<div class="card-header">
    Applied Scholarship
  </div><div class="card-body">
    <h5 class="card-title">{{$sc->name}}</h5>
    <ul>
        <li class="card-text">Amount: {{$sc->amount}}</li>
    </ul>
    <a href="{{route('track')}}" class="btn btn-success"><i class="fa fa-map-marker" aria-hidden="true"> Track Your Application</i></a>
  </div>
</div>
@endif
    </div>
</div>
@endsection