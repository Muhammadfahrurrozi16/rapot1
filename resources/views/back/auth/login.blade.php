<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
<head> 
 <meta charset="utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 <title>Login Aplikasi Laravel</title> 
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}"> 
 <link rel="stylesheet" href="{{ asset('back_asset/dist/css/googlefonts.css') }}"> 
 <link rel="stylesheet" href="{{ asset('back_asset/plugins/fontawesome-free/css/all.min.css') }}"> 
 <link rel="stylesheet" href="{{ asset('back_asset/dist/css/adminlte.min.css') }}"> 
</head> 
<body class="hold-transition login-page"> 
 <div class="login-box"> 
 <div class="card card-outline card-primary"> 
 <div class="card-header text-center"> 
 <a href="" class="h1"><b>Admin</b>LTE</a> 
 </div> 
 <div class="card-body"> 
 <p class="login-box-msg">Sign in to start your session</p> 
 <form action="/login" method="post"> 
 @csrf 
 <div class="input-group mb-3"> 
 <input type="email" name=="email" class="form-control" placeholder="Email"
autofocus required> 
 <div class="input-group-append"> 
 <div class="input-group-text"> 
 <span class="fas fa-envelope"></span> 
 </div> 
 </div> 
 </div> 
 <div class="input-group mb-3"> 
 <input type="password" name="password" class="form-control"
placeholder="Password" required> 
 <div class="input-group-append"> 
 <div class="input-group-text"> 
 <span class="fas fa-lock"></span> 
 </div> 
 </div> 
 </div> 
 <div class="row"> 
 <div class="col-4"> 
 <button type="submit" class="btn btn-primary btn-block">Sign In</button> 
 </div> 
 </div> 
 </form> 
 <p class="mb-1"> 
 <a href="forgot-password.html">Lupa Password ?</a> 
 </p> 
 <p class="mb-0"> 
 <a href="register.html" class="text-center">Register Pengguna Baru</a> 
 </p> 
 </div> 
 </div> 
 </div> 
 <script src="{{ asset('back_asset/plugins/jquery/jquery.min.js') }}"></script> 
 <script src="{{ asset('back_asset/plugins/bootstrap/js/bootstrap.bundle.min.js') 
}}"></script> 
 <script src="{{ asset('back_asset/dist/js/adminlte.js') }}"></script> 
</body> 
</html>
