@extends('root.main')
@section('main')
<div class="container">
    <h1 style="text-align: center; margin-bottom:23px;">Create Your Account</h1>
    <div class="myform">
        <form class="row g-3" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="validationDefault01" value="" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="validationDefault02" value="" required>
            </div>
            <div class="col-md-4">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="number" name="mobile" class="form-control" id="mobile" value="" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault05" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="validationDefault05" required>
            </div>
            <label for="">Enter your Porifle picture</label>
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="img" id="inputGroupFile02" accept="image/*" required>
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
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
            <a href="{{route('login')}}">Already have an account?? Login here</a>
        </div>
    </div>
</div>
@endsection