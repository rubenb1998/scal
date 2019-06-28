@extends('layouts.backend')

@section('pagetitle', 'Nieuwe afspraak')

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
            <div class="col col-md-6 mb-3">
                <div class="mb-3">
                    <h1> Nieuwe afspraak</h1>
                </div>
                <form action="{{ route('invite.send') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Naam afspraak</label>
                        <input type="text" class="form-control" id="name" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Bericht</label>
                        <textarea class="form-control" id="message" name="message" value=""></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Selecteer agenda/account</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2" name="calendar_id">
                            @foreach(Auth::user()->googleAccounts as $googleAccount)
                                <option value="{{ $googleAccount->google_id }}">{{ $googleAccount->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Selecteer contactpersoon</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2" name="email">
                            @foreach(Auth::user()->contacts as $contact)
                            <option id="{{ $contact->id }}" value="{{ $contact->email }}">{{ $contact->name }} <small>({{ $contact->email }})</small></option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group mt-2">
                                <input type="checkbox" class="form-check-input" id="another" name="another">
                                <label class="form-check-label" for="another">Maak er nog 1</label>

                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check float-right">
                                <button type="submit" class="btn btn-primary float-right"><i class="fa fa-check"></i> Verzend</button><br><br>
                            </div>
                        </div>
                    </div>

                </form>
                {{ $errors }}
            </div>
        </div>
    </div>
@endsection

