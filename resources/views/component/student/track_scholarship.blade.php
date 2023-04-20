@extends('root.main')
@section('main')
<div class="container">
    <div class="status">
        <div class="header">
            <span class="heading">
                <h1>STATUS OF APPLICATION</h1>
            </span>
        </div>
        <div class="track" style="display: flex;">
            <div class="type">
                <span><b>Type</b></span><br><br>
                <span>Scholarship name</span><br><br>
                <span>Name of the applicant</span><br><br>
                <span>Institute name</span><br><br>
                <span>Status for Institution Level</span><br><br>
                <span>Status for State level</span><br><br>
                <span>Lot number</span><br><br>
                <span>Payment Status</span><br><br>
            </div>
            <div class="activity">
                <span><b>Activity</b></span><br><br>
                <span>{{$scholarship->name}}</span><br><br>
                <span>{{$student->name}}</span><br><br>
                <span>{{$student->university}}</span><br><br>
                <span>{{$student->institute_verification}}</span><br><br>
                <span>{{$student->state_verification}}</span><br><br>
                <span>{{$student->lot_number}}</span><br><br>
                <span>{{$student->payment_status}}</span><br><br>
            </div>
        </div>
    </div>
</div>
@endsection