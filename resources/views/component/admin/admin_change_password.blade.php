@extends('root.main')
@section('main')
<div class="container">
<h1 style="text-align: center; margin-bottom:23px;">Change Password</h1>
    <form action="" method="POST">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Enter your current password</label>
          <input type="text"
            class="form-control" name="old_password" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Enter your New password</label>
          <input type="text"
            class="form-control" name="new_password" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <button class="btn btn-primary">Save</button>
    </form>
</div>
@endsection