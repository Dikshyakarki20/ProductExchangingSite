@extends('layouts.app')
<style type="text/css">
	.card{
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 02);
    max-width: 300px;
    margin: auto;
    margin-top: 20px;
    text-align: center;
    font-family: 'Courgette', cursive;
font-family: 'Ibarra Real Nova', serif; font-size: 16px;

  }
  .card-img-top{
    width: 100%;
    height: 30vw;
    object-fit:cover;
  }
</style>
@section('title')
@section('content')
<div class="container">
<h1 style="text-align: center; font-family: 'Courgette', cursive;
font-family: 'Ibarra Real Nova', serif;
font-family: 'Girassol', cursive;">Products</h1>
<div class="card-group" >
	@foreach($projects as $project)
	<div class="col-sm-4" style="width: 300px;">
<div class="card">
  <img src="/images/{{$project->image}}" alt="John" class="card-img-top">
  <div class="card-body">
  
    <h5 class="card-title">{{$project->Name}}</h5>
    
    <a href="/projects/{{$project->id}}" class="btn btn-primary">Details</a>
  </div>
</div>

</div>
@endforeach
</div>
</div>
@endsection