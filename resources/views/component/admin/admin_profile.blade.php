@extends('root.main')
@section('main')
<div class="con">
<ul class="nav">
    <li class="nav-d"><img src="{{asset($admin->image)}}" alt="" height="58" width="58" style="border-radius: 50%;"></li>
    <li class="nav-d">{{$admin->name}}</li>
    <li class="nav-d"><a href="{{route('admin_change_password')}}">Change Password</a></li>
    <li class="nav-d"><a href="{{route('admin_logout')}}" class="btn btn-danger">Logout</a></li>
</ul>
<div class="container" style="display:flex;margin-top:23px;">
<a href="{{route('add_scholarship')}}">
<div class="card" style="width: 18rem;background-color:lightsteelblue">
  <div class="card-body">
    <p class="card-text">
    <i class="fa fa-plus" aria-hidden="true"></i><br><br>
        Add Scholarchip
    </p>
  </div>
</div>
</a>
<a href="{{route('view_scholarship')}}">
<div class="card" style="width: 18rem;background-color:lightsteelblue">
  <div class="card-body">
    <p class="card-text">
    <i class="fa fa-eye" aria-hidden="true"></i><br><br>
        View Scholarship
    </p>
  </div>
</div>
</a>
</div>
</div>
@endsection
