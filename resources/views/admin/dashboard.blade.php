<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{ asset('admin_public/production/images/favicon.ico')}}" type="image/ico" />
  <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/hdfoot.css')}}">
<link rel="stylesheet" href="{{asset('css/home.css')}}">
<link rel="stylesheet" href="{{asset('css/contact.css')}}">
<link rel="stylesheet" href="{{asset('css/about.css')}}">
<link rel="stylesheet" href="{{asset('css/product.css')}}">
<link rel="stylesheet" href="{{asset('css/store.css')}}">
<link rel="stylesheet" href="{{asset('css/spice.css')}}">

    <title>Admin | </title>
<style>
  a{
    color:white;
    weight:bold;
  }
  </style>
    
  </head>

  <body>
  <center> <h2> Welcome to Admin Panel</h2></center>
  
<center>
  
  <button type="button" class="btn btn-primary"><a href="{{url('/admin/add_product')}}">Add Product</a></button>
  <button type="button" class="btn btn-primary"><a href="{{url('/admin/adminproduct')}}">View Products</a></button>
  <button type="button" class="btn btn-primary"><a href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></button>
</center>

  
        @yield('content')

        
  </body>
</html>
