@extends('layouts.backend')

@section('pagetitle', 'Geplande afspraken')

@section('css_before')

@endsection

@section('css_after')

@endsection

@section('js_after')
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true,
                "language": {
                    "url": "/lang/dutch.json"
                }
            });
        });
    </script>

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-12 mb-3">
                <div>
                    <h1 class="mb-3">Geplande afspraken</h1>
                    @foreach($events as $event)
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p><strong>{{ $event->name }}</strong></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>{{ $event->started_at->format('d-M-Y H:i') }} - {{ $event->ended_at->format('d-M-Y H:i') }}</p>
                                            <div class="btn-group -pull-right">
                                                <a class="btn btn-primary"><i class="fas fa-envelope"></i></a>
                                                <a class="btn btn-danger"><i class="fas fa-times-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="description">
                                                <p>Lorem ipsum dolor sit amet,</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

