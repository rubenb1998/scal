@extends('layouts.simple')

@section('pagetitle', 'Inloggen')

@section('css_before')
    <link rel="stylesheet" href="/css/login.css">
@endsection

@section('content')
    <div class="loginPage">
        <div class="left">
            <div class="inner"></div>
        </div>
        <div class="right">
           <div class="inner">
               <div class="heading text-center">
                   <h1>SuperCalendar</h1>
                   <p class="text-muted">Lorem ipsum dolor, Sit amet</p>
               </div>
               <form method="POST" action="{{ route('login')  }}">
                   @csrf

                   <div class="form-group">
                       <label for="emailInp">{{ __('E-Mail Address') }}</label>
                       <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" id="emailInp" placeholder="Enter email" required autofocus>

                       @if ($errors->has('email'))
                           <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                       @endif
                   </div>
                   <div class="form-group">
                       <label for="passInp">{{ __('Password') }}</label>
                       <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="passInp" placeholder="Enter password" required>

                       @if ($errors->has('password'))
                           <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                       @endif
                   </div>

                   <div class="form-group row mb-4">
                       <div class="col-md-5">
                           <div class="form-check">
                               <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                               <label class="form-check-label" for="remember">
                                   {{ __('Remember Me') }}
                               </label>
                           </div>
                       </div>
                       <div class="col-md-7">
                           <div class="forgotPw mb-5">
                               @if (Route::has('password.request'))
                                   <a class="btn btn-link" href="{{ route('password.request') }}">
                                       {{ __('Wachtwoord vergeten?') }}
                                   </a>
                               @endif
                           </div>
                       </div>
                   </div>

                   <div class="form-group row mb-0">
                       <div class="col-md-6">
                           <div class="btnHolder login">
                               <button type="submit" class="btn btn-primary">
                                   {{ __('Login') }}
                               </button>
                           </div>


                       </div>
                       <div class="col-md-6">
                           <div class="btnHolder register">
                                <a class="btn btn-secondary" href="{{ route('register') }}">
                                   {{ __('Register') }}
                                </a>
                           </div>
                       </div>
                   </div>
               </form>
           </div>
        </div>
    </div>

@endsection
