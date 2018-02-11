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
                    	<h3 class="pull-left">Add Image</h3>

                        <div class="pull-right">
                            <h3><a href="/images" class="btn btn-primary">Back</a></h3>
                        </div>
                    </div>
                    <div class="panel-body">

                        <form action="{{ url('images') }}" method="POST" enctype="multipart/form-data">

                            {{ csrf_field() }}

                                @include('forms.image')

                                <div class="col-md-4 pull-right">
                                    <button type="submit" class="btn btn-success pull-right">Save Image</button>
                                </div>

                        </form>

                    </div>
                </div>
            </div>
    	</div>
	</div>
@endsection
