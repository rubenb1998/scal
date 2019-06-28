@extends('layouts.backend')

@section('pagetitle', 'Dashboard')

@section('css_before')

@endsection

@section('css_after')

@endsection

@section('js_after')

@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        @forelse ($accounts as $account)
            google account: {{ $account->name }}<br>
            @forelse($account->calendars as $calendar)
                * {{ $calendar->name }} <a href="enable/disable">enable/disable sync</a><a href="enable/disable">delete/ can be readded</a><br>
            @empty
                No calendars.
            @endforelse
        @empty
            <li class="list-group-item">
                No accounts.
            </li>
        @endforelse
    </div>
    <!-- END Page Content -->
@endsection
