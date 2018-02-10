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
                    	<h3>Users</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach( $users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    @if($user->user_level == 1)
                                    <td>Administrator</td>
                                        @else
                                        <td>Player</td>
                                    @endif
                                    <td> - </td>
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
