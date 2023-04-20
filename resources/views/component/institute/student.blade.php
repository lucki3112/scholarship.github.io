@extends('root.main')
@section('main')
<div class="container">
    <span class="text"><img src="{{asset($student->image)}}" height="78" width="78" alt=""></span><br><br>
    <span class="text"><h1>{{$student->name}}</h1></span><br><br>
    <span class="text">Scholarship: {{$scholarship->name}}</span><br>
    <span class="text">Email: {{$student->email}}</span><br>
    <span class="text">Mobile Number: {{$student->mobile}}</span><br>
    <span class="text">State: {{$student->state}}</span><br>
    <span class="text">City: {{$student->city}}</span><br>
    <span class="text">Address: {{$student->address}}</span><br>
    <span class="text">Pin code: {{$student->pin_code}}</span><br>
    <span class="text">Roll number: {{$student->roll_number}}</span><br>
    <span class="text">Stream: {{$student->semester}}</span><br>
    <span class="text">Marks: {{$student->marks}}</span><br>
    <span class="text">Bank account number: {{$student->bank_account_number}}</span><br>
    <span class="text">Bank IFSC code: {{$student->bank_ifsc_code}}</span><br><br><br>
    @if ($student->institute_verification=="Verified")
        <button type="button" class="btn btn-primary">{{$student->institute_verification}}</button>
    @else
    <a href="{{route('verify',$student->id)}}" class="btn btn-success">Verify</a>    
    @endif
</div>
@endsection