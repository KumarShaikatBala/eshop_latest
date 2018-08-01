@extends('frontend.layouts.master')
@section('title', 'Deshidoctor | Home')
@section ('js')
<script>
    $(document).ready(function () {
        <?php for($i=0;$i<count($cartitems);$i++) { ?>
        $('#upCart<?php echo $i ;?>').on('change keyup',function () {
           var newQty =  $('#upCart<?php echo $i ;?>').val();
           var rowId =  $('#rowId<?php echo $i ;?>').val();
           var proId =  $('#proId<?php echo $i ;?>').val();
             // alert(newQty);
            if(newQty <=0){
                alert('Please Not enter Negative or Null value');
            }else {
                $.ajax({
                    type:'get',
                    url:'<?php echo url('/cart-update');?>/'+ proId<?php echo $i ;?>,
                    data: "qty=" + newQty + " & rowId=" + rowId + " & proId=" + proId,
                    success:function (response) {

                       console.log(response);
                        location = location
                       // $('#updive').html(response);
                    }

                });
            }

        });
        // delete cart
        <?php } ?>

    });
</script>


@endsection
@section('content')
    <!--Bread Crumb-->
    <section id="breadcrumb" class="space light-overlay" data-stellar-background-ratio="0.4">
        <div  class="container">
            <div class="row">
                <div class="col-sm-6 bread-block">
                    <h2>Cart</h2>
                    <p>We are alaway commited to our customer</p>
                </div>
                <div class="col-sm-6 bread-block text-right">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="active">Cart</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--Cart-->
    <section id="cart" class="space">
        <div class="container">
            <div class="row">
                <div class="cart-product col-sm-12 col-xm-12 col-md-12 no-padding">
                    @if(count($cartitems)>0)
                        <table class="table">
                            <thead>
                            <tr>
                                <th>item</th>
                                <th>Description</th>
                                <th>QUANTITY</th>
                                <th>UNIT PRICE</th>
                                <th>SUBTOTAL</th>
                                <th>ACTION</th>
                            </tr>

                            </thead>
                            <tbody>
                                <?php $i = 0 ;?>
                                @foreach($cartitems as $cart)


                                    <input type="hidden" value="{{$cart->rowId}}" id="rowId<?php echo $i ;?>">
                                    <input type="hidden" value="{{$cart->id}}" id="proId<?php echo $i ;?>">
                                <tr>
                                    <td class="product-image"><img src="/storage/uploads/product_img/{{$cart->options->image}}" height="100px" width="100" alt="Cart Product"></td>
                                    <td class="product-name">
                                        <h5><a href="#">{{$cart->name}}</a> </h5>
                                    </td>
                                    <td class="product-quantity">
                                        <div class="quantity">
                                            <input class="demo_vertical" type="text" value="{{$cart->qty}}" id="upCart<?php echo $i ;?>" name="demo_vertical">
                                        </div>
                                    </td>
                                    <td class="product-price">${{$cart->price}}</td>
                                    <td class="product-total">${{$cart->price* $cart->qty}}</td>
                                    <td class="option">
                                        <a href="{{url('/cart-delete/'.$cart->rowId)}} "><i class="fa fa-times" id="del<?php echo $i ;?>" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                    <?php  $i++ ;?>

                              @endforeach
                                </tbody>
                            </table>
                          </div>
                        <div class="col-sm-12 no-padding calculation-area" style="margin-top: 50px">
                    <div class="promotion col-sm-4">

                    </div>
                    <div class="total col-sm-4">
                        <div class="inner-area">
                            <div class="checkout-heading text-center">
                                <h5>Cart Totals</h5>
                            </div>
                            <div class="total-block col-sm-12">
                                <ul>
                                    <li><span class="title">Cart Subtotal</span><span class="price">{{Cart::subtotal()}} taka</span></li>
                                    <li><span class="title">Shipping and Handling</span><span class="price">Free Shipping</span></li>
                                    <li><span class="title">Order Total</span><span class="price">{{Cart::subtotal()}} taka</span></li>
                                </ul>
                            </div>
                            <div class="col-sm-12">
                                <a href="{{url('checkout')}}" class="btn black lg">proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                            @else
                                <div class="col-md-offset-4 col-md-4" >
                                    <span class="center"><h3>Your Cart is empty</h3></span>
                                    <br>
                                    <a  href="{{url('product')}}" class="btn center">Shop Now</a>
                                </div>

                            @endif
                </div>
            </div>
        </div>
    </section>

@endsection

