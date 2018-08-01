@extends ('backend.master')
@section('content')
 <section class="content">

<div class="container-fluid">
<div class="block-header">
    <h2>Orders</h2>
    <small class="text-muted"><?php
        $message = Session::get('message');
        if($message){
            echo " $message ";
            Session::put('message', null);
        }
        ?></small>
</div>
<div class="row clearfix">
    <div class="col-md-12 col-xs-12">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <ul>
                        @foreach($orders as $order)
                        <li>

                            <div class="col-md-7">
                                <h4>Ordered by user name: {{$order->FrontCustomer->fname}}
                                    @if($order->delivered === 0)
                                    <span class="label label-primary">Deliver Pending</span>
                                    @elseif($order->delivered === 1)
                                        <span class="label label-success">Delivered Success</span>
                                    @else
                                        <span class="label label-danger">Order Cancelled</span>
                                    @endif

                                    <br> Total: {{$order->total}}</h4>
                                <h5>Shipping Address</h5>
                            </div>
                            <div class="col-md-2">
                                @if($order->delivered === 0)
                                    {!! Form::open(['url' => 'submit-delivered/'.$order->id, 'method' => 'post']) !!}

                                    <input type="hidden" value="3" name="delivered">

                                    <input type="submit" value="Cancel Order" class="btn btn-xs  btn-raised btn-danger">
                                    {!! Form::close() !!}
                                @endif
                            </div>
                            <div class="col-md-3">

                                @if($order->delivered === 0)
                                {!! Form::open(['url' => 'submit-delivered/'.$order->id, 'method' => 'post']) !!}

                                <input type="hidden" value="1" name="delivered">

                                <input type="submit" value="Submit to Delivered" class="btn btn-xs  btn-raised bg-green waves-effect">
                                {!! Form::close() !!}

                                @elseif($order->delivered === 1)
                                        {!! Form::open(['url' => 'submit-delivered/'.$order->id, 'method' => 'post']) !!}
                                        <input type="hidden" value="0" name="delivered" class="btn btn-default">
                                        <input type="submit" value="Submit to Un-delivered" class="btn btn-xs  btn-raised bg-brown waves-effect">
                                        {!! Form::close() !!}

                                    @endif
                                @if($order->delivered === 3)
                                        {!! Form::open(['url' => 'submit-delivered/'.$order->id, 'method' => 'post']) !!}
                                        <input type="hidden" value="1" name="delivered">
                                        <input type="submit" value="ReSubmit" class=" btn btn-xs  btn-raised btn-primary waves-effect">
                                        {!! Form::close() !!}
                                    @endif
                                <a href="{{url('/order-single-view/'.$order->id)}}" class=" btn btn-xs  btn-raised btn-primary waves-effect" target="_blank">View</a>
                            </div>
                                <table class="table table-responsive">
                                    <tr>
                                        <th>Mobile</th>
                                        <th>Location</th>
                                        <th>Order Created time</th>
                                        <th>Order person name</th>
                                    </tr>
                                    <tr>
                                        <td>{{$order->address->mobile}}</td>
                                        <td>{{$order->address->address_primary.','.$order->address->city.','.$order->address->cityaddress_optional.','.$order->address->city.','.$order->address->post_code}}</td>
                                        <td> {{$order->created_at}}</td>
                                        <td> {{$order->address->first_name.' '.$order->address->last_name}}</td>
                                    </tr>
                                </table>
                            <h5>Order Item</h5>
                            <table class="table table-hover table-bordered " >
                                <tr>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>supplier</th>
                                </tr>
                                @foreach($order->orderItems as $item)
                                <tr>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->pivot->quantity}}</td>
                                    <td>{{$item->pivot->total}}</td>
                                    <td>{{$item->supplier->name}}</td>

                                </tr>
                                    @endforeach
                            </table>
                        </li>
                            @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
 </section>
 <div class="color-bg"></div>
@endsection