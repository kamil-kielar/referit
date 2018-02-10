@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="jumbotron text-center">
			<h1>Games</h1>
			<p>Here you can choose how you want to play. You decide.</p>
	    </div><br><hr>
		<div class="row">
			<div class="col-md-6 col-md-offset-1">
				<h4>Play together with computer in single-player mode</h4>
			</div>
			<div class="col-md-4">
				<a href="/play"><button type="button" class="btn btn-md btn-primary">Single-player mode</button></a>
			</div>
		</div><hr>
	</div>
@endsection
