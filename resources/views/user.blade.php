@extends('layouts.masterlayout')
@section('content')
<h1>User Detail is as Under</h1>
<div class="container">
  <div class="table">
        <table class="table table-primary table-bordered table-striped">
@foreach ($data as $user )
          {{-- <tr><td>{{$user->student_id}}</td></tr> --}}
          <tr><td>Name : </td><td>{{$user->name}}</td></tr>
          <tr><td>Email : </td><td>{{$user->email}}</td></tr>
          <tr><td>Age : </td><td>{{$user->age}}</td></tr>
          <tr><td>Subject : </td><td>{{$user->subject}}</td></tr>
          <tr><td>Percentage : </td><td>{{$user->percentage}}</td></tr>       
@endforeach

</table>
</div>
</div>
@endsection

