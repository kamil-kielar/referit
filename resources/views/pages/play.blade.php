@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <image-canvas :images="{{$images}}" :user="{{ Auth::user() }}"></image-canvas>
    	    </div>
	    </div>
    </div>
@endsection