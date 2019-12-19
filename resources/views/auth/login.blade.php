{{-- 
@extends('layouts.app')
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

{{-- <div class="box">
  <h2>Login</h2>
  <form>
    <div class="inputBox">
      <input type="email" name="email" required onkeyup="this.setAttribute('value', this.value);" value="">
      <label>Username</label>
    </div>
    <div class="inputBox">
      <input type="password" name="password" required value=""
             onkeyup="this.setAttribute('value', this.value);"
             pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
             title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
      <label>Password</label>
    </div>
    <input type="submit" name="sign-in" value="Sign In">
  </form>
</div>




 --}}

{{-- 

<div class="container">
    <div class="row justify-content-center"> 
        <div class="col-md-5">
            <div class="card">
                <div class="card-header"><h2>{{ __('Login') }}</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
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
                                  <input id="password" type="password" name="password"  required value="" class="form-control @error('password') is-invalid @enderror" autocomplete="current-password">     
                                  <label>Password</label>
                                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                       

                        <div class="form-group row">
                            <div class="col-md-5 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color:#41e926">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
	
	<title>News Feed | Check what your friends are doing</title>
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
         
         
            <!--Login-->
            <div class="tab-pane" id="login">
              <h3>Login</h3>
              <p class="text-muted">Log into your account</p>
              
              <!--Login Form-->
              <form method="POST" action="{{ route('login') }}" name="Login_form" id='Login_form'>
                @csrf
             
                 <div class="row">
                  <div class="form-group col-xs-12">
                    <input id="my-email" type="email" class="form-control input-group-lg  @error('email') is-invalid @enderror" placeholder="Your Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label for="my-email" class="sr-only">Email Address</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <input id="my-password" type="password" name="password"  required value="" placeholder="Password"class="form-control input-group-lg @error('password') is-invalid @enderror" autocomplete="current-password">     
                    <label for="my-password" class="sr-only">Password</label>
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  </div>
                </div> 
                <button class="btn btn-primary">Login Now</button>
              </form><!--Login Form Ends--> 
            
             
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

