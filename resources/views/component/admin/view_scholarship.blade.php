@extends('root.main')
@section('main')
<div class="container">
<h1 style="text-align: center; margin-bottom:23px;">Scholarship Details</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Last Date</th>
      <th scope="col">Amount</th>
      <th scope="col">Qualification</th>
      <th scope="col">Marks</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($scholarship as $i)
    <tr>
      <td>{{$i->name}}</td>
      <td>{{$i->last_date}}</td>
      <td>{{$i->amount}}</td>
      <td>{{$i->qualification}}</td>
      <td>{{$i->marks}}</td>
      <td>
        <a href="{{route('update_scholarship',$i->id)}}" class="btn btn-success">Update</a>
        <a href="{{route('delete_scholarship',$i->id)}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection