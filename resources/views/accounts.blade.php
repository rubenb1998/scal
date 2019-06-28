@extends('layouts.backend')

@section('pagetitle', 'Accounts beheren')

@section('css_before')

@endsection

@section('css_after')

@endsection

@section('js_after')

@endsection

@section('content')
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col col-md-12 mb-3">
                <h1 class="mb-5">Google accounts<a href="{{ route('google.store') }}" class="btn btn-success float-right"><i class="fa fa-plus"></i> Account koppelen</a></h1>
            </div>
        </div>
        @if(!$accounts)
        <li class="list-group-item">
            Nog geen nieuwe accounts toegevoegd!
        </li>
        @endif
        @foreach($accounts as $account)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span>{{ $account->name }}</span>
                <form action="{{ route('google.destroy', $account) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}

                    <button type="submit" class="btn btn-outline-secondary btn-sm">
                        delete
                    </button>
                </form>
            </li>
        @endforeach
    </div>
    <!-- END Page Content -->
@endsection
