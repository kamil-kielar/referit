@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <image-canvas :images="{{$images}}"></image-canvas>
    	    </div>
	    </div>
    </div>
@endsection

            <!-- Dashboard -->
{{--             <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Dashboard</h3></div>
                    <div class="panel-body">
                        <h4> Image <span class="label label-default">{{ $image->id }}</span></h4>
                        <h4>Image <span class="label label-default">{{ $image->id }}</span></h4>
                        <h4>Target X <span class="label label-default">{{ image.target_x }}</span></h4>
                        <h4>Target Y <span class="label label-default">{{ image.target_y }}</span></h4>
                        <h4>Target width <span class="label label-default">{{ image.target_w }}</span></h4>
                        <h4>Target height <span class="label label-default">{{ image.target_h }}</span></h4>
                    </div>
                </div>
            </div> --}}
            
            {{-- <div class="alert alert-success" style="float: right">
                <strong>Well done!</strong> That's correct!
            </div> --}}

            {{-- @if(count($images) > 0)
                @foreach($images as $image)
                        @if($image->id == 1)
                        @endif
                @endforeach
            @endif --}}