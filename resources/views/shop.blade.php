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
		height: 20vw;
		object-fit:cover;
	}
</style>

@section('content')
<h2 style="text-align: center; font-family: 'Courgette', cursive;
font-family: 'Ibarra Real Nova', serif;
font-family: 'Girassol', cursive;">Products to Swap</h2>
<div class="container">
<div class="card-group" >
	@foreach($projects as $project)
	<div class="col-sm-3" >
<div class="card">
  <img src="/images/{{$project->image}}" alt="john" class="card-img-top img fluid" >
  <div class="card-body">
    <h5 class="card-title">{{$project->Name}}</h5>
    <p class="card-text">{{$project->InExchange}}}</p>
    <a href="/projects/{{$project->id}}/details" class="btn btn-primary">More Details</a>
  </div>
</div>

</div>
@endforeach
</div>
</div>
@endsection