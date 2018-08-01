@extends ('backend.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Brands</h2>
                <small class="text-muted">Welcome to Brands Page</small>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Brands</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive-m">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>Brands No</th>
                                        <th>Brand Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $sl = 0;
                                    @endphp
                                    @foreach($brands as $brand)
                                    <tr>
                                        <td>{{ ++$sl }}</td>
                                        <td>{{$brand->brand_name}}</td>
                                        <td>
                                            <a href="{{ url('brands-show/'.$brand->id) }}">Show</a>
                                            <a href="{{ url('brands-edit/'.$brand->id) }}">Edit</a>

                                            {!! Form::open(['url' => 'brands-destroy/'.$brand->id, 'method'=>'delete']) !!}
                                            {{ Form::submit('Delete',['onclick'=>'return confirm("Confirm delete?")']) }}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="color-bg"></div>

@endsection