@extends('layout')
@section('page_title','Create/Update')
@section('container')

<div class="container">
  <h2>Create/Update Details</h2>
  <form action="{{url('/submit/'.$result['0']->id)}}" method="post" enctype='multipart/form-data'>
  @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="name" class="form-control" id="name" name="name"  value="{{$result['0']->name}}">
    </div>
    <div class="form-group">
      <label for="dob">Date of Birth</label>
      <input type="date" class="form-control" id="dob" name="dob" value="{{$result['0']->dob}}">
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" class="form-control" id="image" name="image" value="{{$result['0']->image}}">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{$result['0']->email}}">
    </div>
    <label for="gender">Gender</label>
    <br>
    <select id="gender" name="gender" value="{{$result['0']->gender}}">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Trans Gender">Trans Gender</option>
      <option value="Prefer Not to disclose">Prefer Not to disclose</option>
    </select>
    <br>
    <div class="form-group">
      <label for="text">Mobile</label>
      <input type="text" class="form-control" id="mobile" name="mobile" value="{{$result['0']->mobile}}">
    </div>
    <div class="form-group">
      <label for="skills">Skills</label>
      <br>
      <textarea id="skills" name="skills" rows="4" cols="50" >{{$result['0']->skills}}</textarea>
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <br>
      <textarea id="address" name="address" rows="4" cols="50" >{{$result['0']->address}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection