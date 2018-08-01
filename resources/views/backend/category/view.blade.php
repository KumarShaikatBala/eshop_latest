@extends ('backend.master')

@section('content')
    {{$sino=1}}
    <section class="content">
    <div class="block-header">
        <h2>View Categories</h2>
        <small class="text-muted"></small>
    </div>

    <div class="row clearfix">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <table class="table">

                 @if(count($categories) > 0)
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{$sino++}}</th>
                        <td>{{$category->name}}</td>
                        <td><a href="{{url('category-delete/'. $category->id)}}" class="danger" role="button">Delete</a> </td>
                    </tr>
                        @endforeach
                        @else
                        <h4>No Category Found</h4><hr>
                            <a href="{{url('category-create')}}" class="btn btn-primary">Create Category</a>
                   @endif

                    </tbody>
                </table>
            </div>
    </div>
    </section>
    <div class="color-bg"></div>

@endsection