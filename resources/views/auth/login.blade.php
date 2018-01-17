@extends('layouts.login')

@section('content')
<div class="login-box">
  <form class="login-form" method="POST" action="{{ route('login') }}" >
    {{ csrf_field() }}
    <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <label class="control-label">USERNAME</label>
      <input class="form-control" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
      @if ($errors->has('email'))
          <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
      <label class="control-label">PASSWORD</label>
      <input class="form-control" type="password" placeholder="Password" name="password" required>
      @if ($errors->has('password'))
          <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif
    </div>
    <div class="form-group">
      <div class="utility">
        <div class="animated-checkbox">
          <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><span class="label-text">Stay Signed in</span>
          </label>
        </div>
        <p class="semibold-text mb-2"><a href="{{ route('password.request') }}" data-toggle="flip">Forgot Password ?</a></p>
      </div>
    </div>
    <div class="form-group btn-container">
      <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
    </div>
  </form>
  <form class="forget-form" action="index.html">
    <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
    <div class="form-group">
      <label class="control-label">EMAIL</label>
      <input class="form-control" type="text" placeholder="Email">
    </div>
    <div class="form-group btn-container">
      <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
    </div>
    <div class="form-group mt-3">
      <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
    </div>
  </form>
</div>

@endsection
