@extends('root.main')
@section('main')
<div class="container">
  <h1 style="text-align: center; margin-bottom:23px;">Edit Scholarship</h1>
  <div class="add">
    <form class="row g-3" method="POST">
      @csrf
      <div class="col-md-4">
        <label for="validationDefault01" class="form-label">Scholarship name</label>
        <input type="text" class="form-control" name="name" id="validationDefault01" value="{{$scholarship->name}}" required>
      </div>
      <div class="col-md-4">
        <label for="validationDefault02" class="form-label">Last Date</label>
        <input type="text" class="form-control" name="date" id="validationDefault02" value="{{$scholarship->last_date}}" required>
      </div>
      <div class="col-md-6">
        <label for="validationDefault03" class="form-label">Amount</label>
        <input type="text" class="form-control" name="amount" value="{{$scholarship->amount}}" id="validationDefault03" required>
      </div>
      <div class="col-md-3">
        <label for="validationDefault05" class="form-label">Qualification</label>
        <input type="text" class="form-control" name="qualification" value="{{$scholarship->qualification}}" id="validationDefault05" required>
      </div>
      <div class="col-md-3">
        <label for="validationDefault05" class="form-label">Marks</label>
        <input type="text" class="form-control" name="marks" value="{{$scholarship->marks}}" id="validationDefault05" required>
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
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </form>
  </div>
</div>
@endsection