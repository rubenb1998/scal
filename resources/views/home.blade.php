@extends('layouts.backend')

@section('pagetitle', 'Dashboard')

@section('css_before')

@endsection

@section('css_after')

@endsection

@section('js_after')
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events: '{{ route('events.json') }}',
                local: 'ISO',
                locale: 'nl',
                    // themeSystem: 'bootstrap'
                timeFormat: 'HH:mm',
                eventRender: function(event, element){
                    element.popover({

                        animation:true,
                        delay: 300,
                        content: "<b>Titel</b> aaa"+event.title+"<b>Locatie "+ event.location +"</br>Desc: "+event.description,
                        trigger: 'hover'
                    });
                },
            });

        });
    </script>
@endsection

@section('content')
    <div id="calendar"></div>
@endsection
