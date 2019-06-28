@extends('layouts.backend')

@section('pagetitle', 'Dashboard')

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
            <div class="col col-md12 mb-3">
                <h1><i class="fa fa-plus"></i> Contact</a></h1>
            </div>
        </div>
        <div class="row">
            <div class="col col-md12 mb-3">
                <form action="{{ route('contacts.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="pwd">E-Mail</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Telefoon Nr.</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="form-check float-right">
                        <button type="submit" class="btn btn-primary float-right"><i class="fa fa-check"></i> Opslaan</button><br><br>
                        <input type="checkbox" class="form-check-input" id="another" name="another">
                        <label class="form-check-label" for="another">Maak er nog 1</label>

                    </div>
                </form>
                {{ $errors }}
            </div>
        </div>
    </div>
@endsection

