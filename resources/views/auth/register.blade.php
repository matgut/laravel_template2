@extends('auth.app_auth')

@section('content')
<div class="row flex-grow">
    <div class="col-lg-8 mx-auto d-flex align-items-center justify-content-center">
      <div class="auth-form-transparent text-left p-3">
        <center>
            <div class="brand-logo">
                <img src={{asset("img/system-task.png")}} alt="logo">
            </div>
            <h4>New here?</h4>
            <h6 class="font-weight-light">Join us today! It takes only few steps</h6>
        </center>
        <form class="pt-3" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                        </span>
                    </div>
                    <input type="text" id="name" class="form-control form-control-lg border-left-0 @error('name') is-invalid @enderror" placeholder="Username" name="name" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-email-outline text-primary"></i>
                        </span>
                    </div>
                    <input type="email" id="email" class="form-control form-control-lg border-left-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                        </span>
                    </div>
                    <input type="password" id="password" class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                        </span>
                    </div>
                    <input type="password" id="password-confirm" class="form-control form-control-lg border-left-0" name="password_confirmation" autocomplete="new-password" placeholder="Password confirmation">
                </div>
            </div>
            <div class="mb-4">
                <div class="form-check">
                <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input">
                    I agree to all Terms & Conditions
                </label>
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Register') }}
                </button>
            </div>
            <div class="text-center mt-4 font-weight-light">
                Already have an account? <a href="/" class="text-primary">Login</a>
            </div>
        </form>
      </div>
    </div>
    <div class="col-lg-6 register-half-bg d-flex flex-row">
      <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
    </div>
  </div>
@endsection
