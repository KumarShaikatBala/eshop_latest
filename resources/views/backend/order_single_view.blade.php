@extends ('backend.master')
@section('content')
    <section class="content">

        <div class="container-fluid">
            <div class="block-header">
                <h2>Orders</h2>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                <ul>
                                    <li>
                                        <div class="col-md-7">
                                            <h4>Ordered by user name: {{$order->FrontCustomer->fname}}
                                                <br> Total: {{$order->total}}</h4>
                                            <h5>Shipping Address</h5>
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