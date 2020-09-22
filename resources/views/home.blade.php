@extends('layouts.app')
<style type="text/css">
    .background{
        background-position: center;
  background-size: cover;
  background-image: url("/images/d.jpg");
  min-height: 75%;
  font-family: 'Courgette', cursive;
font-family: 'Ibarra Real Nova', serif;
font-family: 'Girassol', cursive; font-size: 50px;
color: black; text-align: center;
padding-top: 200px;
    }
</style>
@section('content')
<div class="background">
    
    
    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!  
</div>
    
           

                    
               
@endsection
 <!--<div class="row justify-content-center">
        <div class="col-md-8">
           <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
       </div>

    </div>