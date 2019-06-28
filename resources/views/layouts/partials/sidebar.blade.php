<div class="sidebar">
    <div class="brand">
        <div class="topWrapper">
            <a href="/">
                <h4>SuperCalendar</h4>
            </a>
        </div>
    </div>
    <div class="sidebar-nav">
        <ul class="sidebar-text">
            <a href="{{ route('invite.create') }}"><li class="sbNew"><i class="far fa-calendar-plus"></i> Nieuwe afspraak</li></a>
            <a href="{{ route('home') }}"> <li><i class="far fa-calendar-alt"></i> Dashboard</li></a>
            <a href="{{ route('invite.list') }}"> <li><i class="far fa-calendar-check"></i> Geplande afspraken</li></a>
            <a href="{{ route('contacts.index') }}"><li class="contacts"><i class="far fa-address-book"></i> Contactpersonen</li></a>
            <a href="#"> <li><i class="far fa-calendar-plus"></i> Contactgroepen</li></a>
           <!-- a href="{{ route('pricing.index') }}"> <li>< Upgraden</li></a>-->
        </ul>
    </div>
    <div class="sidebar-footer">
            <span>Copyright &copy; 2019 | Thunderdome '97</span>
    </div>
</div>