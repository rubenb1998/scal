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

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
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

                    <div class="form-group mb-0">
                        <div class="col-md-12 text-center">
                            <div class="btnHolder login">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
