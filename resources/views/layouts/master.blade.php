<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
        
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

  </head>
  <body>
       <header >
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between fixed-top">
             <a class="navbar-brand" href="#">Brand</a>    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto ">
      
        
        <li class="nav-item">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
     
      
         <li class="nav-item">
         <a class="nav-link" href="#">Register</a>
        </li>
        
        <li class="nav-item">
         <a class="nav-link" href="#">Login</a>
        </li>
      
    </ul>
   
 
      </div>
</nav>
      
      
      
       
  
    </header>
       
         
         
            @yield('showcase')
    
      
  
       
      
          
            @yield('features')
    
      
      @yield('testimonial')
         
  
  </body>
     <script src="{{ asset('js/app.js') }}"></script>
</html>