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
                            <h3><a href="/data" class="btn btn-primary">Back</a></h3>
                        </div>
                    </div>
                    <div class="panel-body">

                        <form action="{{ url('data') }}/create" method="POST">

                            {{ csrf_field() }}

                            {{ method_field('POST') }}


                            <div class="form-group{{ $errors->has('img_src') ? ' has-error' : '' }}">
                                <label for="img_src" class="col-md-4 control-label">Image Upload</label>

                                <div class="col-md-8">
                                    <input id="img_src" type="file" class="form-control" name="img_src" value="{{ old('img_src') }}" required autofocus>

                                    @if ($errors->has('img_src'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('img_src') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="form-group{{ $errors->has('target_ref_exp') ? ' has-error' : '' }}">
                                <label for="target_ref_exp" class="col-md-4 control-label">Image description</label>

                                <div class="col-md-8">
                                    <textarea id="target_ref_exp" class="form-control" name="target_ref_exp" value="{{ old('target_ref_exp') }}" required></textarea>

                                    @if ($errors->has('target_ref_exp'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('target_ref_exp') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('target_x') ? ' has-error' : '' }}">
                                <label for="target_x" class="col-md-4 control-label">Target X</label>

                                <div class="col-md-8">
                                    <input id="target_x" type="number" class="form-control" name="target_x" value="{{ old('target_x') }}" required autofocus>

                                    @if ($errors->has('target_x'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('target_x') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('target_y') ? ' has-error' : '' }}">
                                <label for="target_y" class="col-md-4 control-label">Target Y</label>

                                <div class="col-md-8">
                                    <input id="target_y" type="number" class="form-control" name="target_y" value="{{ old('target_y') }}" required autofocus>

                                    @if ($errors->has('target_y'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('target_y') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('target_w') ? ' has-error' : '' }}">
                                <label for="target_w" class="col-md-4 control-label">Target W</label>

                                <div class="col-md-8">
                                    <input id="target_w" type="number" class="form-control" name="target_w" value="{{ old('target_w') }}" required autofocus>

                                    @if ($errors->has('target_w'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('target_w') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('target_h') ? ' has-error' : '' }}">
                                <label for="target_h" class="col-md-4 control-label">Target H</label>

                                <div class="col-md-8">
                                    <input id="target_h" type="number" class="form-control" name="target_h" value="{{ old('target_x') }}" required autofocus>

                                    @if ($errors->has('target_h'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('target_h') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>

                            <hr>

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
