@extends('layouts.masterlayout')
@section('content')
<h1>Update User Data</h1>

<div class="container">
  <div class="row">
    <div class="col16">
      <form action="{{route('updateuser',$data->student_id)}}" method="POST">
        @csrf
      <div class="mb-1">
        <label class="form-label" for="name">Name</label>
        <input class="form-control" type="text" value="{{$data->name}}" name="name">
      </div>
      <div class="mb-1">
        <label class="form-label" for="email">Email</label>
        <input class="form-control" type="email" value="{{$data->email}}" name="email">
      </div>
      <div class="mb-1">
        <label class="form-label" for="city">City</label>
        <input class="form-control" type="text" value="{{$data->city}}" name="city">
      </div>
      <div class="mb-1">
        <label class="form-label" for="subject">Subject</label>
        <input class="form-control" type="text" value="{{$data->subject}}" name="subject">
      </div>
      <div class="mb-1">
        <label class="form-label" for="percentage">Percentage</label>
        <input class="form-control" type="number" value="{{$data->percentage}}" name="percentage">
      </div>
      <div class="mb-1">
        <label class="form-label" for="age">Age</label>
        <input class="form-control" type="number" value="{{$data->age}}" name="age">
      </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>
</div>
@endsection