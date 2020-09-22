@extends('layouts.app')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
<style type="text/css">
    .background{
        height:100vh;
        background-image:url('images/banner.jpg');
        
        background-size:cover; 
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
@section('content')

       <div class="background"></div>
<div class="container">
    <!-- About -->
    <section class="content-section text-black bg-primary" style="background-color: white;">
       
            <div class="row p-3" style="background-color: white; margin-top: 20px;">


                <div class="row align-items-center ">
                    <div class="col-8 col-md-4 animated fadeInUp  delay-1s">
                        <img alt="image" class="img-fluid" src="images/products.jpg">
                    </div>

                    <div class="col-4 col-md-2 animated fadeInUp  delay-1s">
                        <div class="row">
                            <div class="col-12">
                                <img alt="image" class="img-fluid" src="images/products-2.jpg">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12">
                                <img alt="image" class="img-fluid" src="images/products-3.jpg">
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-6 col-lg-5 ml-auto pt-5 pt-md-0 animated fadeInUp  delay-1s" style="font-family: 'Courgette', cursive; font-size: 16px;">

               
                        <p class="mt-3"> Swap Nepal is the quickest and easiest ways to sell your products online. You can register and post your unused or used item which is no longer your use and ask for the product you want. As the saying goes,'One man's trash is another man's treasure.' </p>
                        <p class="mt-3">By using Swap Nepal you're not only ganing some cool free things, but you're also helping the environment by not allowing unwanted items to end up in a landfill.  </p>
                    </div>
                </div>
            </div>

       
    </section>
  </div>
