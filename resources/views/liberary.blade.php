@extends('layouts.masterlayout')

@section('content')
<div class="container">
  <div class="row">
    <col15>
      <h1>
        Users List and Library Status
      </h1>
      <br>
      <p>We have users list here from DataBase</p><br>
      @if(Session::get('message') || Session::get('success'))
      <p class="alert alert-danger">
        {{Session::get('message')}}
        {{Session::get('success')}}
      </p>        
      @endif
        
      {{-- <a href="{{route('createuser')}}" class="btn btn-success btn-sm">Add New</a> --}}
      <br>
      <div class="container">
        <div class="row">
          <div class="col-6">
            <table class="table table-primary table-bordered table-striped">
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Book</th>
                <th>Status</th>
                <th>Update</th>
                <th>Delete</th>
                <th>Add Record</th>

              </tr>
              @foreach ($data as $user)
              <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->book}}</td>
                <td>
                  @if ($user->status)
                      Returned
                  @else
                      Book Not Returned
                  @endif
                  </td>
                <td><a href="" class="btn btn-warning btn-sm">Update</a></td>
                <td><a href="" class="btn btn-danger btn-sm" id="{{$user->student_id}}">Add</a></td>
                <td><a href="" class="btn btn-danger btn-sm" id="{{$user->student_id}}">Delete</a></td>
                </tr>
              @endforeach
  
            </table>
          </div>
        </div>
      </div>
      
     <div>
     {{-- {{$data->links('pagination::bootstrap-5')}} --}}
     {{-- {{$data->links()}} --}}
     </div>
    </col15>
  </div>
</div>    
@endsection