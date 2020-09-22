@extends('layouts.app')
<style type="text/css">
  .col-sm-12{
     background-color: white;
    font-family: 'Courgette', cursive;
font-family: 'Ibarra Real Nova', serif; font-size: 20px; padding-right: 100%;
  }


</style>
@section('content')

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<style type="text/css">
	#contact .card:hover i,#contact .card:hover h4{
	color: #87d37c;
}
</style>
<section id="contact">
       <div class="container" style="padding:10px 16px">
           <h3 class="text-center text-uppercase" style="font-family: 'Courgette', cursive;
font-family: 'Ibarra Real Nova', serif;
font-family: 'Girassol', cursive;">Contact us</h3>
           
           <div class="row" style="margin-left: 150px;">
             <div class="col-sm-12 col-md-8 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Call us</h4>
                    <p>0011223344</p>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Office loaction</h4>
                    <address>Bhaktapur, Surabinayak </address>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Email</h4>
                    <p>http://dikshyakarki55@gmail.com</p>
                  </div>
                </div>
             </div>
           </div>
       </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
@endsection
