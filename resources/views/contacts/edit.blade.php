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
                <h1><i class="fa fa-pencil-alt"></i> {{ $contact->name }}</a></h1>
            </div>
        </div>
        <div class="row">
            <div class="col col-md12 mb-3">
                <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}">
                    </div>
                    <div class="form-group">
                        <label for="pwd">E-Mail</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Telefoon Nr.</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}">
                    </div>
                    <div class="form-check float-right">
                        <button type="submit" class="btn btn-primary float-right"><i class="fa fa-check"></i> Opslaan</button><br><br>
                    </div>
                </form>
                {{ $errors }}
            </div>
        </div>
    </div>
@endsection

