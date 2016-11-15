@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="wrapper">
          <form class="login form-horizontal"role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <p class="title">Register</p>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" autofocus/>
            <i class="fa fa-user"></i>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address">
            <i class="fa fa-envelope"></i>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" />
            <i class="fa fa-key"></i>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
            <i class="fa fa-check"></i>
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
            <button>
              <i class="spinner"></i>
              <span class="state">Register</span>
            </button>
          </form>
          </p>
        </div>
    </div>
</div>
@endsection
