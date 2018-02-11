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
                    	<h3 class="pull-left">Edit Image</h3>

                        <div class="pull-right">
                            <h3><a href="/images" class="btn btn-primary">Back</a></h3>
                        </div>
                    </div>
                    <div class="panel-body">

                        <form action="{{ url('images') }}/{{$image->id}}" method="POST" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            {{ method_field('PATCH') }}

                                @include('forms.image')

                                <div class="col-md-4 pull-right">
                                    <button type="submit" class="btn btn-success pull-right">Update Image</button>
                                </div>

                        </form>

                    </div>
                </div>
            </div>
    	</div>
	</div>
@endsection
