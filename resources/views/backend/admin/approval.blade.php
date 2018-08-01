@extends ('backend.master')
@section('content')
    <section class="content profile-page">
        <div class="container-fluid">
            <table class="table table-striped">
            {!! Form::open(['url' =>'supplier-approval/'.$data->id,'class'=>'col-xs-12','method' => 'get' ,'enctype'=>'multipart/form-data']) !!}
                <div class="form-group">
                    <input type="text" name="approval" value="{{$data->approval}}" class="filled-in chk-col-pink" required>

                </div>


                <div class="col-xs-12">
                    <button type="submit" class="btn btn-raised g-bg-cyan">Submit</button>
                    <button type="submit" class="btn btn-raised">Cancel</button>
                </div>

                {!! Form::close() !!}
            </table>
        </div>
    </section>

<div class="color-bg"></div>

    @endsection