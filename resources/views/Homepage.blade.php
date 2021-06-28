@extends('layout')
@section('page_title','Home Page')
@section('container')
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>

<h1><center>Details of All Employees</center></h1><br><br>

<div class="container">
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>ID</th>
	  <th>Name</th>
	  <th>Date of Birth</th>
      <th>Image</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Mobile</th>
      <th>Skills</th>
      <th>Address</th>
	  <th>Action</th>
    </tr>
    @foreach($result as $list)
    <tr>
      <td>{{$list->id}}</td>
      <td>{{$list->name}}</td>
      <td>{{$list->dob}}</td>
      <td><img src="{{asset('storage/post/'.$list->image)}}" width="100px"/></td>
      <td>{{$list->email}}</td>
      <td>{{$list->gender}}</td>
      <td>{{$list->mobile}}</td>
      <td>{{$list->skills}}</td>
      <td>{{$list->address}}</td>
      <td><a class="btn btn-info color_white" href="{{url('manage/'.$list->id)}}">Edit</a>
		  <a class="btn btn-danger color_white" href="{{url('delete/'.$list->id)}}">Delete</a></td>
    </tr>
    @endforeach
    
  </table>
</div>
</div>

									
								 

@endsection