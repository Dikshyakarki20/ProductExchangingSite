@extends('layouts.app')
<style type="text/css">
  .form-group{
   
    font-family: 'Courgette', cursive;
font-family: 'Ibarra Real Nova', serif; font-size: 20px;
border: 2px solid black;
  }
</style>
@section('content')
	<div class="container">
    <h1 class="title" style="text-align: center; font-family: 'Courgette', cursive;
font-family: 'Ibarra Real Nova', serif;
font-family: 'Girassol', cursive; ">Add a new product</h1>
	<form method="POST" action="/projects" enctype="multipart/form-data">
		@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ProductName" name="Name">
    
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Description" placeholder="Description"></textarea>
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
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Price" name="Price">
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">InExchange</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="InExchange" name="InExchange">
    
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload Product Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@include ('errors')
@endsection