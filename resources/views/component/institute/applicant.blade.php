@extends('root.main')
@section('main')
<div class="container">
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">image</th>
                <th scope="col">View</th>
            </tr>
        </thead>
        @foreach ($student as $i )
        <tbody>
            <tr class="">
                <td>{{$i->name}}</td>
                <td><img src="{{asset($i->image)}}" height="78" width="78" alt=""></td>
                <td><a href="{{route('student',$i->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
</div>
@endsection