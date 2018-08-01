@extends ('frontend.suppliers.master')
@section('content')
    <section class="content profile-page">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Welcome {{$supplier->name}}</h2>
                <a class="btn  btn-raised btn-danger waves-effect" href="{{route('supplierlogout')}}" >Log Out</a>
                <small class="text-muted">Welcome to Deshi Doctor application</small>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="alert-info"> @if(Session::has('success'))
                                {{session::get('success')}}@endif

                        </div>
                        <a href="{{route('getUpdateForm')}}"  class="btn btn-sm btn-raised btn-primary waves-effect">Edit Info</a>
                    <div class="card">
                        <div class="header">
                            <h2>About suppliers</h2>
                        </div>
                        <div class="body">
                            <strong>Name</strong>
                            <p>{{$supplier->name}}</p>
                            <strong>Company</strong>
                            <p>{{$supplier->brand}}</p>
                            <strong>Email ID</strong>
                            <p>{{$supplier->email}}</p>
                            <strong>Phone</strong>
                            <p>{{$supplier->mobile}}</p>
                            <hr>
                            <strong>Address</strong>
                            <address>{{$supplier->address}}</address>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#report" data-toggle="tab" aria-expanded="true">Summary</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="report">
                                    <div class="wrap-reset">
                                        <div class="mypost-list">
                                            <div class="row clearfix">
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="info-box-4 hover-zoom-effect">
                                                        <div class="icon"> <i class="zmdi zmdi-account col-blue"></i> </div>
                                                        <div class="content">
                                                            <div class="text">Total Product</div>
                                                            <div class="number">{{$countProduct}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="info-box-4 hover-zoom-effect">
                                                        <div class="icon"> <i class="zmdi zmdi-account col-green"></i> </div>
                                                        <div class="content">
                                                            <div class="text">Pending Order</div>
                                                            <div class="number">{{$countPendingOrder}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="info-box-4 hover-zoom-effect">
                                                        <div class="icon"> <i class="zmdi zmdi-bug col-blush"></i> </div>
                                                        <div class="content">
                                                            <div class="text">Total Sell</div>
                                                            <div class="number">{{$countDeliveredOrder}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="post-box">
                                                <h4>Recent Products</h4>
                                                <div class="body p-l-0 p-r-0">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Product Name</th>
                                                                <th>Quantity</th>
                                                                <th>Price</th>
                                                                <th>status</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @if(count($products) > 0)
                                                                <?php $si = 1; ?>
                                                                @foreach($products as $product)
                                                            <tr>
                                                                <td>{{$si}}</td>
                                                                <td>{{$product->title}}</td>
                                                                <td>{{$product->quantity}}</td>
                                                                <td>{{$product->price}}</td>
                                                                <td><span class="label label-danger">Fever</span> </td>
                                                            </tr>
                                                            <?php $si++; ?>
                                                                @endforeach
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="color-bg"></div>
@endsection