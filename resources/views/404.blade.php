@extends('layouts.master')
@section('title', 'Deshidoctor | Error')
@section('content')
    <section id="error-page" class="screen-height center">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-offset-3 error-block text-center">
                    <h1><i class="fa fa-exclamation-circle" aria-hidden="true" style="color: red"></i></h1>
                    <h2>Sorry, No data found !!</h2>
                    <p>It looks like nothing was found.
                        <br>Click the link below to return home.</p>
                    <a href="{{route('index')}}" class="btn">Back To Home</a>
                </div>
            </div>
        </div>
    </section>
@endsection