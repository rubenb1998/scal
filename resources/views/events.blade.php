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
        @forelse ($events as $event)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <strong>Niet beschikbaar</strong><br>
                    <span class="text-muted">
                        @if ($event->allday)
                            {{ $event->started_at->format('l jS F Y') }}
                            (all day)
                        @else
                            {{ $event->started_at->format('l jS F Y \a\t H:i') }}
                            ({{ $event->duration }})
                        @endif
                    </span>
                </div>
                <span
                    class="badge badge-pill"
                    style="background-color: {{ $event->calendar->color }};"
                >
                    {{ $event->calendar->name }}
                </span>
            </li>
            {{ $event }}
        @empty
            <li class="list-group-item">
                No events.
            </li>
        @endforelse
    </div>
    <!-- END Page Content -->
@endsection
