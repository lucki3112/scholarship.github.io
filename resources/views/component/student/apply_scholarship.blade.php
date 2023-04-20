@extends('root.main')
@section('main')
<div class="container">
<h1 style="text-align: center; margin-bottom:23px;">{{$scholarship->name}} scholarship</h1>
@if (Session::has('a_fail'))
      <div class="alert alert-danger" role="alert">
        {{Session::get('a_fail')}}
      </div>
      @endif
    <div class="myform">
        <h3 style="text-align: center;">Student details</h3>
        <hr style="border:2px solid black;">
        <form class="row g-3" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="validationDefault01" value="{{$student->name}}" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="validationDefault02" value="{{$student->email}}" required>
            </div>
            <div class="col-md-4">
                <label for="mobile" class="form-label">Mobile number</label>
                <input type="text" name="mobile" class="form-control" id="mobile" value="{{$student->mobile}}" required>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Enter Your profile image</label>
                <input class="form-control" name="img" type="file" id="formFile" accept="image/*" required>
            </div>
            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">City</label>
                <input type="text" name="city" class="form-control" id="validationDefault03" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault04" class="form-label">State</label>
                <select class="form-select" name="state" id="validationDefault04" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="address" required>
            </div>
            <div class="col-md-3">
                <label for="validationDefault05" class="form-label">Pin Code</label>
                <input type="text" class="form-control" name="pin" id="validationDefault05" required>
            </div>
            <h3 style="text-align: center;">Educational details</h3>
            <hr style="border:2px solid black;">
            <div class="col-md-4">
                <label for="university" class="form-label">University name</label>
                <input type="text" name="university" class="form-control" id="university"  required>
            </div>
            <div class="col-md-3">
                <label for="roll" class="form-label">Roll number</label>
                <input type="text" class="form-control" name="roll" id="roll" required>
            </div>
            <div class="col-md-3">
                <label for="strem" class="form-label">Stream</label>
                <input type="text" class="form-control" name="stream" id="strem" required>
            </div>
            <div class="col-md-3">
                <label for="semester" class="form-label">Semester</label>
                <input type="text" class="form-control" name="sem" id="semester" required>
            </div>
            <div class="col-md-3">
                <label for="marks" class="form-label">Marks</label>
                <input type="text" class="form-control" name="marks" id="marks" required>
            </div>
            <h3 style="text-align: center;">Banking details</h3>
            <hr style="border:2px solid black;">
            <div class="col-md-3">
                <label for="account" class="form-label">Account number</label>
                <input type="text" class="form-control" name="account" id="account" required>
            </div>
            <div class="col-md-3">
                <label for="ifsc" class="form-label">IFSC code</label>
                <input type="text" class="form-control" name="ifsc" id="ifsc" required>
            </div>
            <input type="hidden" id="" name="s_id" value="{{$scholarship->id}}">
            <input type="hidden" id="" name="i_verification" value="pending">
            <input type="hidden" id="" name="d_verification" value="pending">
            <input type="hidden" id="" name="s_verification" value="pending">
            <input type="hidden" id="" name="lot_number" value="pending">
            <input type="hidden" id="" name="p_status" value="pending">
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