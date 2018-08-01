<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sample Invoice</title>
    <link rel="stylesheet" href="{{asset('front-end/assets/css/bootstrap.min.css')}}">
    <style>
        @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
        body, h1, h2, h3, h4, h5, h6{
            font-family: 'Bree Serif', serif;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <h1>
                <a href="https://deshidoctor.com">
                    <img src="{{asset('front-end/assets/images/logo.png')}}">
                </a>
            </h1>
        </div>
        <div class="col-xs-6 text-right">
            <h1>INVOICE</h1>
            <h1><small>Invoice #{{rand(10,500)}}</small></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>From: <a href="#">Deshi Doctor Shop</a></h4>
                </div>
                <div class="panel-body">
                    <p>
                        Address <br>
                        details <br>
                        more <br>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs-5 col-xs-offset-2 text-right">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>To : <a href="#">{{$order->FrontCustomer->fname.' ' .$order->FrontCustomer->lname}}</a></h4>
                </div>
                <div class="panel-body">
                    <p>
                        Address: {{$order->address->address_primary.','.$order->address->city.','.$order->address->cityaddress_optional.','.$order->address->city.','.$order->address->post_code}}<br>
                        Mobile: {{$order->address->mobile}} <br>
                        Order Created_at: {{$order->created_at}} <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- / end client details section -->
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>
                <h4>Title</h4>
            </th>
            <th>
                <h4>Qty</h4>
            </th>
            <th>
                <h4>Rate/Price</h4>
            </th>
            <th>
                <h4>Sub Total</h4>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($order->orderItems as $item)
            <tr>
                <td>{{$item->title}}</td>
                <td>{{$item->pivot->quantity}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->pivot->total}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row text-right">
        <div class="col-xs-2 col-xs-offset-8">
            <p>
                <strong>
                    Sub Total : <br>
                    TAX : <br>
                    Total :<br>
                </strong>
            </p>
        </div>
        <div class="col-xs-2">
            <strong>
                {{$order->total}} <br>
                N/A <br>
                {{$order->total}} <br>
            </strong>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-5">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h4>Bank details</h4>
                </div>
                <div class="panel-body">
                    <p>Your Name</p>
                    <p>Bank Name</p>
                    <p>SWIFT : --------</p>
                    <p>Account Number : --------</p>
                    <p>IBAN : --------</p>
                </div>
            </div>
        </div>
        <div class="col-xs-7">
            <div class="span7">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>Contact Details</h4>
                    </div>
                    <div class="panel-body">
                        <p>
                            Email : you@example.com <br><br>
                            Mobile : -------- <br> <br>
                            Facebook : <a href="https://facebook.com/deshidoctor.co/">/deshidoctor.co/</a>
                        </p>
                        <h4>Payment should be made by Bank Transfer</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>