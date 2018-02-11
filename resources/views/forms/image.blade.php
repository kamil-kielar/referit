<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Name</label>

    <div class="col-md-8">
        <input id="name" type="text" class="form-control" name="name" value="{{ $image->name }}" required autofocus>

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('img_src') ? ' has-error' : '' }}">
    <label for="img_src" class="col-md-4 control-label">Image Upload</label>

    <div class="col-md-8">
        <input id="img_src" type="file" class="form-control" name="img_src" value="{{ old('img_src') }}">

        @if ($errors->has('img_src'))
            <span class="help-block">
                <strong>{{ $errors->first('img_src') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('img_src_target') ? ' has-error' : '' }}">
    <label for="img_src_target" class="col-md-4 control-label">Target Image Upload</label>

    <div class="col-md-8">
        <input id="img_src_target" type="file" class="form-control" name="img_src_target"
               value="{{ old('img_src_target') }}" required>

        @if ($errors->has('img_src_target'))
            <span class="help-block">
                <strong>{{ $errors->first('img_src_target') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="clearfix"></div>

<div class="form-group{{ $errors->has('target_ref_exp') ? ' has-error' : '' }}">
    <label for="target_ref_exp" class="col-md-4 control-label">Image description</label>

    <div class="col-md-8">
        <textarea id="target_ref_exp" class="form-control" name="target_ref_exp"
                  value="{{ $image->target_ref_exp }}">{{ $image->target_ref_exp }}</textarea>

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
        <input id="target_x" type="number" class="form-control" name="target_x" value="{{ $image->target_x  }}" required
               autofocus>

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
        <input id="target_y" type="number" class="form-control" name="target_y" value="{{ $image->target_y }}" required
               autofocus>

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
        <input id="target_w" type="number" class="form-control" name="target_w" value="{{ $image->target_w }}" required
               autofocus>

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
        <input id="target_h" type="number" class="form-control" name="target_h" value="{{ $image->target_h }}" required
               autofocus>

        @if ($errors->has('target_h'))
            <span class="help-block">
                <strong>{{ $errors->first('target_h') }}</strong>
            </span>
        @endif
    </div>

</div>

<hr>