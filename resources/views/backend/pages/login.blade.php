@extends('backend.layouts.blank_master')

@section('content')
<!-- Content -->

<div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="/" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                  <img src="{{ asset('frontend_assets/img/logo@2x.png') }}" alt="LOGO" width="200px">
                  </span>
               
                </a>
              </div>
              <!-- /Logo -->
              @if(session('success'))<div class="alert alert-danger" role="alert">{{session('success')}}</div>@endif
              <h4 class="mb-2">Welcome to Doctorsina! 👋</h4>
              <p class="mb-4">Please sign-in to your account and start the adventure</p>

              <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary btn-block">Signin</button>
                            </div>
                        </form>

              <p class="text-center">
                <span>New on our platform?</span>
                <a href="/registre">
                  <span>Create an account</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->
@endsection