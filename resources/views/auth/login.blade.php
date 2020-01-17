@extends('auth.app_auth')
@section('content')
<div class="row w-100 flex-grow">
    <div class="col-lg-8 mx-auto d-flex align-items-center justify-content-center">
        <div class="auth-form-transparent text-left p-5">
            <center>
                <div class="brand-logo">
                    <img src="img/system-task.png" alt="logo">
                </div>
                <h4>Welcome back!</h4>
                <h6 class="font-weight-light">Happy to see you again!</h6>
            </center>
            <form class="pt-3" method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                      <i class="mdi mdi-account-outline text-primary"></i>
                    </span>
                  </div>
                  <input type="email" class="form-control form-control-lg border-left-0 @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" placeholder="Username" autocomplete="email" name="email" autofocus>
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
                  <input id="password" name="password" type="password" class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror" autocomplete="current-password" placeholder="Password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="my-3">
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                  {{ __('Login') }}
                </button>
              </div>
              <div class="my-2 d-flex justify-content-between align-items-center">
                <div class="form-check">
                  <label class="form-check-label text-muted">
                  <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    Keep me signed in
                  </label>
                </div>
                @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="auth-link text-black">Forgot password?</a>
                @endif
              </div>
              <div class="text-center mt-4 font-weight-light">
                Don't have an account? <a class="text-primary" href="{{ route('register') }}">Create</a>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
