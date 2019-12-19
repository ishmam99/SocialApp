{{-- @extends('layouts.app')
<style>
        
  
        body {
           margin: 0;
           padding-top: 0;
           background: url(https://wallpaperplay.com/walls/full/7/7/0/215252.jpg);
           background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: 50% 50%; 
          background-size: cover;
           font-family: sans-serif;
         }
    
         </style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="inputBox">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <label>Name</label>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                              </div>

                    
                        <div class="inputBox">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label>Email Address</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>

                         <div class="inputBox">
                           
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
                                <label>Username</label>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                            <div class="inputBox">
                                    <input id="password" type="password" name="password"  required value="" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password">     
                                    <label>Password</label>
                                    @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                  </div>
                                  <div class="inputBox">
                                        <input id="password-confirm" type="password" name="password_confirmation"  required autocomplete="new-password" value="" class="form-control" >     
                                        <label>Confirm Password</label>
                                        
                                      </div>
                    

                           
                    

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


 --}}



 <!DOCTYPE html>
 <html lang="en">
     
        <title>Friend Finder | A Complete Social Network Template</title>
   @include('includes.head')
   <body>
 
     <!-- Header
     ================================================= -->
    
         <header id="header">
             <nav class="navbar navbar-default navbar-fixed-top menu">
               <div class="container">
       
                 <!-- Brand and toggle get grouped for better mobile display -->
                 <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                   </button>
                   <a class="navbar-brand" href="/"><img src="images/logo.png" alt="logo" /></a>
                 </div>
                 </div><!-- /.navbar-collapse -->
               </div><!-- /.container -->
             </nav>
           </header>
     <!--Header End-->
 
     <div id="page-contents">
         <div class="container">
             <div class="row">
 
           <!-- Newsfeed Common Side Bar Left
           ================================================= -->
                 
                 <div class="col-md-7">
 
            
 
 
 
 
 
 
 <div id="lp-register">
     <div class="container wrapper">
     <div class="row">
         <div class="col-sm-5">
         <div class="intro-texts">
             <h1 class="text-white">Make Cool Friends !!!</h1>
             <p>Friend Finder is a social network template that can be used to connect people. The template offers Landing pages, News Feed, Image/Video Feed, Chat Box, Timeline and lot more. <br /> <br />Why are you waiting for? Buy it now.</p>
           <button class="btn btn-primary">Learn More</button>
         </div>
       </div>
         <div class="col-sm-6 col-sm-offset-1">
         <div class="reg-form-container"> 
         
           <!-- Register/Login Tabs-->
           <div class="reg-options">
             <ul class="nav nav-tabs">
                 
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                 </li>
               
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                     </li>
               
            
             </ul><!--Tabs End-->
           </div>
          
          
            <!--Registration Form Contents-->
 <div class="tab-content">
    <div class="tab-pane active" id="register">
      <h3>Register Now !!!</h3>
      <p class="text-muted">Be cool and join today. Meet millions</p>
      
      <!--Register Form-->
      <form method="POST" action="{{ route('register') }}" name="registration_form" id='registration_form' class="form-inline">
        @csrf
        <div class="row">
          <div class="form-group col-xs-12">
            <label for="name">Name</label>
            <input id="name" type="text" title="Enter Name" placeholder="Your Name"  class="form-control input-group-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
           
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>

          
        </div>
        <div class="row">
          <div class="form-group col-xs-12">
          <label for="email">Email Address</label>
          <input id="email" type="email" title="Enter Email" placeholder="Your Email" class="form-control input-group-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <label for="email" class="sr-only">Email Address</label>
             @error('email')
          <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
              </span>
            @enderror
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-12">
            <label for="username">Username</label>
        <input id="username" type="username" class="form-control input-group-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" title="USERNAME" placeholder="USERNAME"required autocomplete="username">
        

        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            </div>
        </div>
        <div class="row">
          <div class="form-group col-xs-12">
            <label for="password">Password</label>
            
          
            <input id="password" type="password" name="password" title="Enter password" placeholder="Password" required value="" class="form-control input-group-lg @error('password') is-invalid @enderror" autocomplete="new-password">     
           
            @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          </div>
        </div>
          <div class="row">
          <div class="inputBox">
               <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="password"  title="Confirm password" placeholder="Confirm Password" name="password_confirmation"  required autocomplete="new-password" value="" class="form-control input-group-lg" >     
               
                
              </div>

        </div>
        
        </div> 
        <button class="btn btn-primary">Register Now</button>
      </form><!--Register Now Form Ends-->
     
     
    <!--Registration Form Contents Ends-->
    
              
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-sm-6 col-sm-offset-6">
       
         <!--Social Icons-->
         <ul class="list-inline social-icons">
           <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
           <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
           <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
           <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
           <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>
 
 <!--preloader-->
 <div id="spinner-wrapper">
   <div class="spinner"></div>
 </div>
 
 
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&amp;callback=initMap"></script>
     <script src="{{ asset('js/jquery-3.1.1.min.js')}}"></script>
     <script src="{{ asset('js/bootstrap.min.js')}}"></script>
     <script src="{{ asset('js/jquery.appear.min.js')}}"></script>
     <script src="{{ asset('js/jquery.incremental-counter.js')}}"></script>
     <script src="{{ asset('js/script.js')}}"></script>
 </body>
 
 
 