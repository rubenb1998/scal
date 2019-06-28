
        <div class="navbar navbar-expand-lg">
            <div class="searchBox">
                <form action="" method="">
                    <input type="text" placeholder="Geef een zoekopdracht op...">
                    <button type="submit"><i class="fas fa-search fa-flip-horizontal fa-1x"></i></button>
                </form>
            </div>

            <div class="quickAction">
                <ul class="navbar-nav">
                    <div class="dropdown">
                        <span id="tMessage"></span>
                        <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                             {{ Auth::user()->name }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                            <p class="dropdown-item-text text-white"><i class="fas fa-envelope"></i> {{ Auth::user()->email }}</p>
                            <a class="dropdown-item" href="{{ route('setting.index') }}"><i class="fas fa-user-cog"></i> Accountinstellingen</a>
                            <a class="dropdown-item" href="{{ route('google.index') }}"><i class="fas fa-user-plus"></i> Accounts koppelen</a>
                        </div>
                    </div>

                    <a href="#" class="nav-link waves-effect waves-light">
                        <li class="message">
                            <i class="fa fa-envelope"></i><span class="badge">12</span>
                        </li>
                    </a>

                    <li class="logOut">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                           <button class="lo" type="submit"><i class="fas fa-sign-out-alt"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
