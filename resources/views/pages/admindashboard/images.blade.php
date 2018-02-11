@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            <!-- Dashboard -->
            <div class="col-md-4">
                @include('inc.admin-side-nav')
            </div>

            <div class="col-md-8">
                <div class="panel panel-default">
                	<!-- Image location -->
                    <div class="panel-heading clearfix">
                    	<h3 class="pull-left">Images</h3>

                        <div class="pull-right">
                            <h3><a href="/images/create" class="btn btn-primary">New Image</a></h3>
                        </div>
                    </div>
                    <div class="panel-body">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Remove</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach( $images as $key => $image)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td><img src="{{ $image->img_src }}" alt="" style="width: 250px;    "></td>
                                    <td>{{ $image->target_ref_exp }}</td>
                                    <td>
                                    <a href="{{ url('images') }}/{{ $image->id }}/edit" class="btn btn-warning pull-left">Edit</a>
                                    </td>
                                    <td>

                                        <form action="{{ url('images') }}/{{ $image->id }}" method="POST">

                                            {{ csrf_field() }}

                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-danger pull-right">Delete</button>

                                        </form>
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
@endsection
