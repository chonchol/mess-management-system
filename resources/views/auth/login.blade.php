@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="wrapper">
          <form class="login form-horizontal"  role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <p class="title">Log in</p>
            <input id="email" placeholder="Type Your Email Address" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus/>
            <i class="fa fa-user"></i>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <input id="password" placeholder="Password" type="password" class="form-control" name="password" />
            <i class="fa fa-key"></i>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <a href="{{ url('/password/reset') }}">Forgot your password?</a>
            <label style="float: right;display: flex;font-size: 0.8em;color: #2196F3;">
                <input type="checkbox" name="remember"> Remember Me
            </label>
            <button>
              <i class="spinner"></i>
              <span class="state">Log in</span>
            </button>
          </form>
          </p>
        </div>
    </div>
</div>
@endsection
