@extends ('backend.master')
{{--
@section('header')
   <div class="block-header">

    </div>

@endsection
--}}

@section('content')
    <section class="content">

    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Category</h2>
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
                            <form id="category" action="{{url('category-store')}}" class="col-xs-12" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" placeholder="Add Category" required="">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" role="button"  class="btn btn-raised g-bg-cyan waves-effect">
                                        INSERT
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection