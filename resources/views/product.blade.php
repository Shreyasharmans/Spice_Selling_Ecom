


@extends('layouts.master')

@section('content')
<div class="bodd"><br><br>
            
    <div class="flexxx">
              
               <div class="im"><br><img src="{{ asset('image\cardamom.jpg')}}" height="150px" width="100%"><br><br>
               <center> 
               <b>Spice 1</b>
               <br>Product Name:
               <font color="indianred"><b>Cardamom</b></font><br>
               Price:
               <font color="indianred"><b>$20</b></font><br><br><b><font size="5px">
               <button class="btn btn-success bbb" name="item" value="11.09" onclick="price()" id="ip">Buy</button></center>
               </font></b><br>
               </div>
               <div class="im"><br><img src="{{ asset('image\carom.jpg')}}" height="150px" width="100%"><br><br>
               <center> 
               <b>Spice 2</b>
               <br>Product Name:
               <font color="indianred"><b>Carom</b></font><br>
               Price:
               <font color="indianred"><b>$20</b></font><br><br><b><font size="5px">
               <button class="btn btn-success bbb" name="item" value="11.09" onclick="price()" id="ip">Buy</button></center>
               </font></b><br>
               </div>
               <div class="im"><br><img src="{{ asset('image\black-cumin.webp')}}" height="150px" width="100%"><br><br>
               <center> 
               <b>Spice 3</b>
               <br>Product Name:
               <font color="indianred"><b>Black-cumin</b></font><br>
               <br>Price:
               <font color="indianred"><b>₹16.00</b></font><br><br><b><font size="5px">
               <button class="btn btn-success bbb" name="item" value="11.09" onclick="price()" id="ip">Buy</button></center>
               </font></b><br>
               </div>
               

                @foreach($products as $item)
                <div class="im">
                <center>      
                <br><br><img src="{{asset('uploads/product_images/'.$item->image)}}"
                 height="150px" width="100%"><br><br><b>{{$item->disc}}</b><br>Product Name:<font color="indianred">
                      <b>{{$item->pname}}</b></font><br>Price:<font color="indianred"><b>₹{{$item->price}}</b></font><br>
                      <br><b><font size="5px"><button name="item" value="{{$item->price}}" class="btn btn-success bbb" onclick="price()" id="ip" />
                       Buy</button></font></b><br>
                    </center>
                    </div>
                @endforeach



 
<br><br>

 </div><br><br><center>
            <b id="cur12">
                <font color="black">Order Value:</font>&nbsp; &nbsp; <input value="₹0.00" readonly="readonly" type="text" name="total" class="inpp2" />
           </b>
                <a href="#"><img src="{{ asset('image\order.jpg')}}" id="imm" align="right"></a>
           </center>
           <br><br><br><br><br>
    </div>
    <script src="js/product.js">
    
    </script>
    @stop
