@extends('layouts.master')

@section('content')
             
   <div class="black">
    <div class="cont"><br>
        <div id="para">Question, comment?<br>
            <font color="gray">Do not hesitate to contact us.</font></div><br>
        <hr id="hrrr">
        <div class="matchbox">
        Write U.S!
        </div><br><br>
        <div class="fl">
        <div class="left">
            <font id="fon">Phone:</font><br>
               <font id="under">514-812-2470</font><br><br>
            <font id="fon">Email:</font><br>
               <font id="under">fullbelly@gmail.com</font>
            <br><br><br><br><br>
            <img id="alpha" src="../image/alphabets.jpg">          
            </div>
            <div class="right">
            @if(session('message'))
            <div style="background-color: #ACDF87;color:#1e35631;padding: 0.5rem 1rem;border-radius:50px">
            {{ session('message') }}
            </div>
            @endif
            @if($errors->any())
                <div style="background-color: #f1959b;color:#be1600;padding: 1rem 1rem;border-radius:50px">
                    <ul type="none">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <form action="contact" method="POST">
        <div class="contact-form">    
        @csrf
       <input type="search" id="mSearch" name="username" style="color:black";
           placeholder="Your name"><br>
       <input type="search" id="mSearch" name="useremail" style="color:black";
           placeholder="Email"><br>
       <input type="search" id="mSearch" name="usernumber" style="color:black";
           placeholder="Phone"><br>
             <textarea  type="text" name="usermessage" class="i"  style="color:gray"; placeholder="Type your message here."></textarea><br>
           
            <img src="../image/robot.png" id="robo">
    
        </div> <br>
        <p align="right" id="cc"><button id="bttn" type="submit">To send</button></p><br><br><br>
        </form> 
           </div>
        </div>
        <br>
<br> <br><br>
       
    </div>
       <div class="blackkk">
       <div class="flexcontainer">
           <div class="itemm"><hr id="hrr"></div>
           <div class="itemm"><font  id="idd">Our promises to you ...</font></div>
            <div class="itemm"><hr id="hrr"></div>
       </div><br>
       <div class="flexcontain">
           <div class="item1"><font  id="id">Good ingredients</font><br>
               <p>We choose our ingredients <br>carefully to ensure the quality of <br>our products.</p></div>
           <div class="item1"><font  id="id">Respect the environment</font><br>
               <p>
                   At your choice, the products can be delivered in reusable containers for a deposit.</p></div>
           <div class="item1"><font  id="id">Local</font><br><p>
               Our products are designed with <br>Care. We strive to select local ingredients.</p></div>
       </div>
       </div>
@stop