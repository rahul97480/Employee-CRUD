@extends('layout')
@section('page_title','Create')
@section('container')

<div class="container">
  <h2>Create/Update Details</h2>
  <form action="{{url('/submit')}}" method="post" enctype='multipart/form-data'>
  @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="name" class="form-control" id="name"  name="name" required>
    </div>
    <div class="form-group">
      <label for="dob">Date of Birth</label>
      <input type="date" class="form-control" id="dob" name="dob" required>
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" class="form-control" id="image" name="image" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <label for="gender">Gender</label>
    <br>
    <select id="gender" name="gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Trans Gender">Trans Gender</option>
      <option value="Prefer Not to disclose">Prefer Not to disclose</option>
    </select>
    <br>

    
    <br>
    <div class="form-group">
      <label for="text">Mobile</label>
      <input type="text" class="form-control" id="mobile" name="mobile">
    </div>
    <div class="form-group">
      <label for="skills">Skills</label>
      <br>
      <textarea id="skills" name="skills" rows="4" cols="50"></textarea>
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <br>
      <textarea id="address" name="address" rows="4" cols="50"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection