@extends('layouts.masterlayout')
@section('content')
    <h1>
      Users List and Library Status
    </h1>
    <br>
    <p>We have users list here from DataBase</p>
    {{-- <a href="{{route('createuser')}}" class="btn btn-success btn-sm">Add New</a> --}}
    <a href="{{route('addUser')}}" class="btn btn-success btn-sm">Add New</a>
    <a href="{{route('deleteall')}}" class="btn btn-danger btn-sm">Delete All</a>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <table class="table table-primary table-bordered table-striped">
            <tr>
              <th>Student ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>City</th>
              <th>Subject</th>
              <th>Percentage</th>
              <th>Age</th>
              <th>View</th>
              <th>Update</th>
              <th>Delete</th>
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
             
              <td><a href="{{route('user',$user->student_id)}}" class="btn btn-primary btn-sm">View</a></td>
              <td><a href="{{route('updateuser',$user->student_id)}}" class="btn btn-warning btn-sm">Update</a></td>
              <td><a href="{{route('deleteuser',$user->student_id)}}" class="btn btn-danger btn-sm" id="{{$user->student_id}}">Delete</a></td>

            </tr>
            @endforeach

          </table>
        </div>
      </div>
    </div>
    
   
@endsection

