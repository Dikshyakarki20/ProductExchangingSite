@extends('layouts.app')
<style type="text/css">
  .form-group{
     background-color: white;
    font-family: 'Courgette', cursive;
font-family: 'Ibarra Real Nova', serif; font-size: 20px;
border: 2px solid black;
        

  }
</style>
@section('title')
@section('content')
<h2 class="title" style="text-align: center; font-family: 'Courgette', cursive;
font-family: 'Ibarra Real Nova', serif;
font-family: 'Girassol', cursive; ">Edit Project</h2>
<div class="container">
<form method="POST" action="/projects/{{$project->id}}" enctype="multipart/form-data" style="margin-bottom:1em;">
	@method ('PATCH')
	@csrf
	<div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ProductName" name="Name" value="{{$project->Name}}">
    
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Description" placeholder="Description">{{$project->Description}}</textarea>
</div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Category</label>
    <select class="form-control" id="exampleFormControlSelect1" name="Category">
      <option value="Clothes">Clothes</option>
      <option value="Electronics">Electronics</option>
      <option value="Automobile">Automobile</option>
      <option value="Homeappliances">Home appliances</option>
      <option value="Other">Other</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Price" name="Price" value="{{$project->Price}}">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">InExchange</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="InExchange" name="InExchange" value="{{$project->InExchange}}">
    
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload Product Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
@include('errors')
</form>
<form method="POST" action="/projects/{{$project->id}}">
	@method ('DELETE')
	@csrf
	
	<div class="field">
	<div class="control">
		<button type="submit" class="button">Delete Project </button>
	</div>
</div>
</form>
</div>
@endsection