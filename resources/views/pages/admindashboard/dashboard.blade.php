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
                    <div class="panel-heading">
                    	<h3>Admin Dashboard</h3>
                    </div>
                    <div class="panel-body">
                      <p>SOME LATEST INFORMATIONS OR STATS</p>
                    </div>
                </div>
            </div>
    	</div>
	</div>
@endsection
