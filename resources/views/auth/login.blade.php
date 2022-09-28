@extends('auth.layouts.master')

@section('title', 'Login')
@section('header-title', 'Login')

@section('content')
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
      <div class="login-brand">
        <img src="{{ asset('assets/img/stisla-fill.svg') }}" alt="logo" width="100" class="shadow-light rounded-circle">
      </div>

      <div class="card card-primary">
        <div class="card-header"><h4>Login</h4></div>

        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
              @csrf
            <div class="form-group">
              <label for="email" class="control-label">{{ __('E-Mail Address') }}</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group">
              <div class="d-block">
                <label for="password" class="control-label">{{ __('Password') }}</label>
                <div class="float-right">
                  @if (Route::has('password.request'))
                      <a class="text-small" href="{{ route('password.request') }}">
                          {{ __('Forgot Your Password?') }}
                      </a>
                  @endif
                </div>
              </div>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

              
              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            {{-- <div class="form-group">
              <div class="custom-control custom-checkbox">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                      {{ __('Remember Me') }}
                  </label>
              </div>
            </div> --}}

            <div class="form-group">
              <button type="submit" class="btn btn-primary">
                  {{ __('Login') }}
              </button>
              
              {{-- @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                  </a>
              @endif --}}
            </div>
          </form>
        </div>
      </div>
      <div class="mt-1 text-muted text-center">
        Don't have an account? <a href="{{ route('register') }}">Create One</a>
      </div>
      <div class="simple-footer">
        Copyright &copy; Stisla 2018
      </div>
    </div>
  </div>
@endsection
