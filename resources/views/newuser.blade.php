@extends('layouts.masterlayout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-16">
      <h1>Add New User</h1>
      <form action="{{route('createuser')}}" method="POST">
        @csrf
        <div class="mb-1">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" name="email">
          </div>
          <div class="mb-3">
            <label class="form-label">City</label>
            <input type="text" class="form-control" name="city">
            </div>
            <div class="mb-3">
              <label class="form-label">Subject</label>
              <input type="text" class="form-control" name="subject">
              </div>
              <div class="mb-3">
                <label class="form-label">Percentage</label>
                <input type="number" class="form-control" name="percentage">
                </div>
                <div class="mb-3">
                  <label class="form-label">Age</label>
                  <input type="number" class="form-control" name="age">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection
