<!-- header start -->
   <div>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
<a href="#" class="navbar-brand"><img src="../image/logo3.png" class="logo"></a>
<button type="button" class="navbar-toggler bg-dark" data-toggle="collapse" data-target="#nav">
<span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse justify-content-between" id="nav">
<ul class="navbar-nav ml-auto">

<li class="nav-item">
<a href="{{url('/')}}" class="nav-link" style="color:white;">Home</a>
</li>


<li class="nav-item">
<a href="{{url('/about')}}"  class="nav-link" style="color:white;">About Us</a>
</li>

<li class="nav-item">
<a href="{{url('/product')}}"  class="nav-link" style="color:white;">Product</a>
</li>
<li class="nav-item">
<a href="{{url('/contact')}}" class="nav-link" style="color:white;">Contact</a>
</li>
<li class="nav-item">
<a href="{{url('/store')}}" class="nav-link" style="color:white;">Find in Store</a>
</li>
<li class="nav-item">
<a href="{{url('/spice')}}" class="nav-link" style="color:white;">Customer'S Review</a>
</li>

<li class="nav-item">
@if (Route::has('login'))            
 @auth
<a href="{{ url('/dashboard') }}" class="nav-link" style="color:#FF2626;">{{ Auth::user()->name }}</a>
</li>

<li class="nav-item">
<a href="{{ route('logout') }}" class="nav-link" style="color:white;">Logout</a>
</li>

@else
<li class="nav-item">
<a href="{{ route('login') }}"  class="nav-link" style="color:white;">Log in</a>
</li>

<li class="nav-item">
@if (Route::has('register'))
<a href="{{ route('register') }}"  class="nav-link" style="color:white;">Register</a>
@endif
</li>
@endauth
@endif
</li>
<li class="nav-item">
                    @auth('admin')
                    <a href="{{ route('admin.dashboard')}}" class="nav-link" style="color:white;"> ADMIN DASHBOARD</a>
                    @else
                    <a href="{{ route('admin.login')}}" class="nav-link" style="color:white;"> ADMIN LOGIN</a>
                    @endauth
</li>
</ul>
</div>
</nav>
 </div>
