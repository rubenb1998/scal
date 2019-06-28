@extends('layouts.simple')

@section('pagetitle', 'Wachtwoord vergeten')

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
                    <h1>{{ __('Reset Password') }}</h1>
                    <p class="text-muted">Lorem ipsum dolor, Sit amet</p>
                </div>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

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
                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('email') }}" id="passInp" placeholder="Enter email" required autofocus>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                        @endif
                    </div>

                    <div class="form-group mb-5">
                        <label for="passInp2">{{ __('Confirm Password') }}</label>
                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" id="passInp2" placeholder="Repeat password" required>
                    </div>

                    <div class="form-group mb-0">
                        <div class="col-md-12 text-center">
                            <div class="btnHolder login">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
