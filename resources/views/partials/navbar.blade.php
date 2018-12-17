<ul class="navbar-nav my-lg-0">
    <!-- Profile -->
    <li class="pull-right">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-power-off"></i>Salir
        </a>    
    </li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
        {{-- <div class="dropdown-menu dropdown-menu-right animated">
            <ul class="dropdown-user">
            </ul>
        </div> --}}
</ul>