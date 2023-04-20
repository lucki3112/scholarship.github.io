@extends('root.main')
@section('main')
<div class="container">
<h1 style="text-align: center; margin-bottom:23px;">Institute signup</h1>
    <div class="myform">
    <form class="row g-3" method="POST">
    @csrf
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Institute name</label>
    <input type="text" name="name" class="form-control" id="validationDefault01" value="" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="validationDefault02" value="" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="validationDefault02" value="" required>
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="validationDefault03" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Mobile number</label>
    <input type="text" class="form-control" name="mobile" id="validationDefault05" required>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">SignUp</button>
  </div>
</form>
<div class="hyper">
            <a href="{{route('institute_login')}}">Already have account?? Login here</a>
        </div>
    </div>
</div>
@endsection