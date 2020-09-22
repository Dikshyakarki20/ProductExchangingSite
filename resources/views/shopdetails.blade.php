@extends('layouts.app')
<style type="text/css">
  .card-body{
    background-color: white;
    font-family: 'Courgette', cursive;
font-family: 'Ibarra Real Nova', serif; font-size: 16px;
  }
</style>
@section('title')
@section('content')
<div class="container">
  <h1 style="text-align: center; font-family: 'Courgette', cursive;
font-family: 'Ibarra Real Nova', serif;
font-family: 'Girassol', cursive;">Swap Product</h1>
<div class="card-group" >
	
	<div class="col-sm-4" style="width: 300px; margin: 0 auto;">
<div class="card" style="padding-top: 10px; text-align: center;">
  <img src="/images/{{$project->image}}" class="card-img-top" style="height: 400px;width: auto;">
  <div class="card-body">
    <h5 class="card-title" style="font-size: 20px;"><b>Name: </b>{{$project->Name}}</h5>
    <p class="card-text" style="font-size: 20px;"><b>Product Description: </b>{{$project->Description}}</p>
    <p class="card-text" style="font-size: 20px;"><b>Category:</b> {{$project->Category}}</p>
    <p class="card-text" style="font-size: 20px;"><b>Price:</b> {{$project->Price}}</p>
    <p class="card-text" style="font-size: 20px;"><b>In-Exchange:</b> {{$project->InExchange}}</p>
    @guest
    @if(Route::has('register'))
    <a href="/login"><button @click="swaap" v-show="!swap" class="btn btn-primary">Swap</button></a>
    @endif
    @else
    <div id="id">
    <button @click="swaap" v-show="!swap" class="btn btn-primary">Swap</button>
    <button @click="intrested" v-show="swap" class="btn btn-primary">Interested</button>
  </div>
  @endguest
   
  </div>
  </div>
</div>

</div>

</div>
</div>
@endsection