@extends('layouts.backend')

@section('pagetitle', 'Instellingen')

@section('css_before')

@endsection

@section('css_after')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-6 mb-3">
                <div class="mb-3">
                    <h1> Accountinstellingen</h1>
                </div>
                <form action="{{ route('invite.send') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="name">E-mail</label>
                        <input type="email" class="form-control" id="name" name="email" value="{{ $user->email }}">
                    </div>
                    <!--div class="form-group">
                        <label for="name">Nieuw wachtwoord</label>
                        <input type="password" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="name">Wachtwoord herhalen</label>
                        <input type="email" class="form-control" id="name">
                    </div-->

                        <div class="col">
                            <div class="form-check float-right">
                                <button type="submit" class="btn btn-primary float-right"><i class="fa fa-check"></i> Verzend</button><br><br>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection

