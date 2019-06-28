@extends('layouts.backend')

@section('pagetitle', 'Contactpersonen')

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
                <h1>Contactpersonen<a href="{{ route('contacts.create') }}" class="btn btn-success float-right"><i class="fa fa-plus"></i> Contact</a></h1>
            </div>
        </div>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Naam</th>
                    <th><i class="fa fa-pencil"></i> Info/Notitie</th>
                    <th><i class="fa fa-at"></i> E-Mail</th>
                    <th><i class="fa fa-phone"></i> Telefoon</th>
                    <th>Actie</th>
                </tr>
            </thead>
            <tbody>
                @foreach(Auth::user()->contacts as $contact)
                <tr>
                    <td><a href="{{ route('contacts.show', ['id' => $contact->id]) }}">{{ $contact->name }}</a></td>
                    <td>{{ $contact->info }}</td>
                    <td><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></td>
                    <td><a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></td>
                    <td>
                        <a href="#" class="btn btn-primary"><i class="fas fa-envelope"></i></a>
                        <a href="{{ route('contacts.edit', ['id' => $contact->id]) }}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Naam</th>
                    <th><i class="fa fa-pencil"></i> Info/Notitie</th>
                    <th><i class="fa fa-at"></i> E-Mail</th>
                    <th><i class="fa fa-phone"></i> Telefoon</th>
                    <th>Actie</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection

