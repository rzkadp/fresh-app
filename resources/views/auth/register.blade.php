@extends('auth.layouts.master')

@section('title', 'Register')
@section('header-title', 'Register')

@section('content')
<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>
            <div class="card card-primary">
                <div class="card-header">{{ __('Register') }}</div>

              <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                  <div class="form-group">
                    <label for="name">Full Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="role_id">Role Access</label>
                    <select name="role_id" id="role_id" class="form-control @error('role_id') is-invalid @enderror" name="role_id" value="{{ old('role_id') }}" required autocomplete="role_id">
                      <option value="1">Manager</option>
                      <option value="2">Supervisor</option>
                      <option value="3">Staff</option>
                    </select>

                    @error('role_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block">Password Confirmation</label>
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                  </div>

                  {{-- <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div> --}}

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                    @if (Route::has('login'))
                        <a class="btn btn-link" href="{{ route('login') }}">
                            {{ __('Already have an Account? Sign in here!') }}
                        </a>
                    @endif
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
