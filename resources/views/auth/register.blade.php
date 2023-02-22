@extends('layouts.app')
@section('content')
<div class="sidenav">
         <div class="login-main-text">
         <a href="/"><img alt="" src="{{ URL::to('/') }}/DoctorSinaLogoTextWhite.png" width="300px"></a>
         <hr><br>
            <h2>Application<br> Signup Page</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-12 col-sm-12">
            <div class="login-form">
<!--**********************************************************************************************************************************-->
            <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                        <h1 class="col-md-4 text-md-right"></h1>
                        <div class="col-md-6">
                        <h1 class="">Signup</h1>Already have an account? <a href="/login">Login here!</a>
                            <hr>
</div>
                        </div>
<!--**********************************************************************************************************************************-->
<div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control form-control-lg @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="name" autofocus placeholder="Firstname">

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!--**********************************************************************************************************************************-->
<div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control form-control-lg @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name"  placeholder="Lastname">

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!--**********************************************************************************************************************************-->
<div class="form-group row">
                            <label for="national_id" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                  <input id="national_id" type="text" class="form-control form-control-lg @error('national_id') is-invalid @enderror" name="national_id" value="{{ old('national_id') }}" required autocomplete="national_id"  placeholder="National ID">

                                @error('national_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!--**********************************************************************************************************************************-->
<div class="form-group row">
                            <label for="national_id" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                            <select class="form-control form-control-lg" aria-invalid="false" id="type" name="type" value="{{ old('type') }}" required autocomplete="type" class="form-control @error('type') is-invalid @enderror">
                                                            <option>You are </option>
                                                            <option value="patient">Patient</option>
                                                            <option value="doctor">Doctor</option>
                                                        </select>
                                @error('national_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!--**********************************************************************************************************************************-->
<div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail AddressS">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!--**********************************************************************************************************************************-->
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!--**********************************************************************************************************************************-->
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

<!--**********************************************************************************************************************************-->
                    </form>
<!--**********************************************************************************************************************************-->
            </div>
         </div>
      </div>
@endsection
<style>


.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #e83e8c;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 30%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 4%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}


    </style>