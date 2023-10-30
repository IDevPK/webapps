@extends('layouts.masterlayout')
@section('content')
    <h1>
      Users List and Library Status
    </h1>
    <br>
    <p>We have users list here from DataBase</p>
    <br>
  <table>
    <tr>
      <th>Student ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>City</th>
      <th>Subject</th>
      <th>Percentage</th>
      <th>Age</th>
    </tr>
    @foreach ($data as $user)
    <tr>
      <td>{{$user->student_id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->city}}</td>
      <td>{{$user->subject}}</td>
      <td>{{$user->percentage}}</td>
      <td>{{$user->age}}</td>
    </tr>
    @endforeach
  </table>
   
@endsection

