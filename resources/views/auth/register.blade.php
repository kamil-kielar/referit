@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        {{-- Name --}}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                       

                        {{-- Email --}}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Passwords  --}}
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        {{-- Gender --}}
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Gender</label>

                            <div class="col-md-2 col-md-offset-1">
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="radio-male" value="Male" name="gender">
                                        Male
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="radio-female" value="Female" name="gender">
                                        Female
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('gender'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('gender') }}</strong>
                                </span>
                            @endif
                        </div>

                        {{-- Age --}}
                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="age" class="col-md-4 control-label">Age</label>

                            <div class="col-md-6">
                                <select class="form-control" name="age" id="age" required>
                                    <option>- Select Your Age -</option>
                                    <option>Under 18 years</option>
                                    <option>18 to 24 years</option>
                                    <option>25 to 34 years</option>
                                    <option>35 to 44 years</option>
                                    <option>45 to 54 years</option>
                                    <option>55 to 64 years</option>
                                    <option>65 years or older</option>
                                </select>

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Education --}}
                        <div class="form-group{{ $errors->has('education') ? ' has-error' : '' }}">
                            <label for="education" class="col-md-4 control-label">Education</label>

                            <div class="col-md-6">
                                <select class="form-control" name="education" id="education" required>
                                    <option>- Select Your Education Level -</option>
                                    <option>High School</option>
                                    <option>College</option>
                                    <option>University Undergraduate</option>
                                    <option>University MSc/MA/MBA</option>
                                    <option>University PhD</option>
                                    <option>Other Professional Training</option>
                                </select>

                                @if ($errors->has('education'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('education') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        {{-- Language --}}
                        <div class="form-group{{ $errors->has('language') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Language</label>

                            <div class="col-md-2 col-md-offset-1">
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="radio-yesEng" value="Native English" name="language">
                                        Native English
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="radio-noEng" value="Non-English" name="language">
                                        Non-English
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('language'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('language') }}</strong>
                                </span>
                            @endif
                        </div><br>

                        {{-- Submit and reset button --}}
                        <div class="form-group">
{{--                             <div class="col-md-2 col-md-offset-4">
                                <button type="reset" class="btn btn-danger">
                                    Reset
                                </button>
                            </div> --}}
                            <div class="col-md-4 col-md-offset-5">
                                <button type="submit" class="btn btn-lg btn-success">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
