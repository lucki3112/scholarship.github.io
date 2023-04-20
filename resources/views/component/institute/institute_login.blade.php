@extends('root.main')
@section('main')
<div class="container">
@if (Session::has('i_success'))
      <div class="alert alert-success" role="alert">
        {{Session::get('i_success')}}
      </div>
      @endif
<h1 style="text-align: center; margin-bottom:23px;">Institute Login</h1>
@if (Session::has('e'))
    <span class="text-danger">{{Session::get('e')}}</span>
@endif
@if (Session::has('p'))
    <span class="text-danger">{{Session::get('p')}}</span>
@endif
    <div class="myform">
        <form action="" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmail">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword">
                </div>
            </div>
            <button class="btn btn-outline-primary" style="margin-top: 23px; margin-right:23px">LogIn</button>
            <button type="reset" class="btn btn-outline-warning" style="margin-top: 23px; margin-right:23px">Reset</button>
        </form>
        <div class="hyper">
            <a href="{{route('institute_signup')}}">Don't have account?? create here</a>
        </div>
    </div>
</div>
@endsection