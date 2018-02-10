@extends('layouts.app')

@section('content')

<div class="container">
    <div class="jumbotron text-center">
        <h1>Welcome to Refer It Game</h1>
        <p>Natural Language Generation</p>
        <a href="/game"><button type="button" class="btn btn-lg btn-primary">Start Games</button></a>
        <a href="{{ route('register') }}"><button type="button" class="btn btn-lg btn-success">Register</button></a>
    </div>
</div>

@endsection
