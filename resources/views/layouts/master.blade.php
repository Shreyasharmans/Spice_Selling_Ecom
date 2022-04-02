<html>
<head>
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
</head>
<body>

@extends('layouts.navbar');
 <!-- content start -->
@yield('content')


<!-- footer start -->
<footer>
        
        <div class="contain">
            <div class="foot" id="fo">© 2022-2023, Full Belly. All rights reserved.</div>
            <div class="foot" id="fo1"><a href ="https://www.facebook.com"><img src="../image/fb.png"></a></div>
            <div class="foot" id="fo2"><font id="fontt" color="black">Follow us - Newsletter</font>
          <form action="mailto:shreyasharmans@gmail.com" method="POST">
        </form>       
            </div></div>
    </footer>
</body>
</html>
    


