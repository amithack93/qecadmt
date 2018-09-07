@extends('layouts.blanklayout')

@section('title','Login')
@section('content')
<div class="row m-b-20">
    <div class="col-md-12">
        <h3 class="text-center txt-primary">Sign In</h3>
    </div>
</div>
<form class="form-horizontal" method="post" action="{{ route('login') }}">
    {{ csrf_field() }}
    <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Your Email Address">
        <span class="md-line"></span>
    </div>
    @if ($errors->has('email'))
    <span class="help-block m-10">
        <strong class="text-danger">{{ $errors->first('email') }}</strong>
    </span>
    @endif
    <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <input id="password" type="password" class="form-control" name="password" placeholder="password" required>
        <span class="md-line"></span>
    </div>
    @if ($errors->has('password'))
    <span class="help-block">
        <strong class="text-danger">{{ $errors->first('password') }}</strong>
    </span>
    @endif
    <div class="row m-t-30">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                Sign in
            </button>
        </div>
    </div>
</form>
@stop
