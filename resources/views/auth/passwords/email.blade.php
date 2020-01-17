@extends('auth.app_auth')

@section('content')


<div class="row w-100 flex-grow">
    <div class="col-lg-8 mx-auto d-flex align-items-center justify-content-center">
        <div class="auth-form-transparent text-left p-5">
            <center>
                <div class="brand-logo">
                    <img src="{{asset("img/system-task.png")}}" alt="logo">
                </div>
                <h4>Reset Passaword</h4>
                <h6 class="font-weight-light">Enter ur email for send you a reset link</h6>
            </center>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form class="pt-3" method="POST" action="{{ route('password.email') }}">
              @csrf
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                      <i class="mdi mdi-account-outline text-primary"></i>
                    </span>
                  </div>
                  <input type="email" class="form-control form-control-lg border-left-0 @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" placeholder="Email" autocomplete="email" name="email" autofocus>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="my-3">
                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Send Password Reset Link') }}
                </button>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
