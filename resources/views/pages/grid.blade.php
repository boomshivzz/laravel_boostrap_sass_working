@extends('layouts/master')

@section('title')
 Bootstrap 4 Grids
@endsection


@section('showcase')
 

<div class="landing">  


    <div class="home-wrap">  
    
    <div class="home-inner">               
        
        </div>
              

    </div>


</div>

<div class="caption text-center">
    <h1>Web development Course </h1>
             <h3>Covers Bootstrap4 and Laravel php Framework</h3>
        
</div>



     
        

@endsection

@section('features')

<div class="jumbotron">
    <div class="container">
    <div class="row ">
       <div class="mycol2 col-xs-12  col-sm-12 col-md-12  text-center">
        <h4 class="heading">Core Features</h4>
           <div class="heading-underline"> </div>
        
        </div>
    <div class="row ">
              <div class="col-xs-12  col-sm-12 col-md-4 text-center">
                <i class="fa fa-dashboard"></i><br>
                <h4>Fully Optimized</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Shimmy shimmy ullala la yeh tadaa tuni</p>
              </div>
              <div class="col-xs-12  col-sm-12 col-md-4 text-center">
                <i class="fa fa-commenting"></i><br>
                <h4>Live Chat Support</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              </div>
              <div class="col-xs-12  col-sm-12 col-md-4 text-center ">
                <i class="fa fa-rocket"></i><br>
                <h4>Fully optimized</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              </div>
            </div>
         <div class="row ">
              <div class="col-xs-12  col-sm-12 col-md-4  text-center">
                <i class="fa fa-send"></i><br>
                <h4>Automated Mails</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Shimmy shimmy ullala la yeh tadaa tuni</p>
              </div>
              <div class="col-xs-12  col-sm-12 col-md-4 text-center">
                <i class="fa fa-plug"></i><br>
                <h4>Plug And Play</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              </div>
              <div class="col-xs-12  col-sm-12 col-md-4 text-center ">
                <i class="fa fa-bell"></i><br>
                <h4>Deadline Reminders</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
              </div>
            </div> 
   </div>
</div>   
    </div> 
    
@endsection

@section('testimonial')

<div class="container">
    <div class="row">  
    <div class="col-md-12 text-center">
        <h2>Testimonials </h2>
    </div>
        
        </div>
    <div class="row ">
        <div class="col-md-6">
             <div class="row ">
                <div class="col-md-4">
                    <img class="testirow" src="../../images/computers.png"  > 
            </div>
            
            <div class="col-md-8">
                <blockquote>
                    <i class="fa fa-quote-left"></i>
                    The Services provided are upto expectations and fulfill our requirements. We wish to avail your services again in the near future.
                      <hr class="testi"> 
                <cite>&#8212;Surya, IOS Developer </cite>
                </blockquote>
            </div>
        </div>
        </div>
        
         <div class="col-md-6">
             <div class="row ">
             <div class="col-md-4">
                 <img class="testirow" src="../../images/showcase.jpg"> 
            </div>
            
            <div class="col-md-8">
                <blockquote>
                    <i class="fa fa-quote-left"></i>
                Once we started using their services there is no looking back. Highly knowledgeable staff will resolve all your queries.
                    <hr class="testi"> 
                <cite>&#8212;Rahul, Software Engineer </cite>
                </blockquote>
            </div>
        </div>
    </div>
</div>

@endsection