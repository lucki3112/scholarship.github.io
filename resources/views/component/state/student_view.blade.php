@extends('root.main')
@section('main')
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">View</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($student as $i)
    <tr>
      <td>{{$i->name}}</td>
      <td><img src="{{asset($i->image)}}" height="78" width="78" alt=""></td>
      <td><a href="{{route('student_detail',$i->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection